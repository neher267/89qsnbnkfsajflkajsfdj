<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Http\Requests\RegistrationRequest;
use Carbon\Carbon;

class RegisterController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!session('validation'))
        {
            session([
                'validation' => 'no',
                ]);
        }          
        $genders = config('settings.genders');

        return view('frontend.auth.register', compact('genders'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(RegistrationRequest $request)
    {   
        //dd(Carbon::parse($request->dob));
        $date = Carbon::parse($request->dob); 
        $years = Carbon::now()->diffInYears($date);
        $data = $request->all();

        $data['mobile'] = session('mobile'); 
        $data['category'] = $this->category($years); 
        $data['dob'] = $date;

        $user = Sentinel::registerAndActivate($data);
        
        $role = Sentinel::findRoleBySlug('admin');
        if($role){ $role->users()->attach($user); }  

        session(['validation' => 'no', 'mobile' => '']);
        Sentinel::login($user);

        return redirect('/');  
    }

    protected function category(int $years)
    {
        if($years > 4 && $years <= 12)
            return 0; //infant
        elseif ($years > 12 && $years <= 18)
            return 1; //young
        elseif($years > 19 && $years <= 150)
            return 2; //adults

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

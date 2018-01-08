<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentClass;
use App\Gender;
use Sentinel;
use App\Http\Requests\Registration;

class RegisterController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes = StudentClass::get();
        $genders = Gender::get();

        return view('auth.register', compact('classes','genders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Registration $request)
    {   
        $data = $request->all();
        $data['mobile'] = session('mobile'); 
        $user = Sentinel::registerAndActivate($data);
        $role = Sentinel::findRoleBySlug('student');
        if($role){ $role->users()->attach($user); }  

        session(['validation' => 'no', 'mobile' => '']);
        Sentinel::login($user);

        return redirect('/');  
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

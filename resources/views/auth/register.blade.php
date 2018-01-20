@extends('layouts.master')

@section('main-content')
<div class="register-form-main">
    <div class="container">
        <div class="title-div">
            <h3 class="tittle">
                <span>R</span>egistration
            </h3>
            <div class="tittle-style">

            </div>
        </div>
        @if(session('validation', 'no') == 'no')
            <div class="col-md-offset-3 col-sm-offset-3 col-md-6 col-sm-6 form-grids">
                @if ($errors->has('mobile'))
                      <span class="help-block">
                          <strong>{{ $errors->first('mobile') }}</strong>
                      </span>
                 @endif
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="country_code">+880</span>
                    <input  id="phone_number" type="text" class="form-control" placeholder="Mobile No">                     
                </div>
                <button class="btn btn-1 btn-1d" style="margin-bottom: 150px" onclick="smsLogin()">Verify</button>
            </div>

            <form id="login_success" method="post" action="{{ url('validation') }}">
                {{ csrf_field() }}
                <!-- <input id="csrf" type="hidden" name="csrf" />
                      <input id="code" type="hidden" name="code" /> -->
                      <input id="mobile" type="hidden" name="mobile">
            </form>
            <script>
                      function loginCallback(response) {
                           if (response.status === "PARTIALLY_AUTHENTICATED") 
                           {
                            // document.getElementById("code").value = response.code;
                               // document.getElementById("csrf").value = response.state;
                               document.getElementById("mobile").value = document.getElementById("phone_number").value;
                               document.getElementById("login_success").submit();
                           }
                      }
            </script>
            @else   
        <div class="login-form">
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
              
            <form action="{{ route('register.store') }}" method="post">
            {{ csrf_field() }}
                <div class="">
                    <p>User Name </p>
                    <input type="text" class="name" name="name" required="" />
                </div>
                <div class="">
                    <p>Gender </p>
                    @foreach($genders as $gender)
                    <input type="radio" class="rado" name="gender_id" required="" value="{{$gender->id}}" /><strong style="margin-left: 10px;">{{$gender->name}}</strong>
                    @endforeach
                </div>
                <div class="">
                    <p>Class</p>
                    <select name="class_id" class="form-control" required>
                    @foreach($classes as $class)
                        <option value="{{$class->id}}" style="margin-right: 20px">{{$class->name}}</option>                        
                    @endforeach
                    </select>
                </div>
                <div class="">
                    <p>Institute Name</p>
                    <input type="text" class="name" name="institute_name" required="" />
                </div>
                <div class="">
                    <p>Password</p>
                    <input type="password" class="password" name="password" id="password1" required="" />
                </div>
                <div class="">
                    <p>Confirm Password</p>
                    <input type="password" class="password" name="password_confirmation" id="password2" required="" />
                </div>
                <label class="anim">
                    <input type="checkbox" class="checkbox" required>
                    <span>I Accept Terms & Conditions</span>
                </label>
                <input type="submit" value="Register">
            </form>
        </div>
        @endif
    </div>
</div>

<script>
          // initialize Account Kit with CSRF protection
         
         AccountKit_OnInteractive = function()
         {
            AccountKit.init(
              {
                appId:"1991821631059766", 
                state: "csrf_field()", 
                version:"v2.11",
                fbAppEventsEnabled:true,
                redirect:"{{url('register.create')}}"
              }
            );
          };
         

          // phone form submission handler
          function smsLogin() {
            var countryCode = document.getElementById("country_code").innerHTML;
            var phoneNumber = document.getElementById("phone_number").value;
            AccountKit.login(
              'PHONE', 
              {countryCode: countryCode, phoneNumber: phoneNumber}, // will use default values if not specified
              loginCallback
            );
          }
</script> 

@endsection
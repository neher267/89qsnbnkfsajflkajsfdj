@extends('frontend.layouts.master')

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
        @if(session('validation') == 'no')
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
                <div>
                    <p>User Name </p>
                    <input type="text" class="name" name="name" required="" />
                </div>
                <div>
                    <p>Gender </p>

                    @foreach($genders as $key => $value)
                    <input type="radio" class="rado" name="gender" required="" value="{{$key}}" /><strong style="margin-left: 10px;">{{$value}}</strong>
                    @endforeach
                </div>

                <div>
                    <p>Date Of Bitrh</p>
                    <input type="date" class="name" name="dob" required="" />
                </div>
                
                <div>
                    <p>Password</p>
                    <input type="password" class="password" name="password" id="password1" required="" />
                </div>
                <div>
                    <p>Confirm Password</p>
                    <input type="password" class="password" name="password_confirmation" id="password2" required="" />
                </div>
                <!-- <label class="anim">
                    <input type="checkbox" class="checkbox" required>
                    <span>I Accept Terms & Conditions</span>
                </label> -->
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
                version:"v1.1",
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
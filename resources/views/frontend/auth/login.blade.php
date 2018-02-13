@extends('frontend.layouts.master')

@section('main-content')
<div class="register-form-main">
    <div class="container">
        <div class="title-div">
            <h3 class="tittle">
                <span>L</span>ogin
                <span>F</span>orm
            </h3>
            <div class="tittle-style">

            </div>
        </div>
        <div class="login-form">
            <form action="{{ url('sign-in' )}}" method="post">
                {{ csrf_field() }}
                <div class="">
                    <p>Mobile</p>
                    <input type="text" class="name" name="mobile" required="" />
                </div>
                <div class="">
                    <p>Password</p>
                    <input type="password" class="password" name="password" required="" />
                </div>
                <label class="anim">
                    <input type="checkbox" class="checkbox">
                    <span> Remember me ?</span>
                </label>
                <div class="login-agileits-bottom wthree">
                    <h6>
                        <a href="#">Forgot password?</a>
                    </h6>
                </div>
                <input type="submit" value="Sign In">
                <div class="register-forming">
                    <p>To Register New Account --
                        <a href="{{ route('register.create') }}">Click Here</a>
                    </p>
                </div>
            </form>
        </div>

    </div>
</div>

@endsection
@extends('layouts.master')

@section('main-content')
<div class="register-form-main">
    <div class="container">
        <div class="title-div">
            <h3 class="tittle">
                <span>R</span>egister
                <span>F</span>orm
            </h3>
            <div class="tittle-style">

            </div>
        </div>
        <div class="login-form">
            <form action="#" method="post">
                <div class="">
                    <p>User Name </p>
                    <input type="text" class="name" name="user name" required="" />
                </div>
                <div class="">
                    <p>E-mail</p>
                    <input type="email" class="password" name="email" required="" />
                </div>
                <div class="">
                    <p>Password</p>
                    <input type="password" class="password" name="Password" id="password1" required="" />
                </div>
                <div class="">
                    <p>Confirm Password</p>
                    <input type="password" class="password" name="Password" id="password2" required="" />
                </div>
                <label class="anim">
                    <input type="checkbox" class="checkbox">
                    <span>I Accept Terms & Conditions</span>
                </label>
                <input type="submit" value="Register">
            </form>
        </div>

    </div>
</div>

@endsection
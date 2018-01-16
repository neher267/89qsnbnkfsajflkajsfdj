@extends('layouts.master')


@section('main-content')

 <div class="contact">
 	<img src="{{asset("images/$subject$year$class.png")}}" alt="{{$subject.'-year-'.$year .'-class-'.$class}}" style="margin-left: 28%">
 </div>

@endsection
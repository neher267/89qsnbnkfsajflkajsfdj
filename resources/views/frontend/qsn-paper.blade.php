@extends('frontend.layouts.master')

@section('banner')
	@include('frontend.layouts.partials._banner')
@endsection

@section('main-content')

 <div class="contact">
 	<img src="{{asset("images/$subject$year$class.png")}}" alt="{{$subject.'-year-'.$year .'-class-'.$class}}" style="margin-left: 28%">
 </div>

@endsection

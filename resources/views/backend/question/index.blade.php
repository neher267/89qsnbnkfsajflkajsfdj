@extends('backend.layouts.master')

@section('main-content')
<div class="panel panel-widget forms-panel">
	<div class="progressbar-heading general-heading">
		<h4>All Questions :</h4>
	</div>
	<div class="forms">
			<h3 class="title1"></h3>
			@if (session('success'))
			    <div class="alert alert-success flash">
			        {{ session('success') }}
			    </div>
			@endif
			<div class="form-three widget-shadow">
				<table class="table table-bordered" style="overflow-y: scroll; overflow-x: scroll;">
					<thead>
						<tr>
							<td>id</td>
							<td>Question</td>
							<td>Option a</td>
							<td>Option b</td>
							<td>Option c</td>
							<td>Option d</td>
							<td>Ans</td>
							<td>Actions</td>
						</tr>
					</thead>
					<tbody>
						@php
						$i = 0;
						@endphp
						@foreach($questions as $question)
						<tr>
							<td>{{++$i}}</td>
							<td>{{$question->question}}</td>
							<td>{{$question->a}}</td>
							<td>{{$question->b}}</td>
							<td>{{$question->c}}</td>
							<td>{{$question->d}}</td>
							<td>{{$question->ans}}</td>
							<td>
								<a href="{{route('questions.edit', $question)}}" class="btn btn-sm btn-default">edit</a>
								<a href="#" class="btn btn-sm btn-danger">delete</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
	</div>
</div>
@stop
@section('script')
	@include('common.script')
@endsection
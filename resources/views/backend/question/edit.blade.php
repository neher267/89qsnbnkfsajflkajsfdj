@extends('backend.layouts.master')

@section('main-content')
<div class="panel panel-widget forms-panel">
	<div class="progressbar-heading general-heading">
		<h4>Edit Question :</h4>
	</div>
	<div class="forms">
			<h3 class="title1"></h3>
			@if (session('success'))
			    <div class="alert alert-success flash">
			        {{ session('success') }}
			    </div>
			@endif
			<div class="form-three widget-shadow">
				<form class="form-horizontal" action="{{route('questions.update', $question)}}" method="post">
					{{ csrf_field() }}
					{{ method_field('PATCH') }}

					<div class="form-group">
						<label for="radio" class="col-sm-2 control-label">Student Category</label>
						<div class="col-sm-8">
							@foreach(config('settings.categories') as $key => $value)
							<div class="radio-inline"><label><input name="category" type="radio" value="{{$key}}" required {{$question->category == $key ? 'checked': ''}}>{{$value}}</label></div>
							@endforeach
						</div>
					</div>
					<div class="form-group">
						<label for="radio" class="col-sm-2 control-label">Subject</label>
						<div class="col-sm-8">
							@foreach(config('settings.subjects') as $key => $value)
							<div class="radio-inline"><label><input name="subject" type="radio" value="{{$key}}" required {{$question->subject == $key ? 'checked': ''}}>{{$value}}</label></div>
							@endforeach
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Question</label>
						<div class="col-sm-8">
							<input name="question" id="" type="text" class="form-control1" required  value="{{$question->question}}">
						</div>						
					</div>

					<div class="form-group">
						<label for="option1" class="col-sm-2 control-label">Option A</label>
						<div class="col-sm-8">
							<input name="a" id="option1" type="text" class="form-control1"  required value="{{$question->a}}">
						</div>						
					</div>


					<div class="form-group">
						<label for="option2" class="col-sm-2 control-label">Option B</label>
						<div class="col-sm-8">
							<input name="b" id="option2" type="text" class="form-control1"  required value="{{$question->b}}">
						</div>						
					</div>

					<div class="form-group">
						<label for="option3" class="col-sm-2 control-label">Option C</label>
						<div class="col-sm-8">
							<input name="c" id="option3" type="text" class="form-control1"  required value="{{$question->c}}">
						</div>						
					</div>

					<div class="form-group">
						<label for="option4" class="col-sm-2 control-label">Option D</label>
						<div class="col-sm-8">
							<input name="d" id="optionr" type="text" class="form-control1"  required value="{{$question->d}}">
						</div>						
					</div>

					<div class="form-group">
						<label for="radio" class="col-sm-2 control-label">Answer</label>
						<div class="col-sm-8">
							@foreach(config('settings.options') as $key=>$value)
							<div class="radio-inline"><label><input name="ans" type="radio" value="{{$key}}" required {{$question->ans == $key ? 'checked': ''}}> Option {{$value}}</label></div>
							@endforeach 
						</div>
					</div>

					<div class="form-group">
						<label for="radio" class="col-sm-2 control-label">Hardness</label>
						<div class="col-sm-8">
							@foreach(config('settings.weights') as $key => $value)								
							<div class="radio-inline">
								<label><input name="weight" type="radio" value="{{$key}}" required {{$question->weight == $key ? 'checked': ''}}>{{$value}}</label>
							</div>
							@endforeach							
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-8">
							<input type="submit" class="btn btn-success" value="Update">
						</div>						
					</div>
				</form>
			</div>
	</div>
</div>
@stop
@section('script')
	@include('common.script')
@endsection
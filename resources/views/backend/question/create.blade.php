@extends('backend.layouts.master')

@section('main-content')
<div class="panel panel-widget forms-panel">
	<div class="progressbar-heading general-heading">
		<h4>General Form :</h4>
	</div>
	<div class="forms">
			<h3 class="title1"></h3>
			<div class="form-three widget-shadow">
				<form class="form-horizontal" action="{{route('questions.store')}}" method="post">
					{{ csrf_field() }}

					<div class="form-group">
						<label for="radio" class="col-sm-2 control-label">Student Category</label>
						<div class="col-sm-8">
							@foreach(config('settings.categories') as $key => $value)
							<div class="radio-inline"><label><input name="category" type="radio" value="{{$key}}" required>{{$value}}</label></div>
							@endforeach
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Question</label>
						<div class="col-sm-8">
							<input name="" id="" type="text" class="form-control1" required>
						</div>						
					</div>

					<div class="form-group">
						<label for="option1" class="col-sm-2 control-label">Option A</label>
						<div class="col-sm-8">
							<input name="option[]" id="option1" type="text" class="form-control1"  required>
						</div>						
					</div>


					<div class="form-group">
						<label for="option2" class="col-sm-2 control-label">Option B</label>
						<div class="col-sm-8">
							<input name="option[]" id="option2" type="text" class="form-control1"  required>
						</div>						
					</div>

					<div class="form-group">
						<label for="option3" class="col-sm-2 control-label">Option C</label>
						<div class="col-sm-8">
							<input name="option[]" id="option3" type="text" class="form-control1"  required>
						</div>						
					</div>

					<div class="form-group">
						<label for="option4" class="col-sm-2 control-label">Option D</label>
						<div class="col-sm-8">
							<input name="option[]" id="optionr" type="text" class="form-control1"  required>
						</div>						
					</div>

					<div class="form-group">
						<label for="radio" class="col-sm-2 control-label">Answer</label>
						<div class="col-sm-8">
							@foreach(config('settings.options') as $value)
							<div class="radio-inline"><label><input name="ans" type="radio" value="{{$value}}" required> Option {{$value}}</label></div>
							@endforeach 
						</div>
					</div>

					<div class="form-group">
						<label for="radio" class="col-sm-2 control-label">Hardness</label>
						<div class="col-sm-8">
							<div class="radio-inline"><label><input name="weight" type="radio" value="0" required>Very Easy</label></div>
							<div class="radio-inline"><label><input name="weight" type="radio" value="1" required> Easy</label></div>
							<div class="radio-inline"><label><input name="weight" type="radio" value="1" required> Medium</label></div>
							<div class="radio-inline"><label><input name="weight" type="radio" value="1" required> Hard</label></div>
							<div class="radio-inline"><label><input name="weight" type="radio" value="1" required> Very Hard</label></div>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-8">
							<input type="submit" class="btn btn-success" value="Save">
						</div>						
					</div>
				</form>
			</div>
	</div>
</div>
@endsection
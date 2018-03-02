@extends('frontend.layouts.master')


@section('main-content')

<style type="text/css">
	.btn{
		padding: 0px 5px;
	}
</style>

<div class="aitsresumethree">
	<div class="container" style="min-height: 405px;">
		<div class="col-sm-offset-3 col-sm-6" style="margin-bottom: 20px;">

			<div class="panel panel-primary">
			<div class="panel-heading" style="text-align: center;">
				Score: {{request()->user()->marks}}
				<button class="btn btn-primary pull-right" onclick="gifts_show()">Gifts</button>
			</div>
			  <div class="panel-body">
			  @if($gifts->count())
			  	@foreach ($gifts->chunk(4) as $chunk)
				    <div id="gifts" class="row" style="border-top: 1px solid #337ab7; border-bottom: 1px solid #337ab7; display: none">
				    <button class="btn btn-default pull-right" onclick="gifts_hide()">Hide</button>
				        @foreach ($chunk as $gift)
				            <div class="col-xs-3" style=" margin-top: 15px;">
				            		<img src="{{asset($gift->image)}}" alt="{{$gift->name}}" style="height: 100%; width: 100%; border: 2px solid green">
				            		<p style="color: black"><strong>Name:</strong> {{$gift->name}}</p>
				            </div>				            
				        @endforeach				        
				    </div>
				@endforeach
				@else 
				        <div id="gifts" class="row" style="border-top: 1px solid #337ab7; border-bottom: 1px solid #337ab7; display: none">
					<h5 style="color: red; margin: 10px;">Sorry! Your marks is very poor!</h5>
					<button class="btn btn-default" onclick="gifts_hide()" style="margin-bottom: 5px; margin-left: 10px">Hide</button>
					</div>
				@endif
				 			  
			  	<div>		  		
			  		@if($question)						
						<form action="{{url('/check')}}" method="post">
							{{ csrf_field() }}

							<p style="color: black"><strong>Question: </strong>
								{{ $question->question }}
							</p>
							<p><strong style="color: black">Options:</strong></p>
							@foreach(config('settings.options') as $key => $value)
							<label style="display: block;"><input type="radio" name="ans" style="margin-top: 5px;" value="{{$key}}"> {{$question->$key}}</label>
							@endforeach
							<input type="hidden" name="main_ans" value="{{$question->ans}}">

							<div style="margin-top: 15px;">
								<input type="submit" class="btn btn-sm">
							</div>
						</form>
					@endif 			  		
			  	</div>
			  </div>
			</div>
		</div>	
	</div>
</div>

<script>	
	function next(index){
		document.getElementById('qsn').innerHTML = index;		
	}

	function gifts_show(){
		document.getElementById('gifts').style.display = "";
	}
	function gifts_hide(){
		document.getElementById('gifts').style.display = "none";
	}
</script>
@endsection

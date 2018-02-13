@extends('frontend.layouts.master')


@section('main-content')

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
			  	@foreach ($gifts->chunk(3) as $chunk)
				    <div id="gifts" class="row" style="border-top: 1px solid #337ab7; border-bottom: 1px solid #337ab7; display: none">
				    <button class="btn btn-default pull-right" onclick="gifts_hide()">Hide</button>
				        @foreach ($chunk as $gift)
				            <div class="col-xs-4" style=" margin-top: 15px;">
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
			  		@foreach($questions as $question)						
						<form action="{{url('/check')}}" method="post">
							{{ csrf_field() }}

							<p style="color: black"><strong>Qqestion: </strong>
								{{ $question->question }}
							</p>
							<p style="color: black; margin-top: 15px;"><strong>Answer: </strong>
								<input name="ans" type="text" style="padding: 0px; margin:0px">
								<input name="main_ans" type="hidden" value="{{$question->ans}}" style="padding: 0px; margin:0px">
							</p>
							<div style="margin-top: 15px;">
								<input type="submit" class="btn btn-sm">
							</div>
						</form>
					@endforeach			  		
			  	</div>			  	
				
				<br>
				</div>
				<div class="panel-footer">
					<div style="margin-left: 15%">
						{{ $questions->links() }}
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

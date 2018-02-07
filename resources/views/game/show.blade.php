@extends('layouts.master')


@section('main-content')

<div class="aitsresumethree">
	<div class="container" style="min-height: 405px;">
		<div class="col-sm-offset-3 col-sm-6" style="margin-bottom: 20px;">

			<div class="panel panel-primary">
			<div class="panel-heading">
				Play Game
			</div>
			  <div class="panel-body">
			  	<div>
			  		
			  		<p><strong>Qqestion: </strong>
			  			@foreach($questions as $question)
							{{ $question->question }}
						@endforeach
			  		</p>
			  	</div>
			  	
				<p><strong>Answer:  </strong><input type="text" style="padding: 0px; margin:0px"></p>
				<br>
				</div>
				<div class="panel-footer">
					{{ $questions->links() }}
				</div>
			</div>
		</div>	
	</div>
</div>

<script>	
	function next(index){
		document.getElementById('qsn').innerHTML = index;		
	}
</script>
@endsection

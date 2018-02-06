@extends('layouts.master')


@section('main-content')
<!-- short -->

<!-- //short-->

<!-- about -->
<div class="about-sec" id="about">
	<div class="container">
		<div class="title-div">
			<h3 class="tittle">
				<span>P</span>lay
			</h3>
			<div class="tittle-style">

			</div>
		</div>		
	</div>
</div>
<!-- //about -->
<!-- Achievements -->
<div class="aitsresumethree">
	<div class="container">
		<?php
			$a = $questions[0];
		?>		
		<h5>Qsn: <span id="qsn">{{$a['question']}}</span></h5>
		<br>
		<p>Ans: <input type="text" style="padding: 0px; margin:0px"></p>
		<br>
		<button id="1" class="btn" onclick="next(id)">Next</button>		
	</div>
</div>

<script>
	
	function next(index){
		

		document.getElementById('qsn').innerHTML = index;		
	}
</script>

@endsection
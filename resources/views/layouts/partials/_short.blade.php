<!-- short -->
<div class="services-breadcrumb">
	<div class="inner_breadcrumb">
		<ul class="short_ls">
			<li>
				<a href="{{ url('/') }}">Home</a>
				<span>| |</span>
			</li>
			<?php
				$results = explode('-',  Request::segment(1));
			?>
			<li style="text-transform: capitalize;">
				@foreach($results as $data)
					{{ $data }}
				@endforeach
			</li>
		</ul>
	</div>
</div>
<!-- //short-->
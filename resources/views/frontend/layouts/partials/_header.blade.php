<div class="header">
	<div class="content white">
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="{{ url('/') }}">
						<h1>
							<span class="fa fa-leanpub" aria-hidden="true"></span>{{ config('app.name') }}
							<label>Education & Courses</label>
						</h1>
					</a>
				</div>
				<!--/.navbar-header-->
				@include('frontend.layouts.partials._nav')
				<!--/.navbar-collapse-->
				<!--/.navbar-->
			</div>
		</nav>
	</div>
</div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	<nav class="link-effect-2" id="link-effect-2">
		<ul class="nav navbar-nav">
			<li class="{{ Request::segment(1) == '' ?  'active':'' }}">
				<a href="{{ url('/' )}}" class="effect-3">Home</a>
			</li>
			<li class="{{ Request::segment(1) == 'about-us' ?  'active':'' }}">
				<a href="{{ url('about-us') }}" class="effect-3">About Us</a>
			</li>
			<li class="{{ Request::segment(1) == 'contact-us' ?  'active':'' }}">
				<a href="{{ url('contact-us') }}" class="effect-3">Contact Us</a>
			</li>
			<li class="{{ Request::segment(1) == 'sign-in' ?  'active':'' }}">
				<a href="{{ url('sign-in') }}" class="effect-3">Sign in</a>
			</li>
			<li class="{{ Request::segment(1) == 'sign-up' ?  'active':'' }}">
				<a href="{{url('sign-up')}}" class="effect-3">Sign UP</a>
			</li>
		</ul>
	</nav>
</div>
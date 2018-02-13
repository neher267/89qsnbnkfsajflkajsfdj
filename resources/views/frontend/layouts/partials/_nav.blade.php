
<style>
	.navbar-nav{
		width: 75%;
	}
</style>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	<nav class="link-effect-1" id="link-effect-1">
		<ul class="nav navbar-nav">
			<li>
				<a href="{{ url('/dashboard' )}}" class="effect-3">Dashboard</a>
			</li>

			<li class="{{ Request::segment(1) == '' ?  'active':'' }}">
				<a href="{{ url('/' )}}" class="effect-3">Home</a>
			</li>
			<li class="{{ Request::segment(1) == 'about-us' ?  'active':'' }}">
				<a href="{{ url('about-us') }}" class="effect-3">About Us</a>
			</li>
			<li class="{{ Request::segment(1) == 'contact-us' ?  'active':'' }}">
				<a href="{{ url('contact-us') }}" class="effect-3">Contact Us</a>
			</li>
			
			@if($user = Sentinel::check())	
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="width: 
				150px">Play Game
					<span class="caret"></span>
				</a>
				<ul class="dropdown-menu" role="menu">	
				<?php
				$class_id = $user->class_id;
				?>			
					<li>
						@foreach(config('settings.subjects') as $subject)
							<a href="{{url("play-game/$subject")}}">{{$subject}}</a>
						@endforeach
					</li>			
				</ul>
			</li>		
			<!-- <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="width: 
				150px">Question
					<span class="caret"></span>
				</a>
				<ul class="dropdown-menu" role="menu">	
				<?php
				$class_id = $user->class_id;
				?>			
					<li>
						@foreach(config('settings.subjects') as $subject)
							@for($year = 2017; $year < (int) date('Y'); $year++)
							<a href="{{url("question/$subject/$year/$class_id")}}">{{$year. ' '.$subject}}</a>
							@endfor
						@endforeach
					</li>			
				</ul>
			</li> -->
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="width: 
				150px">{{ request()->user()->name }}
					<span class="caret"></span>
				</a>
				<ul class="dropdown-menu" role="menu">
					<li>
						<a href="{{route('profile.index')}}" class="active">Profile</a>
					</li>
					<li>
						<a href="#" 
							onclick="event.preventDefault(); 
						    document.getElementById('logout-form').submit();">
						    Logout
						</a>

						<form id="logout-form" action="{{ url('logout' )}}" method="POST" style="display: none;">
						    {{ csrf_field() }}
						</form>
					</li>
				</ul>
			</li>
				
			@else
				<li class="{{ Request::segment(1) == 'register' ?  'active':'' }}">
					<a href="{{route('register.create')}}" class="effect-3">Sign UP</a>
				</li>
				<li class="{{ Request::segment(1) == 'sign-in' ?  'active':'' }}">
					<a href="{{ url('sign-in') }}" class="effect-3">Sign in</a>
				</li>
			@endif 
		</ul>
	</nav>
</div>
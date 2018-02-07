@extends('layouts.master')

@section('banner')
	@include('layouts.partials._banner')
@endsection
@section('main-content')
<div class="about-sec" id="about">
	<div class="container">
		<div class="title-div">
			<h3 class="tittle">
				<span>A</span>bout
				<span>U</span>s
			</h3>
			<div class="tittle-style">

			</div>
		</div>
		<div class="about-sub">
			<div class="col-md-6 about_bottom_left">
				<h4>Welcome to
					<span>Best Study</span>
				</h4>
				<p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. Cras a ornare elit, Nulla viverra pharetra sem eget.</p>
				<p>Pellentesque convallis diam consequat magna vulputate malesuada. Cras a ornare elit. Nulla viverra pharetra sem, eget
					pulvinar neque pharetra ac.Lorem Ipsum convallis diam consequat magna vulputate malesuada. Cras a ornare elit. Nulla
					viverra pharetra sem.</p>
				<a class="button-style" href="join.html">Join Now</a>
			</div>
			<!-- Stats-->
			<div class="col-md-6 about2-info">
				<img src="images/graduate.png" alt="" />
			</div>
			<!-- //Stats -->
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //about -->
<!-- Achievements -->
<div class="aitsresumethree">
	<div class="container">
		<div class="title-div">
			<h3 class="tittle">
				<span>O</span>ur
				<span>A</span>chievements
			</h3>
			<div class="tittle-style">

			</div>
		</div>
		<div class="load_more">
			<ul id="myList">
				<li class="aitsaitsresumewthreeli-1">
					<div class="l_g">
						<div class="l_g_r g_r">
							<div class="work">
								<div class="work-info">
									<div class="col-xs-6 work-grid work-left">
										<h4>2000-2017</h4>
									</div>
									<div class="col-xs-6 work-grid work-right">
										<h5>Ranked Top 1st</h5>
										<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
											eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo </p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="work-info">
									<div class="col-xs-6 work-grid work-right work-right2">
										<h4>2011 - 2012</h4>
									</div>
									<div class="col-xs-6 work-grid work-left work-left2">
										<h5>Queen's Anniversary Prize</h5>
										<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
											eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo </p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="work-info">
									<div class="col-xs-6 work-grid work-left">
										<h4>2004 - 2017</h4>
									</div>
									<div class="col-xs-6 work-grid work-right">
										<h5 class="comp">Excellent University Guide</h5>
										<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
											eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo </p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- //Achievements -->
<!-- about-team -->
<div class="team">
	<div class="container">
		<div class="title-div">
			<h3 class="tittle">
				<span>O</span>ur
				<span>F</span>aculties
			</h3>
			<div class="tittle-style">

			</div>
		</div>
		<div class="team-row-agileinfo">
			<div class="col-md-3 col-sm-6 col-xs-6 team-grids">
				<div class="thumbnail team-agileits">
					<img src="images/t1.jpg" class="img-responsive" alt="" />
					<div class="effectd-caption">
						<h4>Vaura Tegsner</h4>
						<p>Principal</p>
						<div class="social-lsicon">
							<a href="#" class="social-button twitter">
								<span class="fa fa-twitter"></span>
							</a>
							<a href="#" class="social-button facebook">
								<span class="fa fa-facebook"></span>
							</a>
							<a href="#" class="social-button google">
								<span class="fa fa-google-plus"></span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6 team-grids">
				<div class="thumbnail team-agileits">
					<img src="images/t2.jpg" class="img-responsive" alt="" />
					<div class="effectd-caption">
						<h4>Jark Kohnson</h4>
						<p>Senior Teacher</p>
						<div class="social-lsicon">
							<a href="#" class="social-button twitter">
								<span class="fa fa-twitter"></span>
							</a>
							<a href="#" class="social-button facebook">
								<span class="fa fa-facebook"></span>
							</a>
							<a href="#" class="social-button google">
								<span class="fa fa-google-plus"></span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6 team-grids">
				<div class="thumbnail team-agileits">
					<img src="images/t3.jpg" class="img-responsive" alt="" />
					<div class="effectd-caption">
						<h4>Chunk Erson</h4>
						<p>Vice Principal</p>
						<div class="social-lsicon">
							<a href="#" class="social-button twitter">
								<span class="fa fa-twitter"></span>
							</a>
							<a href="#" class="social-button facebook">
								<span class="fa fa-facebook"></span>
							</a>
							<a href="#" class="social-button google">
								<span class="fa fa-google-plus"></span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6 team-grids">
				<div class="thumbnail team-agileits">
					<img src="images/t4.jpg" class="img-responsive" alt="" />
					<div class="effectd-caption">
						<h4>Goes Mehak</h4>
						<p>Teacher Science</p>
						<div class="social-lsicon">
							<a href="#" class="social-button twitter">
								<span class="fa fa-twitter"></span>
							</a>
							<a href="#" class="social-button facebook">
								<span class="fa fa-facebook"></span>
							</a>
							<a href="#" class="social-button google">
								<span class="fa fa-google-plus"></span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //about-team -->
@endsection
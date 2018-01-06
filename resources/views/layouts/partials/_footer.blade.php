<div class="mkl_footer" style="margin-top: 50px;">
	<div class="sub-footer">
		<div class="container">
			<div class="mkls_footer_grid">
				<div class="col-xs-4 mkls_footer_grid_left">
					<h4>Location:</h4>
					<p>{{ config('contact.address') }}</p>
				</div>
				<div class="col-xs-4 mkls_footer_grid_left">
					<h4>Mail Us:</h4>
					<p>
						<span>Phone : </span>{{ config('contact.phone') }}</p>
					<p>
						<span>Email : </span>
						<a href="mailto:info@example.com">{{ config('contact.email') }}</a>
					</p>
				</div>
				<div class="col-xs-4 mkls_footer_grid_left">
					<h4>Opening Hours:</h4>
					<p>Working days : 8am-10pm</p>
					<p>Friday
						<span>(closed)</span>
					</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="botttom-nav-allah">
				<ul>
					<li>
						<a href="{{ url('/' )}}" class="effect-3">Home</a>
					</li>
					<li>
						<a href="{{ url('about-us') }}" class="effect-3">About Us</a>
					</li>
					<li>
						<a href="{{ url('contact-us') }}" class="effect-3">Contact Us</a>
					</li>
				</ul>
			</div>
			<!-- footer-button-info -->
			<div class="footer-middle-thanks">
				<h2>Thanks For watching</h2>
			</div>
			<!-- footer-button-info -->
		</div>
	</div>
	<div class="footer-copy-right">
		<div class="container">
			<div class="allah-copy">
				<p>© 2018 {{ config('app.name') }}. All rights reserved</p>
			</div>
			<div class="footercopy-social">
				<ul>
					<li>
						<a href="#">
							<span class="fa fa-facebook"></span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="fa fa-twitter"></span>
						</a>
					</li>					
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
@extends('frontend.layouts.master')

@section('banner')
	@include('frontend.layouts.partials._banner')
@endsection

@section('main-content')
<!-- contact -->
<div class="contact">
	<div class="container">
		<div class="title-div">
			<h3 class="tittle">
				<span>C</span>ontact
				<span>U</span>s
			</h3>
			<div class="tittle-style">

			</div>
		</div>
		<div class="contact-row">
			<div class="col-md-6 contact-text1">
				<h4>Contact Our
					<span>{{ config('app.name') }}</span>
				</h4>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore sequi at repudiandae aliquid autem, atque obcaecati, dolor modi, rerum fugit alias. Suscipit ullam aliquam labore, quam, doloribus molestiae eum eligendi.
				</p>

			</div>
			<div class="col-md-6 contact-w3lsright">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3746984.465708819!2d88.10026026270491!3d23.490583053663357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30adaaed80e18ba7%3A0xf2d28e0c4e1fc6b!2z4Kas4Ka-4KaC4Kay4Ka-4Kam4KeH4Ka2!5e0!3m2!1sbn!2sbd!4v1515061799514" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<div class="contact-lsleft">
	<div class="container">
		<div class="address-grid">
			<h4>Contact Details</h4>
			<ul class="w3_address">
				<li>
					<span class="fa fa-globe" aria-hidden="true"></span>{{ config('contact.address') }}
				</li>
				<li>
					<span class="fa fa-envelope-o" aria-hidden="true"></span>
					<a href="mailto:info@example.com">{{ config('contact.email' )}}</a>
				</li>
				<li>
					<span class="fa fa-phone" aria-hidden="true"></span>{{ config('contact.phone' )}}
				</li>
			</ul>
		</div>
		<div class="contact-grid agileits">
			<h4>Get In Touch</h4>
			<form action="#" method="post">
				<div class="">
					<input type="text" name="Name" placeholder="Name" required="">
				</div>
				<div class="">
					<input type="email" name="Email" placeholder="Email" required="">
				</div>
				<div class="">
					<input type="text" name="Phone Number" placeholder="Phone Number" required="">
				</div>
				<div class="">
					<textarea name="Message" placeholder="Message..." required=""></textarea>
				</div>
				<input type="submit" value="Submit">
			</form>
		</div>
	</div>
</div>
<!-- //contact -->
@endsection



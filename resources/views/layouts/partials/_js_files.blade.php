<!-- js -->
<script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
<!-- bootstrap -->
<script src="{{ asset('js/bootstrap.js') }}"></script>
<!-- stats numscroller-js-file -->
<script src="{{ asset('js/numscroller-1.0.js') }}"></script>
<!-- //stats numscroller-js-file -->

<!-- Flexslider-js for-testimonials -->
<script>
	$(window).load(function () {
		$("#flexiselDemo1").flexisel({
			visibleItems: 1,
			animationSpeed: 1000,
			autoPlay: false,
			autoPlaySpeed: 3000,
			pauseOnHover: true,
			enableResponsiveBreakpoints: true,
			responsiveBreakpoints: {
				portrait: {
					changePoint: 480,
					visibleItems: 1
				},
				landscape: {
					changePoint: 640,
					visibleItems: 1
				},
				tablet: {
					changePoint: 768,
					visibleItems: 1
				}
			}
		});

	});
</script>
<script src="{{ asset('js/jquery.flexisel.js') }}"></script>
<!-- //Flexslider-js for-testimonials -->
<!-- smooth scrolling -->
<script src="{{ asset('js/SmoothScroll.min.js') }}"></script>
<script src="{{ asset('js/move-top.js') }}"></script>
<script src="{{ asset('js/easing.js') }}"></script>
<!-- here stars scrolling icon -->
<script>
	$(document).ready(function () {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/

		$().UItoTop({
			easingType: 'easeOutQuart'
		});

	});
</script>
<!-- //here ends scrolling icon -->
<!-- smooth scrolling -->
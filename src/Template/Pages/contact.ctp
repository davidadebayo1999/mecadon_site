<div class="contact-info-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="single-info mb-50">
							<div class="media">
								<div class="media">
									<a href="#"><i class="fa fa-map-marker"></i></a>
								</div>
								<div class="media-body">
									<h4>OUR OFFICE</h4>
									<span>3481 Rabana Place</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="single-info mb-50">
							<div class="media">
								<div class="media">
									<a href="#"><i class="fa fa-phone"></i></a>
								</div>
								<div class="media-body">
									<h4>OUR CONTACT</h4>
									<span>+ (0012) 123 456 789</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="single-info mb-50">
							<div class="media">
								<div class="media">
									<a href="#"><i class="fa fa-envelope"></i></a>
								</div>
								<div class="media-body">
									<h4>OUR CONTACT</h4>
									<span>supporte@yourdomin.com</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="contact-form">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<h3>Send US Message</h3>
							<form action="#">
								<div class="form-group">
									<input type="email" placeholder="Your Email" required>
								</div>
								<div class="form-group">
									<input type="text" placeholder="Your Full Name" required>
								</div>
								<div class="form-group">
									<input type="text" placeholder="Subject" required>
								</div>
								<input type="submit" value="Send Message">
							</form>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<textarea placeholder="Text Here Your Message.."></textarea>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--Contact Info End Start-->
		<!--Google Map Start Here-->
		<div class="gmap">
			<div id="googleMap"></div>
		</div>
		<!--Google Map End Here-->
	   <!-- newslatter-area-start -->
		<div class="newslatter-area ptb-90">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="newslatter-form text-center">
							<form action="#">
								<input type="text" placeholder="Your email address here...  "/>
								<a href="#">Subcribe!</a>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	   <!-- newslatter-area-end -->


       	<!-- googleapis -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbeBYsZSDkbIyfUkoIw1Rt38eRQOQQU0o"></script>
		<script>
			/* Google Map js */
			function initialize() {
			  var mapOptions = {
				zoom: 15,
				scrollwheel: false,
				center: new google.maps.LatLng(23.810332, 90.412518)
			  };

			  var map = new google.maps.Map(document.getElementById('googleMap'),
				  mapOptions);

			  var marker = new google.maps.Marker({
				position: map.getCenter(),
				animation:google.maps.Animation.BOUNCE,
				icon: 'img/map.png',
				map: map
			  });

			}
			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
<div class="container margin-top-fifty margin-bottom-fifty">
  <div class="row footer">
    <div class="col">
      <!-- Global Site Tag (gtag.js) - Google Analytics -->
		<script src="https://apis.google.com/js/platform.js" async defer></script>
		<div class="g-partnersbadge" data-agency-id="7043437600"></div>
    </div>
    <div class="col">
      <img src="img/best-in-search.jpg" class="img-responsive">
    </div>
    <div class="col">
      <img src="img/top-agency.jpg" class="img-responsive">
    </div>
    <div class="col">
      <img src="img/bing-ads.jpg" class="img-responsive">
    </div>
  </div>
</div>
<div id="map"></div>
<div class="footer">
  <div class="container">
   	<div class="row">
		<div class="col-12">
			<div class="row footer-contact-info">
			  <div class="col-8">
				<h6> Contact Us </h6>
				<div class="row">
					<div class="col">	
						<span>Address</span>
						<p>21275 GUMINA RD STE 200, BROOKFIELD, WI 53072</p>
					</div>
					<div class="col">	
						
						<span>Phone no.</span>
						<p>800-273-2176 | 262-373-8252</p>
					</div>
				</div>
				
			  </div>
			  <div class="col-4">
				<h6> Follow Us </h6>
				<div class="row social-icons">
					<div class="col">	
						<a href="https://www.facebook.com/HeavisideGroup" target="_blank" class="facebook"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
					</div>
					<div class="col">
						<a href="https://twitter.com/HeavisideGroup" target="_blank" class="twitter"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
					</div>
					<div class="col">
						<a href="https://plus.google.com/+HeavisidegroupWI" target="_blank" class="linkedin"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
					</div>
					<div class="col">
						<a href="https://www.linkedin.com/company/heaviside-group" target="_blank" class="gplus"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>	
  </div>
</div>

<div class="subfooter">
	<div class="container-fluid h-100">
	   <div class="container h-100">
		  <div class="row h-100 justify-content-center align-items-center subfooter-content">
			<div class="col-5">
				<h6>COPYRIGHT 2017 HEAVISIDE GROUP</h6>
			</div>
			<div class="col-6 offset-1 footer-menu text-right">
				<ul class="list-inline">
					<li class="list-inline-item">
						<a href="">Milwaukee&nbsp;Web&nbsp;Design</a>
					</li>
					<li class="list-inline-item">
						<a href="">Milwaukee SEO</a>
					</li>
					<li class="list-inline-item">
						<a href="">Privacy Policy</a>
					</li>
					<li class="list-inline-item">
						<a href="">Sitemap</a>
					</li>
				</ul>
				
			</div>
			
		  </div>
		</div>
	</div>
</div>
<a href="#" id="back-to-top" title="Back to top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>

<!-- Scripts -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.1.0.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="js/custom.js" type="text/javascript"></script>
<script>
  function initMap() {
    var uluru = {lat: 43.0850707, lng: -88.1769901};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 14,
      center: uluru
    });
    var marker = new google.maps.Marker({
      position: uluru,
      map: map
    });
  }
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?language=en-US&key=AIzaSyCH1psTOmiDbdznArM5gd83laziP9e69Xc&callback=initMap">
    </script>
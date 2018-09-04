<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

</div><!-- .wrap -->

		<footer class="site-footer" >
			<div class="row">
				<div class="col-md-12">
					<!-- <iframe
					  width="450"
					  height="250"
					  frameborder="0" style="border:0"
					  src="https://www.google.com/maps/embed/v1/search?key=AIzaSyDzJJzYGG63xr0YfUHpr2kEQK5k82cE-a8&q=smiling-moose-rocky-mountain-deli" allowfullscreen>
					</iframe> -->
					<div id="map" style="height: 300px;"></div>
				</div>
			</div>

			<div class="row">
	      <div class="col-md-1 col-md-offset-1">
	        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-blue.svg" width="96px">
	      </div>

	      <div class="col-md-2">
	        <p class="brand-copyright">
	          © 2018 RightWay Brands, Inc
	          DBA Smiling Moose Rocky Mountain Deli
	          1800 Glenarm Place, Suite 101
	          Denver, CO 80202
	          info@smilingmoosedeli.com
	        </p>
	      </div>
	      <div class="col-md-3" id="FooterOne">
	        <?php
								wp_nav_menu(array(
									'theme_location' => 'FooterOne',
									'container' => false,
									'menu_class' => 'nav navbar-nav '
									)
								);
							?>
	      </div>
	      <div class="col-md-3" id="FooterTwo">
	        <?php
								wp_nav_menu(array(
									'theme_location' => 'FooterTwo',
									'container' => false,
									'menu_class' => 'nav navbar-nav '
									)
								);
							?>
	      </div>
	      <div class="col-md-2" id="FooterThree">
					<div class="socials-blue socials">
				    <a href="">
							<svg width="36" height="36" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg">
								<rect width="36" height="36" fill="black" fill-opacity="0"/>
								<path d="M18 3C26.271 3 33 9.729 33 18C33 26.271 26.271 33 18 33C9.729 33 3 26.271 3 18C3 9.729 9.729 3 18 3ZM18 0C8.0595 0 0 8.0595 0 18C0 27.9405 8.0595 36 18 36C27.9405 36 36 27.9405 36 18C36 8.0595 27.9405 0 18 0ZM15 15H12V18H15V27H19.5V18H22.23L22.5 15H19.5V13.7505C19.5 13.0335 19.644 12.75 20.337 12.75H22.5V9H18.894C16.197 9 15 10.188 15 12.462V15Z"/>
							</svg>
						</a>
				    <a href="">
							<svg width="36" height="36" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg">
								<rect width="36" height="36" fill="black" fill-opacity="0"/>
								<path d="M18 3C26.271 3 33 9.729 33 18C33 26.271 26.271 33 18 33C9.729 33 3 26.271 3 18C3 9.729 9.729 3 18 3ZM18 0C8.0595 0 0 8.0595 0 18C0 27.9405 8.0595 36 18 36C27.9405 36 36 27.9405 36 18C36 8.0595 27.9405 0 18 0ZM18 10.623C20.403 10.623 20.688 10.632 21.6375 10.6755C24.078 10.7865 25.215 11.943 25.3275 14.364C25.3695 15.3135 25.3785 15.597 25.3785 18C25.3785 20.403 25.3695 20.688 25.3275 21.636C25.215 24.0555 24.0795 25.215 21.6375 25.326C20.688 25.368 20.4045 25.3785 18 25.3785C15.597 25.3785 15.312 25.3695 14.364 25.326C11.919 25.2135 10.7865 24.0525 10.674 21.636C10.632 20.688 10.6215 20.403 10.6215 18C10.6215 15.597 10.632 15.312 10.674 14.364C10.785 11.9415 11.922 10.785 14.364 10.674C15.312 10.6305 15.597 10.623 18 10.623ZM18 9C15.555 9 15.2505 9.0105 14.289 9.0555C11.019 9.2055 9.204 11.019 9.054 14.289C9.0105 15.2505 9 15.5565 9 18C9 20.445 9.0105 20.751 9.054 21.711C9.204 24.9795 11.019 26.796 14.289 26.946C15.2505 26.9895 15.555 27 18 27C20.445 27 20.751 26.9895 21.7125 26.946C24.9765 26.796 26.799 24.9825 26.946 21.711C26.9895 20.751 27 20.445 27 18C27 15.5565 26.9895 15.2505 26.946 14.289C26.799 11.0235 24.9825 9.204 21.7125 9.0555C20.751 9.0105 20.445 9 18 9ZM18 13.3785C15.4485 13.3785 13.3785 15.447 13.3785 18C13.3785 20.553 15.4485 22.6215 18 22.6215C20.5515 22.6215 22.6215 20.553 22.6215 18C22.6215 15.4485 20.5515 13.3785 18 13.3785ZM18 21C16.3425 21 15 19.6575 15 18C15 16.344 16.3425 15 18 15C19.656 15 21.0015 16.3425 21.0015 18C21.0015 19.6575 19.656 21 18 21ZM22.803 12.117C22.2075 12.117 21.723 12.6 21.723 13.197C21.723 13.7925 22.206 14.277 22.803 14.277C23.4 14.277 23.8845 13.794 23.8845 13.197C23.8845 12.6 23.4015 12.117 22.803 12.117Z"/>
							</svg>
						</a>
				    <a href="">
							<svg width="36" height="36" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg">
								<rect width="36" height="36" fill="black" fill-opacity="0"/>
								<path d="M18 3C26.271 3 33 9.729 33 18C33 26.271 26.271 33 18 33C9.729 33 3 26.271 3 18C3 9.729 9.729 3 18 3ZM18 0C8.0595 0 0 8.0595 0 18C0 27.9405 8.0595 36 18 36C27.9405 36 36 27.9405 36 18C36 8.0595 27.9405 0 18 0ZM27.75 13.167C27.0885 13.461 26.376 13.659 25.629 13.749C26.3925 13.2915 26.976 12.5685 27.2535 11.706C26.5395 12.129 25.749 12.4365 24.9075 12.6015C24.2355 11.883 23.274 11.4345 22.2135 11.4345C19.8285 11.4345 18.0765 13.659 18.615 15.969C15.5475 15.8145 12.825 14.3445 11.004 12.111C10.0365 13.77 10.503 15.942 12.147 17.0415C11.5425 17.022 10.974 16.8555 10.476 16.5795C10.4355 18.2895 11.6625 19.89 13.4385 20.247C12.9195 20.388 12.3495 20.421 11.7705 20.31C12.24 21.777 13.6065 22.8435 15.2205 22.8735C13.665 24.0915 11.7105 24.636 9.75 24.405C11.385 25.4535 13.3245 26.064 15.4095 26.064C22.2675 26.064 26.1405 20.2725 25.9065 15.078C26.6295 14.559 27.255 13.908 27.75 13.167Z"/>
							</svg>
						</a>
				  </div>
	      </div>
			</div>
		</footer><!-- .site-footer -->


<?php wp_footer(); ?>
<script>

	function initMap() {

		var map = new google.maps.Map(document.getElementById('map'), {
			zoom: 4,
			center: {lat: 39.792860, lng: -105.081480},
			styles: [
            {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
            {
              featureType: 'administrative.locality',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'poi',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'geometry',
              stylers: [{color: '#263c3f'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'labels.text.fill',
              stylers: [{color: '#6b9a76'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry',
              stylers: [{color: '#38414e'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry.stroke',
              stylers: [{color: '#212a37'}]
            },
            {
              featureType: 'road',
              elementType: 'labels.text.fill',
              stylers: [{color: '#9ca5b3'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry',
              stylers: [{color: '#746855'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry.stroke',
              stylers: [{color: '#1f2835'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'labels.text.fill',
              stylers: [{color: '#f3d19c'}]
            },
            {
              featureType: 'transit',
              elementType: 'geometry',
              stylers: [{color: '#2f3948'}]
            },
            {
              featureType: 'transit.station',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'water',
              elementType: 'geometry',
              stylers: [{color: '#17263c'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.fill',
              stylers: [{color: '#515c6d'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.stroke',
              stylers: [{color: '#17263c'}]
            }
          ]
		});

		// Create an array of alphabetical characters used to label the markers.
		var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

		// Add some markers to the map.
		// Note: The code uses the JavaScript Array.prototype.map() method to
		// create an array of markers based on a given "locations" array.
		// The map() method here has nothing to do with the Google Maps API.
		var markers = locations.map(function(location, i) {
			var infowindow = new google.maps.InfoWindow({
          content: "contentString"
        });
			var marker =  new google.maps.Marker({
				position: location
			});
			marker.addListener('click', function() {
          infowindow.open(map, marker);
      });
			return marker;
		});

		// Add a marker clusterer to manage the markers.
		var markerCluster = new MarkerClusterer(map, markers,
				{imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
	}
	var locations = [
		{lat: 39.792860, lng: -105.081480},
	  {lat: 39.752340, lng: -105.000340},
		{lat: 39.678070, lng: -104.940870},
		{lat: 39.702730, lng: -105.329120},
		{lat: 32.014550, lng: -102.157760},
		{lat: 45.677000, lng: -111.186670},
		{lat: 48.167720, lng: -103.620490},
		{lat: 47.790810, lng: -103.283200},
		{lat: 44.270180, lng: -105.492940},
	]
</script>
		<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
	 </script>
	 <script async defer
	 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzJJzYGG63xr0YfUHpr2kEQK5k82cE-a8&callback=initMap">
	 </script>
</body>
</html>

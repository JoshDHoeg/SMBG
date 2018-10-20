<div class="row" id="map-wrapper">
  <div class="top-mtn" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/mountains-grey.svg');position:  absolute;z-index:  5;right: 0;left: 0;top: 0;height: 128px;"></div>
  <div class="btn-mtn" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/mountains-white.svg');position:  absolute;z-index:  5;right: 0;left: 0;bottom: 0;height: 128px;"></div>
  <div class="overlay" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/topography.svg')"></div>
  <div class="col-md-12" >
    <div class="form-group location-form">
      <h3 class="header-light">FIND A SMILING MOOSE NEAR YOU</h3>
      <input type="text" class="form-control text-input" id="location-form" placeholder="Enter your City, State, or Zipcode">
      <button type="submit" class="btn btn-primary submit-input">
        <span class="arrow arrow-1"></span>
        <span class="arrow arrow-2"></span>
      </button>
    </div>
    <div id="map" style="height: 650px;"></div>
  </div>

</div>

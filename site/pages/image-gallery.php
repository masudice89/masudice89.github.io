<?php include('../dshe-header.php'); ?>

  <!-- LIGHTBOX -->
  <link rel="stylesheet" type="text/css" href="../../assets/css/light-box/lc_lightbox.min.css">
  <link rel="stylesheet" href="../../assets/css/light-box/minimal.css" />

  <script src="../../assets/js/light-box/jquery.js" type="text/javascript"></script>
  <script type="text/javascript" src="../../assets/js/light-box/alloy_finger.min.js"></script>
  <script type="text/javascript" src="../../assets/js/light-box/lc_lightbox.lite.min.js"></script>
  <!-- LIGHTBOX FADING SHOW/HIDE EFFECT (as explained in documentation) -->
  <style type="text/css">
    .lcl_fade_oc.lcl_pre_show #lcl_overlay,
    .lcl_fade_oc.lcl_pre_show #lcl_window,
    .lcl_fade_oc.lcl_is_closing #lcl_overlay,
    .lcl_fade_oc.lcl_is_closing #lcl_window {
      opacity: 0 !important;
    }
    .lcl_fade_oc.lcl_is_closing #lcl_overlay {
      -webkit-transition-delay: .15s !important; 
      transition-delay: .15s !important;
    }
    .tab-content .active{
      background-color: white;
    }
  </style>
  <!-- LIGHTBOX -->

        <!-- Slider Start -->
        <?php include('../dshe-slider.php'); ?>
        <!-- Slider End -->

        <!-- Menu Start -->
         <?php include('../dshe-megamenu.php'); ?>
        <!-- Menu End -->

        <div class="row mt-3" style="background: #cde7a8;">
          <div class="col-12 clearfix">
            <div class="left-content">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <h1 class="text-center text-lg-left">Thumbnail Gallery</h1>
                  <div class="row text-center text-lg-left">
                    <div class="col-lg-3 col-md-4 col-xs-6">
                      <a href="../../assets/img/slide-1.jpg" class="d-block mb-4 h-200 myelem" title="image 1" data-lcl-txt="lorem ipsum dolor sit amet" data-lcl-author="someone">
                        <img class="img-fluid img-thumbnail" src="../../assets/img/slide-1.jpg"></img>
                      </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                      <a href="../../assets/img/slide-1.jpg" class="d-block mb-4 h-200 myelem" title="image 1" data-lcl-txt="lorem ipsum dolor sit amet" data-lcl-author="someone">
                        <img class="img-fluid img-thumbnail" src="../../assets/img/slide-1.jpg"></img>
                      </a>
                    </div>
                    
                    <div class="col-lg-3 col-md-4 col-xs-6">
                      <a href="../../assets/img/slide-1.jpg" class="d-block mb-4 h-200 myelem" title="image 1" data-lcl-txt="lorem ipsum dolor sit amet" data-lcl-author="someone">
                        <img class="img-fluid img-thumbnail" src="../../assets/img/slide-1.jpg"></img>
                      </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                      <a href="../../assets/img/slide-1.jpg" class="d-block mb-4 h-200 myelem" title="image 1" data-lcl-txt="lorem ipsum dolor sit amet" data-lcl-author="someone">
                        <img class="img-fluid img-thumbnail" src="../../assets/img/slide-1.jpg"></img>
                      </a>
                    </div>
                          
                  </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
              </div>
            </div>
            <!-- right-content -->
            <?php include('../dshe-right-content.php'); ?>
            <!-- right-content -->
          </div>
        </div>             
        <link rel="stylesheet" type="text/css" href="../../assets/css/myStyle.css">
        <!-- LIGHTBOX INITIALIZATION -->
        <script type="text/javascript">
          $(document).ready(function(e) {             
            // live handler
            lc_lightbox('.myelem', {
              wrap_class: 'lcl_fade_oc',
              gallery : true, 
              thumb_attr: 'data-lcl-thumb',

              counter: 'true',
              fullscreen: 'true',
              download: 'true', 
              
              skin: 'minimal',
              radius: 0,
              padding : 0,
              border_w: 0,
            }); 

          });
        </script>
<?php include('../dshe-footer.php'); ?>


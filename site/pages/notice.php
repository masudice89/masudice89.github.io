<?php include('../includes/header.php'); ?>
<!-- Slider Start -->
        <?php include('../includes/slider.php'); ?>
        <!-- Slider End -->
        <!-- Menu Start -->
        <?php include('../includes/megamenu.php'); ?>
        <!-- Menu End -->

        <div class="row mt-3">
          <div class="col-12 clearfix">
            <div class="left-content">


              <div class="row mt-3">
                <div class="col-12">


                  <div id="print_btn_div" style="font-size: 20px;">
                    <img src="../../assets/images/print_btn.png" style="cursor: pointer;" onclick="print_content();" width="24" title="প্রিন্ট" alt="print_btn">
                  </div>
                  <div class="updateText" style="float: right; font-style: italic; font-size: 16px; color: rgb(102, 102, 102);">সর্ব-শেষ হাল-নাগাদ: ৪ ডিসেম্বর ২০১৯</div>
                  <hr id="print_div_hr">
                  <div id="printable_area" style="font-size: 20px;">
                    <u>নোটিশ</u>
                    <h3 style="font-size: 16px;"> (Subject of notice) 1111 </h3>
                    <a href="../../assets/pdf/1111.pdf" title=" 1111.pdf" style="font-size: 20px;">
                      <img src="../../assets/images/file-icons/16px/pdf.png" alt="pdf" class="file-icon"> 1111.pdf
                    </a>
                    <div style="font-size: 20px;">
                      <div class="viewer" style="background-color: rgb(255, 255, 255); width: 100%; font-size: 20px;">
                        <iframe width="100%" height="600" src="../../assets/pdf/1111.pdf"></iframe>
                      </div>
                    </div>
                  </div>

                  <script type="text/javascript">

                    function print_content() {
                      var html_content = $("#printable_area").html();

                      newwindow = window.open();
                      newdocument = newwindow.document;
                      newdocument.write(html_content);
                      newdocument.close();

                      newwindow.print();

                      return false;
                    }
                  </script>

                  <!-- Social icons -->
                  <div class="row">
                    <div class="col-12">
                      <div id="share-buttons" style="clear: both; font-size: 20px;">
                        <p style="font-size: 20px;">
                          <b>Share with :</b>
                        </p>
                        <!-- To embed it with Facebook & Twitter search in google for this site page --> 
                        <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2FsBAdmin%2Fdshe-notice.php&amp;src=sdkpreparse" target="_blank" title="" style="font-size: 20px;">
                          <img src="../../assets/images/facebook.png " alt="facebook">
                        </a>
                        <a href="https://twitter.com/intent/tweet?url=http%3A%2F%2Flocalhost%2FsBAdmin%2Fdshe-notice.php&amp;src=sdkpreparse" target="_blank" title="" style="font-size: 20px;">
                          <img src="../../assets/images/twitter.png" alt="twitter">
                        </a>
                    </div>
                    </div>
                  </div>
                  <!-- Social icons -->


                </div>
              </div>


              </div>
            <!-- right-content -->
            <?php include('../includes/right-content.php'); ?>
            <!-- right-content -->
          </div>
        </div>             
        <link rel="stylesheet" type="text/css" href="../../assets/css/myStyle.css">
<?php include('../includes/footer.php'); ?>
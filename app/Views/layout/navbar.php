<!DOCTYPE html>
<html lang="en">
  <head>
    <title>QURANPEDIA</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="og:site_name" content="" />
    <meta name="og:title" content="" />
    <meta name="og:image" content="<?php echo base_url();?>/assets/images/banner.png" />
    <meta name="og:url" content="#" />
    <meta name="og:type" content="website" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link href="<?php echo base_url();?>/assets/images/apple-touch-icon.png" rel="apple-touch-icon" />
    <link href="<?php echo base_url();?>/images/splashscreens/iphone5_splash.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="<?php echo base_url();?>/images/splashscreens/iphone6_splash.png" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="<?php echo base_url();?>/images/splashscreens/iphoneplus_splash.png" media="(device-width: 621px) and (device-height: 1104px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
    <link href="<?php echo base_url();?>/images/splashscreens/iphonex_splash.png" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
    <link href="<?php echo base_url();?>/images/splashscreens/iphonexr_splash.png" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="<?php echo base_url();?>/images/splashscreens/iphonexsmax_splash.png" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
    <link href="<?php echo base_url();?>/images/splashscreens/ipad_splash.png" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="<?php echo base_url();?>/images/splashscreens/ipadpro1_splash.png" media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="<?php echo base_url();?>/images/splashscreens/ipadpro3_splash.png" media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="<?php echo base_url();?>/images/splashscreens/ipadpro2_splash.png" media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link rel="preload" as="font" href="<?php echo base_url();?>/assets/fonts/IndoPak.woff2" type="font/woff2" crossorigin />
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style.css" />
    <link rel="dns-prefetch" href="#" />
    <link rel="manifest" href="<?php echo base_url();?>/assets/manifest.json" />
    <link rel="icon" type="image/x-icon" href="<?php echo base_url();?>/assets/images/favicon.ico" />
  </head>
  <body>



    <div class="loader"></div>







    


    <div class="modal fade bd-modal-sl" id="SettingsModal" tabindex="-1" role="dialog" aria-labelledby="SettingsModalCenter" aria-hidden="true">
      <div class="modal-dialog modal-sl modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="SettingsModalCenter">Settings</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <style type="text/css">
              .nav-settings {
                display: inline;
              }
              .btn-nav {
                margin-bottom: 10px;
              }
            </style>
            <div class="container-fluid">
              <div class="row">
                <div class="col-6">
                  <div class="col nav-settings"><span class="n-s">Arabic </span><span class="ar-c-f"></span></div>
                  <div class="col nav-settings">
                    <button type="button" class="btn btn-nav btn-sm" onclick="font('wa', 'decrease')">Dec -</button><button type="button" class="btn btn-nav btn-sm" onclick="font('wa', 'increase')">Inc +</button>
                  </div>
                </div>
                <div class="col-6">
                  <div class="col nav-settings"><span class="n-s">Transliteration </span><span class="tl-c-f"></span></div>
                  <div class="col nav-settings">
                    <button type="button" class="btn btn-nav btn-sm" onclick="font('wl', 'decrease')">Dec -</button><button type="button" class="btn btn-nav btn-sm" onclick="font('wl', 'increase')">Inc +</button>
                  </div>
                </div>
                <div class="col-6">
                  <div class="col nav-settings"><span class="n-s">Translation </span><span class="tr-c-f"></span></div>
                  <div class="col nav-settings">
                    <button type="button" class="btn btn-nav btn-sm" onclick="font('wt', 'decrease')">Dec -</button><button type="button" class="btn btn-nav btn-sm" onclick="font('wt', 'increase')">Inc +</button>
                  </div>
                </div>
                <div class="col-6">
                  <div class="col nav-settings"><span class="n-s">Font Type (F)</span></div>
                  <div class="col nav-settings"><button type="button" class="btn btn-nav btn-sm" id="font" onclick="toggle_text('font_type')">IndoPak</button></div>
                </div>
                <div class="col-6">
                  <div class="col nav-settings"><span class="n-s">Theme (T)</span></div>
                  <div class="col nav-settings"><button type="button" class="btn btn-nav btn-sm" id="theme_mode" onclick="toggle_theme_mode()">Light</button></div>
                </div>
                <div class="col-6">
                  <div class="col nav-settings"><span class="n-s">Display Mode (M)</span></div>
                  <div class="col nav-settings"><button type="button" class="btn btn-nav btn-sm" id="display_mode" onclick="toggle_display_mode()">Word By Word</button></div>
                </div>
                <div class="col-6">
                  <div class="col nav-settings"><span class="n-s">Reciter</span></div>
                  <div class="col nav-settings"><button type="button" class="btn btn-nav btn-sm" id="reciter" onclick="toggle_reciter()">Mishary Rashid Alafasy</button></div>
                </div>
                <div class="col-6">
                  <div class="col nav-settings"><span class="n-s">Auto-Scroll</span></div>
                  <div class="col nav-settings"><button type="button" class="btn btn-nav btn-sm" id="auto_scroll" onclick="toggle_auto_scroll()">Yes</button></div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer"><button type="button" class="btn btn-secondary" id="reset-settings" onclick="ResetSettings()">Reset</button><button type="button" class="btn btn-secondary" data-dismiss="modal">Done</button></div>
        </div>
      </div>
    </div>
    <span id="modal-about-content"></span>
    <div class="container">
      

    
      <div class="row full-surah" style="padding: 50px 0px 50px 0px" id="myContainer"></div>



      <?= $this->renderSection('content');  ?>

      </div>
      <script>
  var container = document.getElementById("myContainer");
  container.addEventListener("mouseup", function() {
    var selectedText = window.getSelection().toString().trim();
    if (selectedText !== '' && isArabic(selectedText)) {
      window.location.href = "/page/detailv?selectedText=" + encodeURIComponent(selectedText);
    }
  });

  function isArabic(text) {
    var arabicPattern = /[\u0600-\u06FF]/;
    return arabicPattern.test(text);
  }
    </script>
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script async src="<?php echo base_url();?>assets/js/main.js"></script>
    <script async src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      if ('serviceWorker' in navigator) {
        window.addEventListener('load', function () {
          navigator.serviceWorker.register('<?php echo base_url();?>sw.js');
        });
      }
    </script>

</body>
</html>
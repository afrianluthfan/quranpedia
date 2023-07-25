<!DOCTYPE html>
<html lang="en">
<head>
<title>Quranpedia - Akar Kata</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="og:site_name" content="Word By Word English Translation And Transliteration" />
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

    <nav class="navbar navbar-expand-lg navbasurar-dark bg-gold fixed-top">
      <div class="container">
        <a class="navbar-brand" href="/">
          Quranpedia - Akar Kata </a
        ><button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

        </div>
      </div>
    </nav>
    <span id="modal-about-content"></span>
    <br>
    <!-- <h1>Detail View</h1> -->
    <div class="container">
    <!-- <div class="row full-surah" style="padding: 50px 0px 50px 0px"> -->
       
    
    <h2>Kata yang dipilih: <?php echo $selectedText; ?></h2>

<?php if ($matchedRootWord): ?>
    <h3>Akar Kata: <?php echo $matchedRootWord; ?></h3>
<?php else: ?>
    <p>No matched root word found.</p>
<?php endif; ?>

<?php if (!empty($matchedVerses)): ?>
    <h3>Ayat-ayat yang mengandung akar kata yang sama:</h3>
    <table>
        <thead>
            <tr>
                <th>Kitab</th>
                <th style="text-align: right;" >Text</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($matchedVerses as $verses): ?>
                <?php foreach ($verses as $verse): ?>
                    <tr>
                        <td><?php echo $verse['sura']; ?></td>
                        <td style="text-align: right;"><?php echo highlightText($verse['text'], $matchedWords); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No matched verses found.</p>
<?php endif; ?>

<?php
function highlightText($text, $matchedWords) {
    foreach ($matchedWords as $word) {
        $text = str_ireplace($word, '<span style="color: red;">' . $word . '</span>', $text);
    }
    return $text;
}
?>









        
      
      
      </div>
        </div>
    <!-- </div> -->
    <script async src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<title>QURANPEDIA</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="og:site_name" content="" />
<meta name="og:title" content="" />
<meta name="og:url" content="#" />
<meta name="og:type" content="website" />
<meta name="apple-mobile-web-app-status-bar-style" content="default" />
<meta name="apple-mobile-web-app-capable" content="yes" />

<!-- script tailwind -->
<script src="https://cdn.tailwindcss.com"></script>
<script>
  tailwind.config = {
    theme: {
      extend: {
        colors: {
          clifford: '#da373d',
        }
      }
    }
  }
</script>

<!-- styling animasi button -->
<style>
    .grid-cell-wrapper {
        transition: box-shadow 0.2s ease-in-out;
        border-radius: 8px; /* Rounded corners */
        overflow: hidden; /* Ensure the contents are clipped within the rounded corners */
        display: flex;
        align-items: center;
        justify-content: center;
        border: 0.05em solid grey;
    }

    .grid-cell-wrapper:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 255, 0.15);
    }

    .grid-cell {
        color: #0a2654; /* Set the text color to #0a2654 */
        font-size: 20px; /* Default font size */
    }

    /* Media queries for different screen sizes */
    @media screen and (max-width: 767px) {
        .grid-cell {
            font-size: 16px; /* Adjust font size for smaller screens */
        }
    }

    @media screen and (min-width: 768px) and (max-width: 1023px) {
        .grid-cell {
            font-size: 18px; /* Adjust font size for medium screens */
        }
    }
</style>

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
<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/stylex.css" />
<link rel="manifest" href="<?php echo base_url();?>/assets/manifest.json" />
<link rel="icon" type="image/x-icon" href="<?php echo base_url();?>/assets/images/favicon.ico" />

</head>

<body class="homepage px-[40px] h-screen flex items-center justify-center">
<nav class="navbar navbar-expand-lg navbar-dark bg-gold fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url()?>">
          QURANPEDIA
        </a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <!-- Add your navigation links here if needed -->
            </ul>
        </div>
    </div>
</nav>

<div class="container flex flex-col p-0 justify-center items-center flex-grow">
    <div class="grid w-[75%] h-40 grid-cols-3 grid-rows-2 gap-4 justify-items-center items-center">

        <!-- shahih bukhari -->
        <div class="relative w-full h-full cursor-pointer grid-cell-wrapper">
            <a href="<?= base_url('/page/shahih_bukhari_view'); ?>" class="absolute h-full w-full top-0 left-0">
            </a>
            <div class="flex items-center justify-center h-full w-full grid-cell">
                Shahih Bukhari
            </div>
        </div>
        

        <div class="relative w-full h-full cursor-pointer grid-cell-wrapper">
            <a href="<?= base_url('/page/shahih_muslim_view'); ?>" class="absolute h-full w-full top-0 left-0">
                <!-- This empty anchor will cover the whole cell -->
            </a>
            <div class="flex items-center justify-center h-full w-full grid-cell">
                Shahih Muslim
            </div>
        </div>

        <div class="relative w-full h-full cursor-pointer grid-cell-wrapper">
            <a href="<?= base_url('/page/sunan_tirmidzi_view'); ?>" class="absolute h-full w-full top-0 left-0">
                <!-- This empty anchor will cover the whole cell -->
            </a>
            <div class="flex items-center justify-center h-full w-full grid-cell">
                Sunan Tirmidzi
            </div>
        </div>

        <div class="relative w-full h-full cursor-pointer grid-cell-wrapper">
            <a href="<?= base_url('/page/sunan_nasai_view'); ?>" class="absolute h-full w-full top-0 left-0">
                <!-- This empty anchor will cover the whole cell -->
            </a>
            <div class="flex items-center justify-center h-full w-full grid-cell">
                Sunan Nasa'i
            </div>
        </div>

        <div class="relative w-full h-full cursor-pointer grid-cell-wrapper">
            <a href="<?= base_url('/page/sunan_abu_dawud_view'); ?>" class="absolute h-full w-full top-0 left-0">
                <!-- This empty anchor will cover the whole cell -->
            </a>
            <div class="flex items-center justify-center h-full w-full grid-cell">
                Sunan Abu Dawud
            </div>
        </div>

        <div class="relative w-full h-full cursor-pointer grid-cell-wrapper">
            <a href="<?= base_url('/page/sunan_ibnu_majah_view'); ?>" class="absolute h-full w-full top-0 left-0">
                <!-- This empty anchor will cover the whole cell -->
            </a>
            <div class="flex items-center justify-center h-full w-full grid-cell">
                Sunan Ibnu Majah
            </div>
        </div>
    </div>

    <button class="w-[22rem] h-[5rem] border border-black rounded-full mt-[2rem]" onclick="redirectToTarget()">
        tes
    </button>

    <script>
        // JavaScript function to redirect to the target URL
        function redirectToTarget() {
            window.location.href = "<?= base_url('/page/all_kitab_view'); ?>"; // Replace this with your target URL
        }
    </script>

</div>

</body>
</html>

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

    <style>
        /* Styling for pagination links */
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .pagination .pagination-link {
            color: #333;
            padding: 8px 12px;
            border: 1px solid #ccc;
            background-color: #f7f7f7;
            margin: 30px 0;
            text-decoration: none;
            border-radius: 30px; /* Rounded border */
            transition: background-color 0.3s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow */
        }

        .pagination .pagination-link:hover {
            background-color: #e0e0e0;
        }

        .pagination .pagination-link.active {
            background-color: #da373d;
            color: #fff;
            font-weight: bold;
        }

        /* Add some space between pagination links */
        .pagination .pagination-link:not(:first-child) {
            margin-left: 500px;
        }
    </style>

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
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/stylex.css" />
    <link rel="dns-prefetch" href="#" />
    <link rel="manifest" href="<?php echo base_url();?>/assets/manifest.json" />
    <link href="<?php echo base_url();?>/assets/css/indexx.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="<?php echo base_url();?>/assets/images/favicon.ico" />
  </head>

  <nav class="navbar navbar-expand-lg navbar-dark bg-gold fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?= base_url() ?>">
          QURANPEDIA
        </a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

        </div>
      </div>
    </nav>
<br>

<body class="homepage px-[40px]">

    <div class="container container flex flex-col p-0">
        <!-- Display the table with the data from the shahih_muslim table -->
        <table class="table w-5rem border border-black justify-center">
            <thead>
                <tr>
                    <th class="p-4">Kitab</th>
                    <th class="p-4">Hadits</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($shahih as $row) : ?>
                    <tr>
                        <td class="p-4 w-[15%]">
                          <?php
                        switch($row['kitab']){
                          case 'shahih_muslim':
                            echo 'Shahih Muslim';
                            break;
                          case 'shahih_bukhari':
                            echo 'Shahih Bukhari';
                            break;
                          case 'sunan_tirmidzi':
                            echo 'Sunan Tirmidzi';
                            break;
                          case 'sunan_nasai':
                            echo 'Sunan Nasa\'i';
                            break;
                          case 'sunan_abu_daud':
                            echo 'Sunan Abu Dawud';
                            break;
                          case 'sunan_ibnu_majah':
                            echo 'Sunan Ibnu Majah';
                            break;
                        } ?>
                        </td>
                        <td class="p-4"><?= $row['arab']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- Display pagination links with the "default_full" template -->
        <container class="flex flex-end relative justify-end flex-gap-3 w-max-lg"><?= $pager->links('group1', 'custom1'); ?></container>
    </div>
</body>

  <!-- <script type="text/javascript">
    var surah_number, surah_ayahs;
  </script>
  <script src="/js/jquery.min.js"></script>
  <script src="/js/main.js"></script>
  <script type="text/javascript">
    if ('serviceWorker' in navigator) {
      window.addEventListener('load', function () {
        navigator.serviceWorker.register('sw.js');
      });
    }
  </script> -->
</html>
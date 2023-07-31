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
      border-radius: 30px;
      /* Rounded border */
      transition: background-color 0.3s ease;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      /* Add a subtle box shadow */
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

  <link href="<?php

  use App\Controllers\Shahih_Bukhari;

  echo base_url(); ?>/assets/images/apple-touch-icon.png" rel="apple-touch-icon" />
  <link href="<?php echo base_url(); ?>/images/splashscreens/iphone5_splash.png"
    media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)"
    rel="apple-touch-startup-image" />
  <link href="<?php echo base_url(); ?>/images/splashscreens/iphone6_splash.png"
    media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)"
    rel="apple-touch-startup-image" />
  <link href="<?php echo base_url(); ?>/images/splashscreens/iphoneplus_splash.png"
    media="(device-width: 621px) and (device-height: 1104px) and (-webkit-device-pixel-ratio: 3)"
    rel="apple-touch-startup-image" />
  <link href="<?php echo base_url(); ?>/images/splashscreens/iphonex_splash.png"
    media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3)"
    rel="apple-touch-startup-image" />
  <link href="<?php echo base_url(); ?>/images/splashscreens/iphonexr_splash.png"
    media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2)"
    rel="apple-touch-startup-image" />
  <link href="<?php echo base_url(); ?>/images/splashscreens/iphonexsmax_splash.png"
    media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3)"
    rel="apple-touch-startup-image" />
  <link href="<?php echo base_url(); ?>/images/splashscreens/ipad_splash.png"
    media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2)"
    rel="apple-touch-startup-image" />
  <link href="<?php echo base_url(); ?>/images/splashscreens/ipadpro1_splash.png"
    media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2)"
    rel="apple-touch-startup-image" />
  <link href="<?php echo base_url(); ?>/images/splashscreens/ipadpro3_splash.png"
    media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2)"
    rel="apple-touch-startup-image" />
  <link href="<?php echo base_url(); ?>/images/splashscreens/ipadpro2_splash.png"
    media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2)"
    rel="apple-touch-startup-image" />
  <link rel="preload" as="font" href="<?php echo base_url(); ?>/assets/fonts/IndoPak.woff2" type="font/woff2"
    crossorigin />
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/stylex.css" />
  <link rel="dns-prefetch" href="#" />
  <link rel="manifest" href="<?php echo base_url(); ?>/assets/manifest.json" />
  <link href="<?php echo base_url(); ?>/assets/css/indexx.css" rel="stylesheet" />
  <link href="<?= base_url('css/highlight.css') ?>" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>/assets/images/favicon.ico" />
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-gold fixed-top">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url() ?>">
      QURANPEDIA
    </a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarResponsive"
      aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

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
          <th class="p-4">ID</th>
          <th class="p-4">Kitab</th>
          <th class="p-4">Hadits</th>
        </tr>
      </thead>

      <tbody>
        <?php
        $request = service('request');
        $selectedWord = $request->getGet('highlight');

        if ($selectedWord === null) {
          $stemmedSelectedWord = null;
        } else {
          $stemmedSelectedWord = $controller->arabicStem($selectedWord);
        }

        foreach ($shahih as $row): ?>
          <tr>
            <td class="p-4 w-[5%]">
              <?php echo $row['id']; ?>
            </td>

            <td class="p-4 w-[15%]">
              <?php
              switch ($row['kitab']) {
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

            <td class="p-4">
              <?php
              $words = preg_split('/\s+/', $row['arab']);
              foreach ($words as $word) {
                $removedDiacritics = Shahih_Bukhari::removeDiacritics($word);
                $stemmedWord = $controller->arabicStem($removedDiacritics);
                if ($stemmedSelectedWord !== null && $stemmedWord === $stemmedSelectedWord) {
                  if ($stemmedSelectedWord === 'له') {
                    $highlightedWord = '<span class="font-bold text-red-500 text-decoration-line: underline">' . $word . '</span>';
                  }
                  if ($controller->arabicStem($stemmedWord) === $stemmedSelectedWord) {
                    $highlightedWord = '<span class="font-bold text-red-500 text-decoration-line: underline">' . $removedDiacritics . '</span>';
                  } else {
                    $highlightedWord = '<span class="font-bold text-red-500 text-decoration-line: underline">' . $removedDiacritics . '</span>';
                  }
                  echo '<a href="' . base_url('/page/shahih_bukhari_view/?highlight=' . $word) . '">' . Shahih_Bukhari::removeDiacritics($highlightedWord) . '</a> ';
                } elseif (Shahih_Bukhari::isMarifah($word)) {
                  echo '<a class="text-gray-500 text-decoration-line: underline" href="' . base_url('/page/shahih_bukhari_view/?highlight=' . $word) . '">' . $removedDiacritics . '</a> ';
                } else {
                  echo $removedDiacritics . ' ';
                }
              }
              ?>
            </td>

          </tr>
          <?php
        endforeach;
        ?>

        <container class="grid w-[100%] grid-cols-2 grid-rows-1 gap-4 items-center">

          <div class="text-left py-4">
            <div class="p-2 w-full max-w-[50%] h-[100%] text-white font-semibold rounded-md bg-gold opacity-75">
              <?php
              $stemmedWord = $controller->arabicStem($selectedWord);
              if ($stemmedWord == '') {
                echo '<p>Tidak ada kata yang dipilih</p>';
              } else if ($stemmedWord == '') {

              } else {
                $stemmedWord = Shahih_Bukhari::removeDiacritics($stemmedWord);
                $splitWord = mb_str_split($stemmedWord);
                $splitWord = implode(' ', $splitWord);
                ?>
                  <div>
                  <?php echo '<p>Kata yang dipilih :' . $selectedWord;
                  echo '</p>'; ?>
                  </div>
                  <div>
                    <?php
                    echo '<p>Akar Kata :' . $splitWord;
                    echo '</p>';
                    ?>
                  </div>
                <?php } ?>
            </div>
          </div>

          <div class=" text-right">
            <button class="p-2 text-white font-semibold rounded-md transition duration-150 bg-gold"
              onclick="window.location.href = '<?= base_url('/page/shahih_bukhari_view') ?>'">
              Clear Filter
            </button>
          </div>

        </container>

      </tbody>
    </table>

    <container class="flex flex-end relative justify-end flex-gap-3 w-max-lg">
      <?= $pager->links('group1', 'custom1'); ?>
    </container>
  </div>
</body>

</html>
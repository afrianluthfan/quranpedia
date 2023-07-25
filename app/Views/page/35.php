<?= $this->extend('layout/navbar2');  ?>
<?= $this->section('content');  ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-gold fixed-top">
      <div class="container">
        <a class="navbar-brand">
          Faatir <span class="nav-slash">/</span> فاطر <span class="nav-surahname-en"><span class="nav-slash">/</span> The Originator</span></a
        ><button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span id="chevron-navbar-icon" class="chevron-down-nav"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="SurahSelector" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Surah <span id="chevron-selector-surah" class="chevron-down"></span></a>
              <div class="dropdown-menu" id="surah-list" aria-labelledby="SurahSelector"></div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="AyahSelector" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ayah <span id="chevron-selector-ayah" class="chevron-down"></span></a>
              <div class="dropdown-menu ayah-selector" aria-labelledby="AyahSelector"></div>
            </li>
            <li class="nav-item"><a class="nav-link" href="#" role="button" data-toggle="modal" data-target="#AboutModal">About </a></li>
            <li class="nav-item"><a class="nav-link" href="#" role="button" data-toggle="modal" data-target="#SettingsModal">Settings </a></li>
          </ul>
        </div>
      </div>
    </nav>
   
    <script type="text/javascript">
      var surah_name = 'Faatir',
        surah_number = 35,
        surah_ayahs = 45;
    </script>
<?= $this->endSection();  ?>
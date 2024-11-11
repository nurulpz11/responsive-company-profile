<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PT. GLOBAL ENERGI LESTARI</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

   <!-- ======= Header ======= -->
   <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

     <!-- <h1 class="logo me-auto"><a href="index.html">Arsha</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="#hero2">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Mobile Use</a></li>
          <li><a class="nav-link scrollto" href="#services">Activities</a></li>
          <li class="dropdown"><a href="#portfolio"><span>SOP</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('sop') }}">Work Instructions</a></li>
              <li><a href="#">Procedures</a></li>
              <li><a href="#">Standards 3</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="#about">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero2" class="d-flex align-items-center">
  <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
    <div class="row">

    <div id="hero2-description">
    Explore SOPs that align with your job
    <br> requirements
  </div>
  <div id="deep-insights">
  Discover SOPs that have been intricately developed to 
  <br> suit the specific demands of your job
    </div>
   
    <div id="search-bar">
  <input type="text" class="search-input" placeholder="Search...">
  <div id="buttons-container">
    <button class="custom-button">Weight Bridge</button>
    <button class="custom-button">Stockpile</button>
    <button class="custom-button">Excavator</button>
    <button class="custom-button">Tongkang</button>
    <button class="custom-button">Dump Truck</button>
  </div>
</div>



</section>
<style>

 .custom-button {
  width: 100%;
  max-width: 300px;
  background-color: #F0EBE0;
  color: #2B2B2B;
  padding: 10px;
  border: none;
  border-radius: 20px;
  cursor: pointer;
  transition: background-color 0.3s, color 0.3s;
  margin: 20px auto 0; /* Menengahkan tombol secara horizontal dan memberikan margin atas */
}

.button-text1 {
  color: #2B2B2B;
}

.button-text2 {
  color: #CF9D31;
}

#hero-description {
  color: #2B2B2B;
  font-size: 32px;
  font-family: 'Inter', sans-serif;
  font-weight: 500;
  line-height: 44.80px;
  margin: 20px 0; /* Memberikan margin atas dan bawah pada deskripsi */
  text-align: center;
}
#hero2-description {
  color: #2B2B2B;
  font-size: 32px;
  font-family: 'Inter', sans-serif;
  font-weight: 500;
  line-height: 44.80px;
  margin: 20px 0; /* Memberikan margin atas dan bawah pada deskripsi */
  text-align: center;
}
#get-started-button {
    margin-top: 20px; /* Sesuaikan dengan kebutuhan jarak antara tulisan dan tombol */
    text-align: center;
  }

  .get-started-button {
    background-color: #2B2B2B;
    color: #F8FAFB;
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s;
  }
#deep-insights {
    color: #2B2B2B;
    font-size: 18px;
    font-family: 'Inter', sans-serif;
    font-weight: 400;
    line-height: 1.5;
    margin-top: 20px; /* Sesuaikan dengan kebutuhan jarak antara deskripsi dan tulisan baru */
    text-align: center;
  }
  
 
  #search-bar {
  margin-top: 20px;
  text-align: center;
  position: relative;
}

.search-input {
  width: 100%;
  max-width: 500px;
  padding: 10px 30px 10px 40px;
  border: 2px solid #969696;
  border-radius: 20px;
  margin: 20px auto 0;
  background: url('assets/img/searchh.png') no-repeat;
  background-position: 10px center;
}
#buttons-container {
  display: flex;
  justify-content: center;
  margin-top: 10px; /* Sesuaikan jarak antara input dan tombol */
}

.custom-button {
    width: auto;
    font-family:  'Inter', sans-serif;
  font-size: 14px;
  font-style: normal;
  font-weight: 400;
  line-height: 140%;
  background-color: #F8F7F4;
  color: #2B2B2B;
  padding: 10px;
  border: none;
  border-radius: 20px;
  cursor: pointer;
  transition: background-color 0.3s, color 0.3s;
  margin: 0 7px; /* Sesuaikan jarak antara tombol */
  margin-top: 15px;
  
}

@keyframes moveImage {
  from {
    transform: translateY(0);
  }
  to {
    transform: translateY(20px);
  }
}

/* Responsiveness */
@media screen and (max-width: 768px) {
  .custom-button {
    max-width: 80%; /* Menyesuaikan lebar maksimum pada layar kecil */
  }

  .button-text1,
  .button-text2 {
    font-size: 14px; /* Sesuaikan dengan ukuran font responsif */
  }
  .get-started-button {
      padding: 8px 16px;
    }
  #deep-insights {
      font-size: 14px; /* Sesuaikan dengan ukuran font responsif */
    }
    .animated-image {
    max-width: 27%; /* Lebar gambar maksimum menjadi 100% */
    margin-right: 0; /* Tidak ada jarak antara gambar di perangkat mobile */
  }
  .search-input {
    max-width: 80%;
  }
}

@media screen and (min-width: 600px) {
  #hero2-description {
    font-size: 32px;
    font-weight: 500;
    line-height: 44.80px;
    color: #2B2B2B;
  }
}
@media screen and (max-width: 600px) {
  #hero2-description {
    font-size: 20px; /* Sesuaikan ukuran font untuk tampilan mobile */
    font-weight: 400; /* Sesuaikan berat font untuk tampilan mobile */
    line-height: 28px; /* Sesuaikan tinggi baris untuk tampilan mobile */
    color: #2B2B2B;
  }
  .search-input {
    padding: 10px 20px;
    background-size: contain; /* Mengatur gambar agar sesuai dengan ukuran lebar layar */
  }

  .custom-button {
      font-size: 11px; /* Further adjust font size for mobile screens */
      padding: 8px; /* Further adjust padding for mobile screens */
      margin: 0 3px; /* Further adjust margin for mobile screens */
      margin-top: 5px; /* Further adjust top margin for mobile screens */
    }
}

</style>
  <!-- End Hero -->

<!-- ======= Portfolio Section ======= -->
<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
  <div class="container" data-aos="fade-up">

    <ul id="portfolio-flters" class="d-flex justify-content: flex-start" data-aos="fade-up" data-aos-delay="100">
      <li data-filter=".filter-app" class="filter-active">Work Instruction</li>
      <li data-filter=".filter-web">Procedures</li>
      <li data-filter=".filter-card">Standards</li>
    </ul>

  
  <!-- APP -->
    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
    <div class="col-lg-3 col-md-6 portfolio-item filter-app">
  <div class="portfolio-card">
    <!-- Konten Card 1 -->
    <a href="https://drive.google.com/file/d/1cAI83n6UCVPOvMsFcV06SSanhQ1LaOPG/view
" target="_blank" class="pdf-link">
      <button class="corner-button button-green">SIP-IK-OSM-001</button>
      <div class="additional-card">
        <img src="assets/img/portfolio/icon.png" alt="Icon" class="centered-icon">
      </div>
      <p class="button-text">Instruksi Kerja Pengoperasian PH</p>
    </a>
  </div>
</div>

      <!-- Card 2 -->
      <div class="col-lg-3 col-md-6 portfolio-item filter-app">
        <div class="portfolio-card">
          <!-- Konten Card 2 -->
          <button class="corner-button button-blue">SIP-IK-OSM-002</button>
          <div class="additional-card">
            <img src="assets/img/portfolio/icon.png" alt="Icon" class="centered-icon">
          </div>
          <p class="button-text">Instruksi Kerja Pengoperasian Timbang</p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-lg-3 col-md-6 portfolio-item filter-app">
        <div class="portfolio-card">
          <!-- Konten Card 3 -->
          <button class="corner-button button-red">SIP-IK-OSM-003</button>
          <div class="additional-card">
            <img src="assets/img/portfolio/icon.png" alt="Icon" class="centered-icon">
          </div>
          <p class="button-text">Instruksi Kerja Pengoperasian Kapal</p>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-lg-3 col-md-6 portfolio-item filter-app">
        <div class="portfolio-card">
          <!-- Konten Card 4 -->
          <button class="corner-button button-yellow">SIP-IK-OSM-004</button>
          <div class="additional-card">
            <img src="assets/img/portfolio/icon.png" alt="Icon" class="centered-icon">
          </div>
          <p class="button-text">Instruksi Kerja Pengoperasian  Timbang</p>
        </div>
      </div>

    <!-- Card 1 -->
    <div class="col-lg-3 col-md-6 portfolio-item filter-app">
        <div class="portfolio-card">
          <!-- Konten Card 1 -->
          <button class="corner-button button-green">SIP-IK-OSM-005</button>
          <div class="additional-card">
            <img src="assets/img/portfolio/icon.png" alt="Icon" class="centered-icon">
          </div>
          <p class="button-text">Instruksi Kerja Pengoperasian Stockpile</p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-lg-3 col-md-6 portfolio-item filter-app">
        <div class="portfolio-card">
          <!-- Konten Card 2 -->
          <button class="corner-button button-blue">SIP-IK-OSM-006</button>
          <div class="additional-card">
            <img src="assets/img/portfolio/icon.png" alt="Icon" class="centered-icon">
          </div>
          <p class="button-text">Instruksi Kerja Pengoperasian Grade</p>
        </div>
      </div>


<!-- WEB -->
      <!-- Card 1 -->
      <div class="col-lg-3 col-md-6 portfolio-item filter-web">
        <div class="portfolio-card">
          <!-- Konten Card 1 -->
          <button class="corner-button button-green">SIP-IK-OSM-007</button>
          <div class="additional-card">
            <img src="assets/img/portfolio/icon.png" alt="Icon" class="centered-icon">
          </div>
          <p class="button-text">Instruksi Kerja Pengoperasian Supplier</p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-lg-3 col-md-6 portfolio-item filter-web">
        <div class="portfolio-card">
          <!-- Konten Card 2 -->
          <button class="corner-button button-blue">SIP-IK-OSM-008</button>
          <div class="additional-card">
            <img src="assets/img/portfolio/icon.png" alt="Icon" class="centered-icon">
          </div>
          <p class="button-text">Instruksi Kerja Operator Timbangan</p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-lg-3 col-md-6 portfolio-item filter-web">
        <div class="portfolio-card">
          <!-- Konten Card 3 -->
          <button class="corner-button button-red">SIP-IK-OSM-002</button>
          <div class="additional-card">
            <img src="assets/img/portfolio/icon.png" alt="Icon" class="centered-icon">
          </div>
          <p class="button-text">Instruksi Kerja Pengoperasian Jembatan Timbang</p>
        </div>
      </div>


<!-- CARD -->
      <!-- Card 1 -->
      <div class="col-lg-3 col-md-6 portfolio-item filter-card">
        <div class="portfolio-card">
          <!-- Konten Card 1 -->
          <button class="corner-button button-green">SIP-IK-OSM-002</button>
          <div class="additional-card">
            <img src="assets/img/portfolio/icon.png" alt="Icon" class="centered-icon">
          </div>
          <p class="button-text">Instruksi Kerja Pengoperasian Jembatan Timbang</p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-lg-3 col-md-6 portfolio-item filter-card">
        <div class="portfolio-card">
          <!-- Konten Card 2 -->
          <button class="corner-button button-blue">SIP-IK-OSM-002</button>
          <div class="additional-card">
            <img src="assets/img/portfolio/icon.png" alt="Icon" class="centered-icon">
          </div>
          <p class="button-text">Instruksi Kerja Pengoperasian Jembatan Timbang</p>
        </div>
      </div>


    </div>
  </div>
</section>



     
  </div>
</section>

<style>
   .portfolio-card {
    position: relative;
    margin-bottom: 5px;
    overflow: hidden;
    border: 2px solid #000;
    width: 120%;
    max-width: 300px;
    height: 300px;
    border-color: white;
    margin-left: 35px;
    background-color: rgba(255, 255, 255, 0.8);
  }
  

  .corner-button {
    position: absolute;
    bottom: 60px;
    left: 5px;
    padding: 5px 10px;
    background-color: #D8F9C7;
    color:#000000;
    border: none;
    border-radius: 20px;
    cursor: pointer;
    font-size : 12px;
  }
  /* Menambahkan gaya untuk setiap warna tombol */
  .button-green {
      background-color: #D8F9C7;
    
    }

    .button-blue {
      background-color: #FFF8F6;
      
    }

    .button-red {
      background-color: #FFF6E7;
     
    }

    .button-yellow {
      background-color: #F0EBE0;
     
    }
    .button-text {
    position: absolute;
    bottom: 1px;
    left: 5px;
    font-family:'Inter', sans-serif;
    font-size: 14px;
    font-style: normal;
    font-weight: 400;
    line-height: 140%;
  }
  
  .additional-card {
    position: absolute;
    top: 0; /* Menempatkan card tambahan di bagian atas */
    left: 0;
    width: 100%;
    height: 60%;
    background-color: white;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: white;
    padding: 10px;
    box-sizing: border-box;
    border: 2px solid #B2700D;
    border-radius: 10px;
  }
  .centered-icon {
    width: 50px; /* Sesuaikan ukuran ikon */
    height: 50px;
  }
  .pdf-link {
  text-decoration: none; /* Menghilangkan garis bawah dari tautan */
  color: inherit; /* Menurunkan warna teks dari elemen induk */
  display: block; /* Membuat tautan menutupi seluruh kartu */
  width: 100%;
  height: 100%;
}


@media screen and (max-width: 768px) {
  .portfolio-card {
      max-width: 150%; /* Adjust the width for smaller screens */
      max-width: 300px;
    height: 500px;
    }

    .corner-button {
      bottom: 20px; /* Adjust the bottom position for smaller screens */
      padding: 3px 6px; /* Adjust padding for smaller screens */
    }

    .button-text {
      font-size: 12px; /* Adjust the font size for smaller screens */
    }

    .additional-card {
      height: 50%; /* Adjust the height for smaller screens */
    }

    .centered-icon {
      width: 30px; /* Adjust the icon size for smaller screens */
      height: 30px;
    }
  }

  /* Add a media query for screens with a maximum width of 600px (mobile) */
  @media screen and (max-width: 600px) {
    .portfolio-card {
      max-width: 110%; /* Adjust the width for smaller screens */
      max-width: 280px;
    height: 300px;
    }
    .button-text {
    
    font-size: 11px;
    line-height: 50%;
    bottom: 1px;
  }

  .corner-button {
    bottom: 40px;
    left: 5px;
    padding: 2px 6px;
    border-radius: 20px;
    cursor: pointer;
    font-size : 10px;
  }
    .button-text {
    
    font-size: 12px;
    line-height: 70%;
    bottom: 1px;
   } 
   .additional-card {
    width: 100%;
    height: 60%;
    padding: 10px;
    border-radius: 10px;
    
  }
  
  
  }

</style>


      



  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
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
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#services">About</a></li>
          <li><a class="nav-link scrollto" href="#about">Mobile Use</a></li>
          <li><a class="nav-link scrollto" href="#why-us">Activities</a></li>
          <li class="dropdown"><a href="#"><span>SOP</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('sop') }}">Work Instructions</a></li>
              <li><a href="#">Procedures</a></li>
              <li><a href="#">Standards </a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#footer">Contact</a></li>
          <li><a class="getstarted scrollto" href="#faq">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
  <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
    <div class="row">
      
      <button class="custom-button">
        <span class="button-text1">Coal Quality & </span>
        <span class="button-text2">Stockpile Management </span>
      </button>
    </div>
    <div id="hero-description">
    Your Path to Efficient Coal Management
  </div>
  <div id="deep-insights">
      Gain deep insights into your coal stock, enabling decisions based on accurate, real-time data
    </div>
    <div id="get-started-button">
      <button class="get-started-button">Get Started</button>
    </div>
    <div class="hero-images">
  <img class="animated-image" src="assets/img/hero1.png" alt="Animated Image 1">
  <img class="animated-image" src="assets/img/hero2.png" alt="Animated Image 1">
  <img class="animated-image" src="assets/img/hero3.png" alt="Animated Image 1">
  <img class="animated-image" src="assets/img/hero4.png" alt="Animated Image 1">
  <img class="animated-image" src="assets/img/hero6.png" alt="Animated Image 1">
  
    
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
  
  .hero-images {
  display: flex;
  justify-content: center; /* Memastikan gambar berada di tengah secara horizontal */
  align-items: center;
  width: 100%;
  margin-top: 20px;
  margin-left: 20px; /* Jarak di sisi kiri gambar pertama */
}

.animated-image {
  width: 100%; /* Sesuaikan dengan lebar gambar yang diinginkan */
  max-width: 240px; /* Sesuaikan dengan lebar maksimum gambar */
  height: auto; /* Sesuaikan dengan tinggi gambar */
  position: relative;
  background: linear-gradient(0deg, white 0%, white 100%);
  animation: moveImage 2s infinite alternate;
  align-self: center; /* Memastikan gambar berada di tengah secara vertikal */
  margin-right: 35px; /* Sesuaikan dengan jarak antara gambar */
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
      font-size: 16px; /* Sesuaikan dengan ukuran font responsif */
    }
    .animated-image {
    max-width: 27%; /* Lebar gambar maksimum menjadi 100% */
    margin-right: 0; /* Tidak ada jarak antara gambar di perangkat mobile */
  }
}

</style>
  <!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= 
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>  -->
    </section><!-- End Cliens Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">

    
<div class="container" data-aos="fade-up">
  <div class="section-title">
    <h2>Advantages</h2>
    <h5> Efficiently oversee data throughout the entire supply chain</h5>
    <p>Optimize data monitoring throughout every phase of the supply chain process </p>
  </div>

  <!-- Card Container -->
  <div class="card-container">
    <!-- Card 1 -->
    <div class="card">
      <img src="assets/img/truck.png" class="img-fluid" alt="">
      <p class="card-title1">Supplier</p>
      <p class="card-description">Manage supplier data</p>
    </div>

    <!-- Card 2 -->
    <div class="card">
      <img src="assets/img/check.png" class="img-fluid" alt="">
      <p class="card-title1">Grade</p>
      <p class="card-description">Manage grade data</p>
    </div>

    <!-- Card 3 -->
    <div class="card">
      <img src="assets/img/list.png" class="img-fluid" alt="">
      <p class="card-title1">Contract</p>
      <p class="card-description">Manage contact data</p>
    </div>

    <!-- Card 4 -->
    <div class="card">
      <img src="assets/img/beaker.png" class="img-fluid" alt="">
      <p class="card-title1">Material</p>
      <p class="card-description">Manage material data</p>
    </div>

    <!-- Card 5 -->
    <div class="card">
      <img src="assets/img/template.png" class="img-fluid" alt="">
      <p class="card-title1">Stockpile</p>
      <p class="card-description">Manage stockpile dat</p>
    </div>

    <!-- Card 6 -->
    <div class="card">
      <img src="assets/img/paper.png" class="img-fluid" alt="">
      <p class="card-title1">Collier</p>
      <p class="card-description">Manage collier data</p>
    </div>
  </div>
</div>
</section>

<style>
body {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: Arial, sans-serif;
}

.container {
  max-width: 1400px;
  margin: 0 auto;
  padding: 20px;
}

.card-container {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  margin-top: 20px;
}

@keyframes moveCard {
  0% {
    transform: translate(0, 0);
  }
  50% {
    transform: translate(0, -10px);
  }
  100% {
    transform: translate(0, 0);
  }
}
.card {
      width: calc(15.66% - 7px); /* 16.66% for each card with some margin in between */
      text-align: center;
      margin: 2px;
      padding: 10px;
      box-sizing: border-box;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 20px;
      animation: moveCard 4s infinite; /* Menggunakan animasi dengan durasi 2 detik dan diulang-inulang */
}

.card:hover {
  animation: none; /* Menonaktifkan animasi saat hover */
}

.card img {
  width: 15%;
  max-width: 100%;
  height: auto;
  display: block;
  margin: 0 auto;
  border-radius: 20px;
  margin-bottom: 10px;
  object-fit: cover;
  object-position: top center;

  
}


.card .card-title1 {
  color: #2B2B2B;
  font-size: 18px;
  font-family: 'Inter', sans-serif;
  font-weight: 400;
  line-height: 21.60px;
  word-wrap: break-word;
}

.card .card-description {
  color: rgba(107, 107, 107, 0.99);
  font-size: 16px;
  font-family: 'Inter', sans-serif;
  font-weight: 400;
  line-height: 22.40px;
  word-wrap: break-word;
}


@media (max-width: 767px) {
  .card {
    width: 48%; /* Lebar penuh pada layar kecil (mobile) */
    margin: 15px 0;
  }

  .card img {
    width: 20%; /* Lebar penuh pada layar kecil (mobile) */
}
.card .card-title1 {
    font-size: 14px; /* Sesuaikan ukuran font untuk layar kecil */
  }

  .card .card-description {
    font-size: 12px; /* Sesuaikan ukuran font untuk layar kecil */
  }

}
</style>

    


  </div>
</section><!-- End Services Section -->



    
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
    <div class="container-fluid" data-aos="fade-up">
      <div class="row">
        <!-- Text Content -->
        <div class="col-lg-7 order-2 order-lg-1">
          <div class="content2">
            <h3>Coal Quality & Stockpile Management</h3>
            <h5>Seamlessly manage data on your mobile device, anytime, anywhere!</h5>
            <h6>Conveniently manage data on the fly, anytime and anywhere, using your mobile device</h6>
          </div>
          <div class="circle-container">
            <div class="circle">
              <span>1</span>
            </div>
            <div class="open-text">
              Open the website
            </div>
          </div>

          <div class="circle-container">
            <div class="circle">
              <span>2</span>
            </div>
            <div class="open-text">
            Tap the menu icon (three dots at the top right)
            </div>
          </div>

          <div class="circle-container">
            <div class="circle">
              <span>3</span>
            </div>
            <div class="open-text">
            Select 'Add to home screen
            </div>
          </div>

          <div class="circle-container">
            <div class="circle">
              <span>4</span>
            </div>
            <div class="open-text">
            Select 'Add to home screen
            </div>
          </div>

          <div class="circle-container">
            <div class="circle">
              <span>5</span>
            </div>
            <div class="open-text">
            The website app will appear on your home screen
            </div>
          </div>


        </div>
        <!-- Image -->
        <div class="col-lg-5 order-1 order-lg-2">
        <div class="image2-container">
          <img src="assets/img/Mobile.png" alt="Your Image" class="img-fluid2">
          <div>
          </div>
    </div>
  </div>
</section>

<style>
 body {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    .container-fluid {
      max-width: 1200px;
      margin: 0 auto;
      padding: 5px;
    }

    .about {
      /* Tambahkan gaya tambahan untuk bagian ini jika diperlukan */
    }

    .content2 {
      max-width: 730px;
      padding: 20px;
      margin-left: -100px;
      text-align: left;
      
    }

    .about .content2 h3 {
      font-size: 16px;
      font-style: normal;
      font-weight: 400;
      color: #B2700D;
      margin-top : 10px;
      text-align: left;
      margin-left: 300px;
    }

    .about .content2 h5 {
      font-size: 28px;
      font-weight: 500;
      color: #2B2B2B;
      margin-top: 15px;
      padding-bottom: 20px;
      text-align: center;
      margin-left: 200px;
      
    }

    .about .content2 h6 {
      font-size: 18px;
      font-weight: 300;
      color: #2B2B2B;
      margin-top: 10px;
      padding-bottom: 20px;
      text-align: center;
      margin-left: 210px;
    }

    .black-button {
      display: inline-block;
      padding: 15px 30px;
      background-color: #000;
      /* Warna latar belakang hitam */
      color: #fff;
      /* Warna teks putih */
      text-decoration: none;
      border-radius: 30px;
      font-size: 16px;
      transition: background-color 0.3s ease;
      margin-left: -20px;
    }

    .black-button:hover {
      background-color: #333;
      /* Warna hitam yang lebih gelap saat dihover */
    }

    .image2-container {
      text-align: center;
      /* Aligment gambar di tengah jika diinginkan */
      margin-right: -100px;
    }

    .img-fluid2 {
      max-width: 90%;
      width: 100%;
      height: auto;
      max-height: 600px;
      /* Sesuaikan ketinggian maksimum sesuai kebutuhan */
    }

  .circle-container {
    display: flex;
    align-items: center;
    margin-top: 10px;
  }

  .circle {
    width: 42px;
    height: 42px;
    background: #EBD7AB;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 10px;
  }

  .circle span {
    text-align: center;
    color: black;
    font-size: 18px;
    font-family: 'Inter', sans-serif;
    font-weight: 400;
    line-height: 21.60px;
  }

  .open-text {
    font-size: 16px;
    color: #2B2B2B;
    font-family: 'Inter', sans-serif;
  }

  

    @media (max-width: 991px) {
      .col-lg-7 {
        order: 1;
        /* Mengubah urutan untuk layar seluler */
      }
    }

    @media (max-width: 767px) {
      .col-lg-5 {
        margin-top: 20px;
        /* Tambahkan spasi antara teks dan gambar pada layar kecil */
      }
      .image2-container {
        margin-right: -5px;
      }
      .img-fluid2 {
        width: 70%;
        height: auto;
        /* Sesuaikan ketinggian maksimum untuk layar yang lebih kecil */
      }
      .about .content2 h3 {
     
      margin-left: 135px;
      }

      .about .content2 h5 {
  
        margin-left: 100px;
      }

      .about .content2 h6 {
        
        margin-left: 105px;
        text-align: center;
      }
        
    }
  </style>
        
    </section><!-- End About Us Section -->

   <!-- ======= Why Us Section ======= -->
<section id="why-us" class="why-us section-bg">
  <div class="container-fluid" data-aos="fade-up">
    <div class="row">

      <!-- Text Content -->
      <div class="col-lg-7 order-2 order-lg-1">
        <div class="content1">
          <h3>Coal Quality & Stockpile Management</h3>
          <h5>Boost Company Productivity and Leverage Real-Time Data for Informed Decision-Making</h5>
          <h6> Efficiently manage a data repository and visualize data findings through charts and more for informed decision-making
          <div class="container">
    <a href="#" class="black-button">Get Started</a>
</div>
        </div>
      </div>

      <!-- Image -->
      <div class="col-lg-5 order-1 order-lg-2">
        <div class="image-container">
          <img src="assets/img/Grafik.png" alt="Your Image" class="img-fluid">
        </div>
      </div>

    </div>
  </div>
</section>

<style>
  body {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
  }

  .container-fluid {
    max-width: 1200px;
    margin: 0 auto;
    padding: 5px;
  }

  .why-us {
    /* Add any additional styles for the section as needed */
  }

  .content1{
  max-width: 800px;
  
  padding: 20px;
  margin-left: -25px;
  text-align: left; /* Atur teks agar berada di sebelah kiri */
  
}

.why-us .content1 h3 {
  font-size: 16px;
  font-style: normal;
  font-weight: 400;
  color: #B2700D;
  margin-top: 5px;
  text-align: left; /* Atur teks agar berada di sebelah kiri */
}

.why-us .content1 h5 {
  font-size: 28px;
  font-weight: 500;
  color: #2B2B2B;
  margin-top: 20px;
  padding-bottom: 20px;
  text-align: left; /* Atur teks agar berada di sebelah kiri */
}

.why-us .content1 h6 {
  font-size: 18px;
  font-weight: 300;
  color: #2B2B2B;
  margin-top: 20px;
  padding-bottom: 20px;
  text-align: left; /* Atur teks agar berada di sebelah kiri */
}
  .black-button {
   display: inline-block;
   padding: 15px 30px;
   background-color: #000; /* Black background color */
   color: #fff; /* White text color */
   text-decoration: none;
   border-radius: 30px;
   font-size: 16px;
  transition: background-color 0.3s ease;
  margin-left: -20px;
  }
.black-button:hover {
            background-color: #333; /* Darker shade of black on hover */
        }

  .image-container {
    text-align: center; /* Align the image in the center if desired */
    margin-right: -100px;
  }

  .img-fluid {
    max-width: 100%;
    height: 250px;
    max-height: 600px; /* Adjust the maximum height as needed */
  }

  @media (max-width: 991px) {
    .col-lg-7 {
      order: 1; /* Change the order for mobile screens */
    }
  }

  @media (max-width: 767px) {
    .col-lg-5 {
      margin-top: 20px; /* Add spacing between text and image on small screens */
    }
    .image-container {
    margin-right: -5px;
    }
    .img-fluid {
      width: 70%;
      height: auto; /* Adjust the maximum height for smaller screens */
    }
    .content1 {
    margin-left: -5px; /* Nilai margin kiri pada perangkat mobile */
  }
  }
</style>
<!-- End Why Us Section -->


    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
    <div class="container" data-aos="fade-up">
    <div class="row">
      <!-- Column with Image -->
      <div class="col-lg-6 custom-column" data-aos="fade-right" data-aos-delay="100">
        <img src="assets/img/board.png" alt="Your Image">
      </div>
      <!-- Column with Content -->
      <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
        <h3>Coal Quality & Stockpile Management</h3>
        <h2>Access SOPs as Your Ultimate Work Guide</h2>
        <h1>Find in-depth Standard Operating Procedures to streamline your tasks</h1>
      </div>
    </div>
  </div>
    </section>
    <style>
/* CSS untuk Tata Letak Gambar */
/* CSS Styling */
.col-lg-6.custom-column {
  display: flex;
  align-items: center;
  justify-content: flex-end; /* Posisikan ke kanan */
}

.col-lg-6.custom-column img {
  max-width: 100%;
  height: auto;
  border-radius: 10px; /* Jika ingin menambahkan sudut melengkung pada gambar */
  margin-right: 200px; /* Pindahkan sedikit ke kiri */
}

@media (max-width: 767px) {
  .col-lg-6.custom-column img {
    width: 40%; /* Sesuaikan lebar gambar pada perangkat seluler */
    margin: 0 auto; /* Pusatkan gambar pada perangkat seluler */
    display: block; /* Hilangkan efek flex pada perangkat seluler */
  }
}


  </style>
    
    <!-- End Skills Section -->

   <!-- ======= Frequently Asked Questions Section ======= -->
   <section id="faq" class="faq section-bg">
   <img class="faq-image" src="assets/img/faq.png" alt="Background Image">

  <!-- Optional: Add some content -->
  <div class="faq-content">
    <div class="login-form">
      <h2>Sign&nbsp;In</h2>
      <form>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password1" id="password" name="password" required>
        <a href="#" class="forgot-password-link">Forgot&nbsp;Password?</a>

        <button type="submit">Login</button>
        <p class="account-text">Don’t&nbsp;have&nbsp;an&nbsp;account?&nbsp;Call&nbsp;admin</p>
      </form>
    </div>
  </div>
</section>

<style>

    #faq {
      position: relative;
      width: 100%;
      height: 90vh; /* Adjust as needed */
      overflow: hidden;
    }
    .faq-image {
      position: absolute;
      top: 0;
      left: 0;
      width: 20%;
      height: 100%;
      object-fit: cover;
    }

    
   .faq-content {
  position: absolute;
  top: 50%;
  left: 26%;
  transform: translate(-50%, -50%);
  color: white;
  text-align: center;
}

.faq-content h2 {
  color: #2B2B2B;
  font-size: 30px;
  font-family: 'Inter', sans-serif;
  font-weight: 500;
  line-height: 44.80px;
  margin: 0; /* Hilangkan margin agar sejajar dengan elemen berikutnya */
}

    /* Login form styles */
    .login-form {
      position: absolute;
      top: 50%;
      left: 10%; /* Adjust as needed */
      transform: translate(-50%, -50%);
      text-align: left;
      width: 50%;
      
    }

    .login-form input {
      width: 100%;
      height: auto;
      padding: 10px 200px;
      margin-bottom: 10px;
      border-radius: 10px;
      border: 1px #969696 solid; 
      margin-top: 20px;

    }
    .login-form input[type="password1"] {
    color: white;
    margin-top: 20px;
    }
    .login-form button {
      background-color: #000000;
      color: white;
      padding: 0.625rem 11.25rem; 
      border: none;
      border-radius: 15px;
      cursor: pointer;
      margin-top: 40px;
      
    }
    .login-form p.account-text {
      color: #182561;
      font-size: 14px;
      font-family: 'Inter', sans-serif;
      font-weight: 400;
      line-height: 16.80px;
      margin-top: 20px; /* Sesuaikan jarak atas yang diinginkan */
      margin-left: 85px;
    }
    /* ... (your existing styles) ... */

    .login-form a.forgot-password-link {
      color: #182561;
      font-size: 12px;
      font-family: 'Inter', sans-serif;
      font-weight: 400;
      line-height: 14.40px;
      display: block;
      margin-top: 5px;
      margin-left: 300px;
      
    }

/* ... (your existing styles) ... */

  
  .faq-content label {
    color: #2B2B2B;
    font-size: 16px;
    font-family: 'Inter', sans-serif;
    font-weight: 400;
    line-height: 22.40px;
    margin-top: 15px;
  }
  /* Penambahan aturan untuk elemen input dengan tipe 'password' */
  @media only screen and (max-width: 768px) {
  .faq{
    width: 100%;
    height: 40%;
  }
  .faq-content {
    left: 50%;
    width: 80%;
    height: 40%;
    transform: translate(-50%, -50%);
  }

  .faq-image {
    width: 20%;
      height: auto%;
  }

  .login-form {
    width:70%;
    left: 60%;
    transform: translate(-50%, -50%);
  }

  .login-form input {
    padding: 10px;
    margin-top: 10px;
  }

  .login-form button {
    padding: 5% 40%; /;
    margin-top: 20px;
    
  }

  .login-form a.forgot-password-link {
    margin-left: 120px;
    text-align: center;
  }

  .login-form p.account-text {
    margin-left: 0;
    text-align: center;
  }

  .faq-content h2 {
    font-size: 24px;
    line-height: 34.40px;
  }

  .faq-content label {
    font-size: 14px;
    line-height: 20.30px;
    margin-top: 10px;
  }
}

  </style>


<!-- End Frequently Asked Questions Section -->


    <!-- ======= Cta Section ======= -->
    <!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <!-- End Portfolio Section -->

    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

        
        <div class="col-lg-3 col-md-6 footer-contact">
  <img src="assets/img/logo.png" alt="Your Logo" class="responsive-logo">
  <br><br>
  <div class="contact-info">
    <div class="info-item">
    <div class="icon">
  <img src="assets/img/location.png" alt="Your Icon">
</div>
      <div class="text">
        Gedung Artha Graha 30th Floor Jl. Jen. Sudirman Kav 52-53 SCDB Jakarta Selatan
      </div>
    </div>
    <div class="info-item">
      <div class="icon">
  <img src="assets/img/phone.png" alt="Your Icon">
</div>
      <div class="text">
        0822-9803-0023
      </div>
    </div>
  </div>
</div>


        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy;  Global Energi Lestari 2023. All rights reserved.
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
       
      </div>
    </div>
  </footer>
  <style>

.responsive-logo {
  max-width: 50%;
  height: auto;
}
.footer-contact {
  text-align: center;
}

.contact-info {
  width: 100%;
  margin-left: 70px;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: flex-start;
  gap: 25px;
  margin-top: 10px;
}


.info-item {
  display: flex;
  align-items: center;
  gap: 13px;
}

.icon {
  position: relative;
  display: inline-block;
  overflow: hidden;
}

.icon img {
  width: 100%;
  height: auto;
  display: block;
}

.icon::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}


.text {
  width: 100%;
  font-size: 16px;
  font-family: 'Inter', sans-serif;
  font-weight: 400;
  line-height: 22.40px;
  color: #969696;
   text-align: left;
  
}

/* Responsif untuk layar kecil */
/* Responsif untuk layar kecil */
/* Responsif untuk layar kecil */
@media only screen and (max-width: 768px) {
  .footer-contact {
    text-align: center;
  }

  .responsive-logo {
    max-width: 100%;
    margin-left: 0;
  }

  .contact-info {
    text-align: left;
    margin-left: 0;
    gap: 15px;
  }

  .info-item {
    flex-direction: row; /* Mengubah flex-direction kembali menjadi row */
    align-items: center;
    text-align: left;
    gap: 5px;
  }

  .icon {
    margin-bottom: 0; /* Menghapus margin-bottom pada icon */
    margin-right: 10px; /* Menambah margin-right pada icon untuk memberikan jarak */
  }

  .icon img {
    max-width: 100%;
  }

  .text {
    font-size: 14px;
    line-height: 20px;
  }
}



</style>
  
  <!-- End Footer -->

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
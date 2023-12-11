<!--code Php untuk mengambil data username dan akan diteruskan ke checkout-->
<?php
session_start();

// Ambil username dari sesi
$username = @$_SESSION['username'];

// Periksa apakah username ada
if (empty($username)) {
    // Jika tidak,akan balik ke login lagi
    header('Location: ../login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Toko Baju.</title>
    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"/>
    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- animate css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- my css -->
    <style>
      <?php include '../assets/styles/home.css'; ?>
    </style>
  </head>
  <body>
    <?php  echo '<script>alert("Selamat datang di toko HUNT CLOTH")</script>';?>

    <!-- jumbotron Start-->
    <header>
      <div class="jumbotron">
        <img src="../assets/img/jumbotron/hero1.jpg" class="slider fitur" alt="hero-2" />
        <img src="../assets/img/jumbotron/hero2.jpg" class="slider fitur" alt="hero-3" />
        <img src="../assets/img/jumbotron/hero3.jpg" class="slider fitur" alt="hero-4" />
        <p class="tagline">Fashion Pria Terbaik, Hanya di Sini.</p>
      </div>
        <a href="#shopping" class="btn-pesan animate__animated animate__fadeInDown animate__delay-2s">Pesan Sekarang</a>
    </header>
    <!-- jumbotron End  -->
    
    <!-- Navbar Start -->
    <nav class="navbar">
      <a href="#faq" class="navbar-logo text">Hunt Cloth's.</a>

      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#shopping">Shopping</a>
        <a href="#contact">Contact</a>
        <p id="count">0</p>
      </div>
      
      <div class="navbar-extra">
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- about Start -->
    <section class="about" id="about">
      <div class="main">
        <div class="img">
          <img src="../assets/img/about/about.png" alt="About us">
        </div>
        <div class="text">
          <h2>Tentang <span>Kami</span></h2>
          <p class="elemen">
          Selamat datang di Hunt Cloths! Kami adalah destinasi fashion pilihan Anda, menawarkan penuh gaya dalam setiap jahitan. Dengan koleksi terbaru kemeja, jaket, dan kaos, kami hadir untuk membawa pengalaman berbelanja Anda ke level berikutnya. 
          <br><br>
          Gaya yang kami tawarkan bukan hanya pakaian, tapi juga pernyataan dari kepribadian Anda. Temukan kenyamanan dan kepercayaan diri dalam setiap pilihan fashion di sini. Mari bersama-sama tampil lebih dari sekadar tren, mari tampilkan gaya unik Anda bersama Hunt Cloths!
          </p>
        </div>
      </div>
    </section>
    <!-- about End -->

    <!-- Shopping Start -->
    <section class="shopping" id="shopping">
      <h2>SHOPPING <span>CART</span></h2>
      <div class="dropCart">
        <div id="root"></div>
        <div class="sidebar">
          <div class="searchContent">
            <div class="searchbar">
              <input
                placeholder="Search..."
                id="searchBar"
                name="search"
                type="text"
              />
              <i class="bi bi-search hover"></i>
            </div>
          </div>
          <div id="cartItem">Your Cart Is Empty</div>
          <div class="foot">
            <h3>Total</h3>
            <h2 id="total">$ 0.00</h2>
          </div>
          <a href="./checkout.php?username=<?php echo urlencode($username); ?>" class="btn-check">Checkout</a>
        </div>
      </div>
    </section>
    <!-- Shopping End -->

    <!-- Faq Start -->
    <section class="faq" id="faq">
      <h2>FA <span>Question</span></h2>
      <div class="faqCart">
        <div class="question">
          <h3>Kapan orderan saya dikirim ?</h3>
          <svg width="15" height="10" viewBox="0 0 42 55">
            <path
              d="M3 3L21 21L39 3"
              stroke="white"
              stroke-width="7"
              stroke-linecap="round"
            />
          </svg>
        </div>
  
        <div class="answer">
          <p>
          Tim kami memerlukan waktu untuk penyiapan pesanan hingga terkirim maksimal 1x24 jam dari notifikasi pesanan diterima kecuali hari libur Nyepi.
          </p>
        </div>
      </div>
      <div class="faqCart">
        <div class="question">
          <h3>Bagaimana cara saya tau apakah pesanan saya stoknya tersedia ?</h3>
          <svg width="15" height="10" viewBox="0 0 42 55">
            <path
              d="M3 3L21 21L39 3"
              stroke="white"
              stroke-width="7"
              stroke-linecap="round"
            />
            </svg>
        </div>
  
        <div class="answer">
          <p>
          Seluruh produk yang dapat di checkout sama dengan siap untuk di proses. Admin kami akan langsung menghubungi kamu apabila terdapat kendala dalam pemenuhan stok pesananmu. 
          </p>
        </div>
      </div>
      <div class="faqCart">
        <div class="question">
          <h3>Kira-kira pesanan saya kapan tiba ?</h3>
          <svg width="15" height="10" viewBox="0 0 42 55">
            <path
              d="M3 3L21 21L39 3"
              stroke="white"
              stroke-width="7"
              stroke-linecap="round"
            />
          </svg>
        </div>
  
        <div class="answer">
          <p>
          Estimasi pengiriman selama pandemi umumnya 2-4 hari kerja. Untuk informasi lanjut bisa dilacak melalui informasi nomor resi pengirimanmu atau menghubungi JNE terdekat. 
          </p>
        </div>
      </div>   
    </section>
    <!-- Faq End -->

    <!-- Contact Start -->
    <section class="contact" id="contact">
      <h2>Kontak <span>Kami</span></h2>
      <div class="container">
      <input type="radio" name="slider" id="s1" checked />
      <input type="radio" name="slider" id="s2" />
      <input type="radio" name="slider" id="s3" />
      <input type="radio" name="slider" id="s4" />
      <input type="radio" name="slider" id="s5" />

      <div class="cards">
        <label for="s1" id="slide1">
          <div class="card">
            <div class="image">
              <img src="../assets/img/contacs/rahman.jpg" alt="rahman" />
              <div class="dots">
                <div></div>
                <div></div>
                <div></div>
              </div>
            </div>

            <div class="infos">
              <span class="name">Rahman Nurhadi</span>
              <span class="nim">15220161</span>

              <div class="actions">
                <i class="bi bi-instagram"></i>
                <i class="bi bi-github"></i>
                <i class="bi bi-messenger"></i>
              </div>
            </div>
          </div>
        </label>
        <label for="s2" id="slide2">
          <div class="card">
            <div class="image">
              <img src="../assets/img/contacs/muni.jpg" alt="muni" />
              <div class="dots">
                <div></div>
                <div></div>
                <div></div>
              </div>
            </div>

            <div class="infos">
              <span class="name">Muqniansyah Arifin</span>
              <span class="nim">15220059</span>

              <div class="actions">
                <i class="bi bi-instagram"></i>
                <i class="bi bi-github"></i>
                <i class="bi bi-messenger"></i>
              </div>
            </div>
          </div>
        </label>
        <label for="s3" id="slide3">
          <div class="card">
            <div class="image">
              <img src="../assets/img/contacs/rangga99x.jpg" alt="rangga" />
              <div class="dots">
                <div></div>
                <div></div>
                <div></div>
              </div>
            </div>

            <div class="infos">
              <span class="name">Rangga Ryantico</span>
              <span class="nim">15220089</span>

              <div class="actions">
                <i class="bi bi-instagram"></i>
                <i class="bi bi-github"></i>
                <i class="bi bi-messenger"></i>
              </div>
            </div>
          </div>
        </label>
        <label for="s4" id="slide4">
          <div class="card">
            <div class="image">
              <img src="../assets/img/contacs/kelvin.jpg" alt="kelvin" />
              <div class="dots">
                <div></div>
                <div></div>
                <div></div>
              </div>
            </div>

            <div class="infos">
              <span class="name">Calvin Altra Alfrando</span>
              <span class="nim">15220092</span>

              <div class="actions">
                <i class="bi bi-instagram"></i>
                <i class="bi bi-github"></i>
                <i class="bi bi-messenger"></i>
              </div>
            </div>
          </div>
        </label>
        <label for="s5" id="slide5">
          <div class="card">
            <div class="image">
              <img src="../assets/img/contacs/revanda.jpg" alt="revanda" />
              <div class="dots">
                <div></div>
                <div></div>
                <div></div>
              </div>
            </div>

            <div class="infos">
              <span class="name">Revanda Ghofar</span>
              <span class="nim">15220091</span>

              <div class="actions">
                <i class="bi bi-instagram"></i>
                <i class="bi bi-github"></i>
                <i class="bi bi-messenger"></i>
              </div>
            </div>
          </div>
        </label>
      </div>
    </div>
    </section>
    <!-- Contact End -->

    <!-- footer Start -->
    <div class="footer">
      <div class="row">
        <div class="footer-col">
          <h4>HUNT CLOTH'S</h4>
          <ul>
            <li>
              <a href="https://maps.app.goo.gl/QpyvvMEUR4L9yhCk8">
                <i class="bi bi-building-add"></i> 
                Jl.Baru Jadi
              </a>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31729.941095463844!2d106.94232085395474!3d-6.231710937955996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c60f308e3d3%3A0x842d64d6fecd2688!2sKec.%20Bekasi%20Bar.%2C%20Kota%20Bks%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1702086946026!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
            </li>
            <li class="gmail">
                <i class="bi bi-envelope"></i> 
                hunt@gmail.com
            </li>
          </ul>
        </div>
        <div class="footer-col">
          <ul>
            <li class="links">Links</li>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#shopping">shopping</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <img class="logo" src="../assets/img/contacs/huntcloths.png" alt="logo">
          </div>
        </div>
      </div>
    </div>
    <p class="copyright">&#169; hunt cloth's 2023</p>
    <!-- footer End -->

     <!-- Feather Icons -->
     <script>
      // untuk pakai feather icons
      feather.replace();
    </script>

    <!-- fontawesome js-->
    <script src="https://kit.fontawesome.com/7397d5904a.js" crossorigin="anonymous"></script>
    <script>
      <?php include '../assets/script/home.js'; ?>
    </script>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kuliner Nusantara</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />
    <!-- Feather Icon -->
    <script src="https://unpkg.com/feather-icons"></script>
    
    <!-- My Style -->
    <link rel="stylesheet" href="cssindex.css" />
  </head>

  <body>
  
    <!-- Navbar Start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo"> Jenna's </cr><span>Restaurant</span></a>

        <div class="navbar-nav">
          <a href="#">Home</a>
          <a href="#about"> About </a>
          <a href="#menu">Menu</a>
          <a href="#bukutamu">BukuTamu</a>
        </div>

        <div class="navbar-extarct">
          <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- main section start / halaman web -->
    <section class="main">
      <main class="content">
        <h1>Jelajahi Kuliner Nusantara <span> <br>Di Jenna's Restaurant</span></h1>
        <p>jenna's restaurant is the best !!</p>
        <a href="#" class="cta">ORDER NOW !!</a>
      </main>
    </section>

    <!-- main section end / halaman web -->

    <!-- About section Start -->
    <section id="about" class="about">
      <h2><span> About My Restaurant </h2>

      <div class="row">
        <div class="about-img">
          <img src="asset/bg6.jpg" alt="about" />
        </div>
        <div class="content">
         
          <p>
            Restoran Citra Nusantara adalah tempat makan yang menawarkan kekayaan kuliner 
            Indonesia dalam satu tempat. Dengan desain interior yang menggabungkan unsur 
            tradisional dan modern, restoran ini memberikan suasana yang nyaman dan hangat 
            bagi para pengunjungnya. Dinding-dinding restoran dihias dengan seni rupa dan motif
            khas nusantara, sementara furnitur yang digunakan terbuat dari material alami seperti 
            kayu dan bambu, menciptakan nuansa autentik Indonesia.Restoran ini juga sering mengadakan 
            acara khusus seperti malam musik tradisional, pameran seni, dan kelas memasak untuk memperkenalkan
            dan melestarikan kekayaan kuliner dan budaya Indonesia kepada masyarakat.
          </p>
        </div>
      </div>
    </section>

    <!-- About section End -->

    <!-- Menu section start -->
    <section id="menu" class="menu">
      <h2><span>Menu</h2><br>
      <p>Berikut Menu Kuliner di Jenna's Restaurant</p>

      <div class="row">
        <div class="menu-card">
          <img
            src="asset/opor ayam.jpeg"
            alt="oporayam"
            class="menu-card-masakan"
          />
          <h3 class="menu-card-title">- Opor Ayam -</h3>
          <p class="manu-card-Dari">Rp. 15.000</p><br>
          <a href="oporayam.html" class="btn btn-danger">selengkapnya</a>
        </div>
        <div class="menu-card">
          <img
            src="asset/Pecak Ikan Gurame.jpeg"
            alt="pecakikangurame"
            class="menu-card-masakan"
          />
          <h3 class="menu-card-title">- Pecak Ikan Gurame -</h3>
          <p class="manu-card-Dari">Rp. 30.000</p><br>
          <a href="pecakikangurame.html" class="btn btn-danger">selengkapnya</a>
        </div>
        <div class="menu-card">
          <img
            src="asset/Sate Ayam.jpeg"
            alt="sateayam"
            class="menu-card-masakan"
          />
          <h3 class="menu-card-title">- Sate Ayam -</h3>
          <p class="manu-card-Dari">Rp. 15.000</p><br>
          <a href="sateayam.html" class="btn btn-danger">selengkapnya</a>
        </div>
        <div class="menu-card">
          <img
            src="asset/sayur asem.jpeg"
            alt="sayurasem"
            class="menu-card-masakan"
          />
          <h3 class="menu-card-title">- Sayur Asem -</h3>
          <p class="manu-card-Dari">Rp. 10.000</p><br>
          <a href="sayurasem.html" class="btn btn-danger">selengkapnya</a>
        </div>
        <div class="menu-card">
          <img
            src="asset/Nasi Bakar.jpeg"
            alt="nasibakar"
            class="menu-card-masakan"
          />
          <h3 class="menu-card-title">- Nasi Bakar -</h3>
          <p class="manu-card-Dari">Rp. 15.000</p><br>
          <a href="nasibakar.html" class="btn btn-danger">selengkapnya</a>
        </div>
        <div class="menu-card">
          <img
            src="asset/download (4).jpeg"
            alt="rendang"
            class="menu-card-masakan"
          />
          <h3 class="menu-card-title">- Rendang -</h3>
          <p class="manu-card-Dari">Rp. 20.000</p><br>
          <a href="rendang.html" class="btn btn-danger">selengkapnya</a>
        </div>
      </div>
    </section>

    <!-- Menu section End -->

    <!-- buku tamu Start -->
    <section id="bukutamu" class="contact">
      <h2><span>Buku Tamu</h2><br>
        <p>Silahkan Isi Form Untuk Memesan Makanan di Jenna's Restaurant.</p>
            <div class="desainpost">
                <!-- Form untuk pengiriman data dengan metode POST -->
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div>
                        <label>Nama</label>
                        <input type="text" name="fnama">
                    </div>
                    <div>
                        <label>Email</label>
                        <input type="email" name="femail">
                    </div>
                    <div>
                        <label>Pesan</label>
                        <textarea name="fpesan"></textarea> <!-- Menggunakan textarea untuk pesan -->
                    </div>
                    <div>
                        <input type="submit" name="Submit">
                    </div>
                </form>
            </div>
            
            <div>
                <!-- Menampilkan data yang dikirimkan dengan metode POST -->
                <?php
                if (isset($_POST['fnama'])) {
                    $nama = $_POST['fnama'];
                    $email = $_POST['femail'];
                    $pesan = $_POST['fpesan'];
                    echo "<h2><center>Hi, $nama!</center></h2>";
                    echo "<p><center>Email Anda adalah: $email</center></p>";
                    echo "<p><center> pesananan anda : $pesan </center></p>";
                }
                ?>
            </div><br>
            
            <div class="desainget">
                <!-- Form untuk pengiriman data dengan metode GET -->
                <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                      <div>
                          <label>Kritik</label>
                          <input type="text" name="kritik_get">
                        </div>
                        <div>
                          <label>Saran</label>
                          <input type="text" name="saran_get">
                        </div>
                        <div>
                          <input type="submit" name="SubmitGet" value="Kirim Kritik & Saran">
                      </div>
                </form>
            </div>

            <div>
                <!-- Menampilkan data yang dikirimkan dengan metode GET -->
                <?php
                if (isset($_GET['kritik_get']) && isset($_GET['saran_get'])) {
                    $kritik_get = $_GET['kritik_get'];
                    $saran_get = $_GET['saran_get'];

                    echo "<p style='text-align:center;'>Kritik : $kritik_get<p>";
                    echo "<p style='text-align:center;'>Terima kasih atas kritik Anda :)</p>";
                    
                    echo "<p style='text-align:center;'>Saran : $saran_get<p>";
                    echo "<p style='text-align:center;'>Saran Anda sangat berharga bagi kami.</p>";
                }
                ?>
            </div>

                
    </section>

    <!-- buku tamu End -->

    <!-- Feather Icon -->
    <script>
      feather.replace();
    </script>

    <!-- Javascript -->
    <script src="scriptindex.js"></script>

  </body>
  <footer class="footer">
    <p>
      &copy; 2024 jenna's Restaurant rights reserved.
    </p>
  </footer>
</html>

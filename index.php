<!DOCTYPE html>
<html lang="id">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Website | BAKESBANGPOL Sumenep</title>
  <meta name="description" content="ini deskripsi">
  <meta name="title" content="Website | BAKESBANGPOL Sumenep">
  <meta name="keyword" content="BAKESBANGPOL ">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@BAKESBANGPOL Sumenep">
  <meta name="twitter:title" content="Website | BAKESBANGPOL Sumenep">
  <meta name="twitter:creator" content="@ahsnl_khlqn">
  <meta name="twitter:description" content="ini deskripsi">
  <meta name="twitter:image" content="https://sumenepkab.go.id/assets/theme2/img/favicon.png">

  <meta property="og:site_name" content="Website | BAKESBANGPOL Sumenep">
  <meta property="og:image" content="https://sumenepkab.go.id/assets/theme2/img/favicon.png">
  <meta property="og:image:width" content="600">
  <meta property="og:image:height" content="315">
  <meta property="og:locale" content="id_ID">
  <meta property="og:title" content="Website | BAKESBANGPOL Sumenep">
  <meta property="og:description" content="ini deskripsi">
  <meta property="og:type" content="article">
  <meta name="msapplication-TileImage" content="https://sumenepkab.go.id/assets/theme2/img/favicon.png">
  <meta name="msapplication-TileImage" content="https://sumenepkab.go.id/assets/theme2/img/favicon.png">
  <meta name="msapplication-TileColor" content="#f4e4d7">
  <meta name="theme-color" content="#f4e4d7">

  <link rel="shortcut icon" href="https://sumenepkab.go.id/assets/theme2/img/favicon.png">
  <link rel="apple-touch-icon" href="https://sumenepkab.go.id/assets/theme2/img/favicon.png">
  <link rel="apple-touch-icon" sizes="152x152" href="https://sumenepkab.go.id/assets/theme2/img/favicon.png">
  <link rel="apple-touch-icon" sizes="180x180" href="https://sumenepkab.go.id/assets/theme2/img/favicon.png">
  <link rel="apple-touch-icon" sizes="167x167" href="https://sumenepkab.go.id/assets/theme2/img/favicon.png">
  <link rel="icon" href="https://sumenepkab.go.id/assets/theme2/img/favicon.png" sizes="32x32" />
  <link rel="icon" href="https://sumenepkab.go.id/assets/theme2/img/favicon.png" sizes="192x192" />
  <link rel="apple-touch-icon" href="https://sumenepkab.go.id/assets/theme2/img/favicon.png" />
  <link rel="mask-icon" href="https://sumenepkab.go.id/assets/theme2/img/favicon.png" color="#f4e4d7">
  <script>
    AOS.init();
  </script>
</head>

<body style="background-color: #ffffff">

  <?php
  include "asset/header.php";
  ?>
  <!-- BODY -->
  <div class="background">
    <div class="backgroundprofile">
      <div class="shape"></div>

      <!-- berita -->
      <div class="site-section" style="display: block;position :relative; top: -50px;">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <span class="caption d-block mb-2 font-secondary">Trending</span>
              <h2 class="site-section-heading text-uppercase text-center font-secondary">Berita Terkini
              </h2>
            </div>
          </div>
          <div class="slide-container swiper fade">
            <div class="slide-content">
              <div class="card-wrapper swiper-wrapper">
              <?php
          require "asset/koneksi.php";
          if (!$koneksi) {
            die('Gagal terhubung MySQL: ' . mysqli_connect_error());
          }
          $sql = "SELECT * FROM `berita` ";

          $query = mysqli_query($koneksi, $sql);

          if (!$query) {
            die('SQL Error: ' . mysqli_error($koneksi));
          }

          while ($row = mysqli_fetch_array($query)) {
            $str = $row["tanggal"];
            
            echo "
            <div class='card swiper-slide'>
            <div class='image-content'>
              <span class='overlay'></span>

              <div class='card-image'>
                <img src='admin/berita/image/". $row['img'] ."' alt='' class='card-img'>
                <div class='tanggal'>
                  <div id='tanggal1'>". date('d', strtotime($str)) ."</div>
                  <div id='bulandantahun'>". date('F Y', strtotime($str)) ."</div>
                </div>
              </div>
            </div>

            <div class='card-content'>
              <div class='card-about'>
                <div class='Waktu'><ion-icon name='person-outline'></ion-icon> ".$row["author"]."</div>
              </div><br>
              <h2 class='name'>". mb_strimwidth($row["judul"], 0, 50, "...") ."
              </h2><br><br>
              </div>
             <a href='berita/berita-halaman.php?id_berita=$row[id_berita]' class='button'>View More <ion-icon name='chevron-forward-outline'></ion-icon></a>
          </div>
          ";
          }
          ?>

                
                <!-- jika mau menambahkan berita -->
              </div>
            </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
          </div>

          <center>
            <a href="#" style="color: #ffffff;" class="swiper-readmore">Lihat Lebih Banyak</a>
          </center>
        </div>
      </div>

      <div class="col-md-12 text-center fade">
        <span class="caption d-block mb-2 font-secondary font-weight-bold">About</span>
        <h2 class="site-section-heading text-uppercase text-center font-secondary">Profile
        </h2>
      </div>
      <div class="profile-top fade">
        <p>
          <b>Direktorat Jenderal Kesatuan Bangsa dan Politik Kementerian Dalam Negeri</b> atau disingkat dengan
          Kesbangpol Kemendagri merupakan salah satu direktorat dari Kementerian Dalam Negeri yang mempunyai
          tugas menyelenggarakan urusan pemerintahan dalam negeri untuk membantu Presiden dalam menyelenggarakan
          pemerintahan negara
        </p>
      </div>
      <div class="profile fade">
        <div class="profile-item">
          <div class="imgkantor">
            <div class="imgkantoroverlay"></div>
          </div>
        </div>
        <div class="profile-item" style="padding: 30px;">
          <p>
            Kantor Kesatuan Bangsa dan Politik mempunyai tugas, menyelenggarakan sebagian kewenangan rumah
            tangga
            kota (desentralisasi) dalam Bidang Kesatuan Bangsa dan Politik Dalam Negeri yang menjadi
            kewenangannya
            serta melaksanakan tugas lain sesuai dengan kebijakan yang ditetapkan oleh Walikota Metro
            berdasarkan
            Peraturan ...
          </p>
          <p>
            Perumusan kebijakan teknis pembinaan politik dalam negeri dan ketahanan nasional Pembinaan politik
            dalam negeri Pembinaan ketahanan nasional dan. Evaluasi dan penyusunan laporan pelaksanaan kerja
            Bidang Politik Dalam Negeri dan Ketahanan Nasional.
          </p>
        </div>
      </div>


    </div>
  </div>
  <!-- Galeri -->
  <div class="galeri">
    <div class="col-md-12 text-center fade">
      <span class="caption d-block mb-2 font-secondary font-weight-bold"></span>
      <h2 class="site-section-heading text-uppercase text-center font-secondary">Galeri
      </h2>
    </div>
    <div class="galeri-photo">
      <div class="galeri-grid">
        <div class="galeri-item">
          <img class="imggrid1" src="https://portal.kesbangpol.bandung.go.id/wp-content/uploads/2023/10/WhatsApp-Image-2023-10-19-at-16.23.39-1024x576.jpeg" alt="">
        </div>
        <div class="galeri-item">
          <img class="imggrid1" src="https://portal.kesbangpol.bandung.go.id/wp-content/uploads/2023/10/WhatsApp-Image-2023-10-19-at-16.23.39-1024x576.jpeg" alt="">
        </div>
        <div class="galeri-item">
          <img class="imggrid1" src="https://portal.kesbangpol.bandung.go.id/wp-content/uploads/2023/10/WhatsApp-Image-2023-10-19-at-16.23.39-1024x576.jpeg" alt="">
        </div>
      </div>
    </div>
    <br><br>
    <div class="col-md-12 text-center fade">
      <span class="caption d-block mb-2 font-secondary font-weight-bold"></span>
      <h2 class="site-section-heading text-uppercase text-center font-secondary">Galeri Video
      </h2>
    </div>
    <div class="galeri-video">
      <div class="galeri-grid">
        <div class="galeri-item">
        <iframe width="100%" height="240px" class="imggrid1" src="https://www.youtube.com/embed/bdg7LLY0N9w?si=t7mO7_1k2dtKwtND" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>

 
  <!-- <div class="spanduk fade">
    <div class="grid-banner">
      <div class="item-banner">
        <div class="overlay-banner"></div>
        <img src="kplbks.png" alt="">
      </div>
      <div class="item-banner" id="caption-banner">
        <h1 class="h1-banner"><b>"Bersama kita wujudkan
            perubahan"</b></h1>
        <p class="p-banner">Kami senang mendengar dari Anda! Jika Anda memiliki pertanyaan, masukan, atau ingin berkolaborasi,
          jangan ragu untuk menghubungi kami melalui formulir kontak atau info kontak di bawah ini. </p>
        <button class="contactbtn" onclick="getMenumanager(2)">CONTACT US</button>
        <div class="contact-social">
          <div class="social-item"><ion-icon name="mail-outline"></ion-icon> 1234@example.com</div>
          <div class="social-item"><ion-icon name="logo-instagram"></ion-icon> BANGKESBANGPOL</div>
        </div>
      </div>
    </div>
  </div> -->


  <!-- Indeks Kepuasan Masyarakat -->
  <div class="col-md-12 text-center fade">
    <span class="caption d-block mb-2 font-secondary font-weight-bold">Indeks</span>
    <h2 class="site-section-heading text-uppercase text-center font-secondary">Kepuasan Masyarakat
    </h2>
  </div>
  <div class="kepuasanmasyarakat fade">
    <div class="grid-kepuasanmasyarakat">
      <div class="page-kepuasanmasyarakat">
        <center>
          <h3><ion-icon name="stats-chart-outline"></ion-icon></h3>
        </center>
        <iframe src="asset/highcart.php" frameborder="0"></iframe>
      </div>
      <div class="page-kepuasanmasyarakat" style="padding:10px;">
        <center>
          <h3><ion-icon name="link-outline"></ion-icon></h3>
        </center>
        <center><br>
          <h4 style="font-family:Arial, Helvetica, sans-serif; font-weight:600;">
            Sistem Informasi Induk Masyarakat
          </h4>
          <p style="position:relative;top:-10px;">Form Pelayanan Bangkesbangpol</p>
          <br><br><br><br>
          <a href="halaman/form-kepuasan.php" class="btnkunjungi" style="border:none;padding:10px 30px;margin-bottom:150px; color:white;font-weight:bold;">Kunjungi</a>
          <br><br><br><br><br><br><br>
        </center>
      </div>
    </div>
  </div>




  <!-- Kontak Kami -->
  <div class="kontak-kami" id="kontakkami">
    <div class="col-md-12 text-center fade">
      <span class="caption d-block mb-2 font-secondary font-weight-bold"></span>
      <h2 class="site-section-heading text-uppercase text-center font-secondary">kontak Kami
      </h2>
    </div><br>
    <div class="grid-kontak">
      <div class="kontak-card">
        <h2><b><ion-icon name="location"></ion-icon></b></h2>
        <h3><b>Alamat Kami</b></h3>
        <p>Jl. Maju Gerak</p>
      </div>
      <div class="kontak-card">
        <h2><b><ion-icon name="mail"></ion-icon></b></h2>
        <h3><b>Email Kami</b></h3>
        <p>Info@example.com</p>
      </div>
      <div class="kontak-card">
        <h2><b><ion-icon name="call"></ion-icon></b></h2>
        <h3><b>Telp Kami</b></h3>
        <p>Jl. Maju Gerak</p>
      </div>
    </div>
  </div>

 <!-- Sponsor -->
 <div class="sponsor fade">
    <div class="slide-container swiper" style="height:auto; transform:scale(0.9);">
      <div class="slide-content">
        <div class="card-wrapper swiper-wrapper">
          <div class="card swiper-slide">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSl5tb0gmuddNTEzAGncmf5cBjU2I24pphv_vCKHZltjdnn3HkVc7byPaZR7PDqQ4vM4A&usqp=CAU" alt="">
          </div>
          <div class="card swiper-slide">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSl5tb0gmuddNTEzAGncmf5cBjU2I24pphv_vCKHZltjdnn3HkVc7byPaZR7PDqQ4vM4A&usqp=CAU" alt="">
          </div>
          <div class="card swiper-slide">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSl5tb0gmuddNTEzAGncmf5cBjU2I24pphv_vCKHZltjdnn3HkVc7byPaZR7PDqQ4vM4A&usqp=CAU" alt="">
          </div>
          <div class="card swiper-slide">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSl5tb0gmuddNTEzAGncmf5cBjU2I24pphv_vCKHZltjdnn3HkVc7byPaZR7PDqQ4vM4A&usqp=CAU" alt="">
          </div>
          <div class="card swiper-slide">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSl5tb0gmuddNTEzAGncmf5cBjU2I24pphv_vCKHZltjdnn3HkVc7byPaZR7PDqQ4vM4A&usqp=CAU" alt="">
          </div>
          <div class="card swiper-slide">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSl5tb0gmuddNTEzAGncmf5cBjU2I24pphv_vCKHZltjdnn3HkVc7byPaZR7PDqQ4vM4A&usqp=CAU" alt="">
          </div>
          <div class="card swiper-slide">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSl5tb0gmuddNTEzAGncmf5cBjU2I24pphv_vCKHZltjdnn3HkVc7byPaZR7PDqQ4vM4A&usqp=CAU" alt="">
          </div>
          <div class="card swiper-slide">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSl5tb0gmuddNTEzAGncmf5cBjU2I24pphv_vCKHZltjdnn3HkVc7byPaZR7PDqQ4vM4A&usqp=CAU" alt="">
          </div>
          <div class="card swiper-slide">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSl5tb0gmuddNTEzAGncmf5cBjU2I24pphv_vCKHZltjdnn3HkVc7byPaZR7PDqQ4vM4A&usqp=CAU" alt="">
          </div>
        </div>
        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </div><br><br> 
  

  <div class="site-section section-counter" style="margin-top: 30px;">
    <div class="container fade">
      <div class="row">
        <div class="col-lg-6">
          <p class="mb-5"><img src="https://imgv2-2-f.scribdassets.com/img/document/449842912/original/e260a48b1e/1704022820?v=1" alt="Image" class="img-fluid" style="width: 100%;">
          </p>
        </div>
        <div class="col-lg-5 ml-auto">
          <h2 class="site-section-heading mb-3 font-secondary text-uppercase">JUMLAH STAFF
          </h2>
          <p class="mb-5">Ini adalah jumlah staff yang ada di BANGKESBANGPOL
          </p>

          <div class="row">
            <div class="col-lg-4">
              <div class="counter">
                <span class="caption">Karyawan A</span>
                <span class="number" data-target="22">0</span>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="counter">
                <span class="caption">Karyawan B</span>
                <span class="number" data-target="130">0</span>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="counter">
                <span class="caption">Karyawan C</span>
                <span class="number" data-target="130">0</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  </div>
  <!-- Akhir Background -->
  <?php
  include "asset/footer.php"
  ?>
  <!-- script -->
  <script>
        sessionStorage.setItem('rating','false');
    const counters = document.querySelectorAll(".number");

    counters.forEach((counter) => {
      counter.innerText = "0";
      const updateCounter = () => {
        const target = +counter.getAttribute("data-target");
        const count = +counter.innerText;
        const increment = target / 9000000;
        if (count < target) {
          counter.innerText = `${Math.ceil(count + increment)}`;
          setTimeout(updateCounter, 1);
        } else counter.innerText = target;
      };
      updateCounter();
    });
  </script>

</body>

</html>
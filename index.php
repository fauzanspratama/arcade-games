<!--Cek Login-->
<?php

session_start();
include 'koneksi.php';


if (!isset($_SESSION['username'])) {

    header('location: login.php');
    exit;

   //echo "<script> alert('$message')window.location.replace('login.php'); </script>";
} else {
    $result = mysqli_query($koneksi, "SELECT * FROM pengguna");

    $row = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Arcade Games</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/main.css" />

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/cedc500fd5.js" crossorigin="anonymous"></script>
  </head>

  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary custom-navbar" data-scroll-index="0" id="home">
      <div class="container" data-scroll-index="0">
        <a class="font-weight-bold navbar-brand" href="#">Arcade Games.</a>
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="Toggle navigation">
          <img src="./assets/bars.svg" width="40" alt="" />
        </button>
        <div class="collapse navbar-collapse" id="navbar-content">
          <ul class="navbar-nav m-auto">
            <li class="nav-item active">
              <a class="nav-link" data-scroll-nav="0" href="#home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-scroll-nav="1" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-scroll-nav="2" href="#games">Games</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-scroll-nav="3" href="#articles">Articles</a>
            </li>
          </ul>

          <ul class="navbar-nav">
            <li class="nav-item">
              <p class="navbar-brand" style="font-weight: 600;">Hello, <?= $_SESSION['nama_lengkap'] ?>!</p>
            </li>
            <li>
              <form class="form-inline">
                <button class="btn btn-light rounded-pill px-4" type="submit"><a style="text-decoration: none;" href="logout.php">Logout</a></button>
              </form>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar Ends -->

    <!-- Jumbotron -->
    <div class="jumbotron bg-primary rounded-0 py-0 mb-0">
      <div class="container">
        <div class="row justify-content-between align-items-center">
          <div class="col-lg-6 text-center text-md-left mb-5">
            <h1 class="h1 font-weight-bold text-white mb-3">Arcade Games</h1>
            <p class="h4 text-white mb-5">Happy and nostalgic games!</p>
            <a class="btn btn-warning rounded-pill px-4 btn-lg" data-scroll-goto="2" href="#" role="button">Play now</a>
          </div>
          <div class="col-lg-6">
            <div class="jumbotron__img">
              <img src="./assets/hero-img.png" class="img-fluid" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Jumbotron Ends -->

    <!-- Game Section -->
    <div style="background-color: #f4f6f8">
      <div class="container game-container py-5">
        <section>
          <!-- About us Section -->
          <h2 class="section-title" data-scroll-index="1" id="about">About us</h2>
          <span class="section-line mb-4"></span>
          <div class="section-img text-center mx-auto">
            <img src="./assets/about-img.png" class="img-fluid" alt="" />
          </div>
          <p class="text-secondary text-center w-75 mx-auto">
            <strong>Arcade Game Web Based</strong> merupakan kumpulan beberapa game casual dan klasik berbasis web yang dapat dimainkan oleh setiap kalangan melalui aplikasi browser miliknya. Dengan game sederhana ini tentunya dapat lebih
            mudah diterima oleh semua kalang baik orang tua, remaja, ataupun anak-anak. Sehingga dapat lebih memberikan sarana hiburan yang kompetitif untuk semua kalangan selama WFH.
          </p>

          <div class="row py-5" data-scroll-index="2" id="games">
            <div class="col-lg-4 text-center">
              <div class="card game-card">
                <div class="card-body">
                  <img src="./assets/memory-game.gif" class="card-img-top" alt="memory-game" />
                  <h2 class="card-title mt-4">Memory Game</h2>
                  <p class="card-text text-secondary pb-0">Memory Game adalah permainan yang mengandalkan ingatan pemain. Apabila semua gambar berhasil dicocokkan dalam waktu yang tersedia, maka permainan berhasil dimenangkan.</p>
                  <a href="./games/pages/Memory Game/index.html" class="btn btn-primary text-white btn-lg my-3">Mainkan sekarang</a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 text-center">
              <div class="card game-card">
                <div class="card-body">
                  <img src="./assets/soccer-game.gif" class="card-img-top" alt="soccer-game" />
                  <h2 class="card-title mt-4">Soccer Game</h2>
                  <p class="card-text text-secondary">Soccer Game adalah permainan bola kompetitif yang dimainkan oleh player dengan komputer. Masukan semua bola kedalam gawang sebanyak mungkin dan jadilah pemenang.</p>
                  <a href="./games/pages/Soccer/index.html" class="btn btn-info btn-lg my-3">Mainkan sekarang</a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 text-center">
              <div class="card game-card">
                <div class="card-body">
                  <img src="./assets/tic-tac-toe.gif" class="card-img-top" alt="tic-tac-toe" />
                  <h2 class="card-title mt-4">Tic-Tac-Toe Game</h2>
                  <p class="card-text text-secondary">Tic-Tac-Toe adalah permainan dua pemain antara X dan O yang bergiliran. Pemain yang berhasil menempatkan tiga tanda mereka duluan, dialah pemenang pertandingan.</p>
                  <a href="./games/pages/Tic-Tac-Toe/index.html" class="btn btn-success btn-lg my-3">Mainkan sekarang</a>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    <!-- Game Section Ends -->

    <!-- Blog Section -->
    <div style="background-color: #8d93ef" class="pb-5">
      <div class="container blog-container" data-scroll-index="3" id="articles">
        <section>
          <h2 class="section-title">New articles</h2>
          <span class="section-line mb-4"></span>
          <p class="text-light text-center w-75 mx-auto">
            Baca artikel terbaru kami dan dapatkan informasi yang menyenangkan dan informatif. Bacaan yang ada di dalam blog ini akan membahas seputar kehidupan dan tips & trick selama menjalani WFH.
          </p>

          <div class="row py-3">
          <?php
          include "inc/config.php";
          $sql=mysqli_query($koneksi,"SELECT id_artikel, nama_kategori, judul, SUBSTRING(isi,1,325) AS isi FROM artikel AS a INNER JOIN kategori AS b ON a.id_kategori=b.id_kategori");
          $row=1;
          while ($a=mysqli_fetch_array($sql)) {
          ?>
              <div class='col-lg-4 col-md-6'>
                <div class='card blog-card'>
                  <div class='card-body'>
                    <h4 class='card-title'><?php echo $a['judul']; ?></h4>
                    <p class="card-subtitle mb-3 text-muted"><?php echo $a['nama_kategori']; ?></p>
                    <p class='card-text'><?php echo $a['isi']; ?> ....</p>
                    <?php
                    echo "<a href='view.php?id=$a[id_artikel]' class='btn btn-link font-weight-bold'>Read more<i class='fas fa-arrow-right' style='margin-left: 1em'></i></a>";
                    ?>
                  </div>
                </div>
              </div>
          <?php
            if ($row%3==0) {
              ?>
                </div>
                <div class="row">
              <?php
            }
            $row++;
          };
          ?> 
          </div>

        </section>
      </div>
    </div>
    <!-- Blog Section End -->

    <!-- Footer Section -->
    <footer>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-4">
            <!-- footer about -->
            <div class="footer-about">
              <div class="footer-about__img mb-5">
                <a class="font-weight-bold" href="#">Arcade Games.</a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In cumque minima dolore!</p>
                <p>© 2021 Arcade Games</p>
              </div>
            </div>
          </div>
          <div class="footer-item col-md-4 col-lg-2">
            <p class="footer-title">Features</p>
            <ul>
              <li>
                <a data-scroll-nav="0" href="#home">Home</a>
              </li>
              <li>
                <a data-scroll-nav="1" href="#about">About</a>
              </li>
              <li>
                <a data-scroll-nav="2" href="#games">Games</a>
              </li>
              <li>
                <a data-scroll-nav="3" href="#articles">Articles</a>
              </li>
            </ul>
          </div>
          <div class="footer-item col-md-4 col-lg-2">
            <p class="footer-title">Support</p>
            <ul>
              <li>
                <a href="#">Contact us</a>
              </li>
              <li>
                <a href="#">FAQ</a>
              </li>
              <li>
                <a href="#">Privacy Policy</a>
              </li>
              <li>
                <a href="#">Getting Started</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Section Ends -->

    <!-- Back to Top Button -->
    <button type="button" data-scroll-goto="0" class="btn scroll-to-top btn-light font-weight-bold px-3">Back to Top<i class="fas fa-arrow-circle-up ml-3"></i></button>

    <!-- Javascript Tags -->
    <script type="text/javascript" src="./js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="./js/scripts.js"></script>
    <script type="text/javascript" src="./js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./js/scripts.js"></script>
    <script type="text/javascript" src="./js/scrollIt.min.js"></script>

    <script type="text/javascript">
      $(function () {
      $.scrollIt();
      });

      const scrollBtn = document.querySelector('.scroll-to-top');

      const refreshButtonVisibility = () => {
        if (document.documentElement.scrollTop <= 50) {
          scrollBtn.style.display = 'none';
         } else {
          scrollBtn.style.display = 'block';
          }
        };

      document.addEventListener('scroll', (e) => {
        refreshButtonVisibility();
      });
    </script>
  </body>
</html>

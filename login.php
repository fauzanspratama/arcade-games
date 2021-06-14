<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="generator" content="Jekyll v4.1.1" />

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/floating-labels/" />
    <link href="assets/dist/css/floating-labels.css" rel="stylesheet" />

    <style>
      @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;800&display=swap');

      html,
      body {
        height: 100%;
        background-color: #ff6961;
        font-family: 'Nunito', sans-serif;
      }

      .card {
        border-radius: 32px;
        border: none;
        box-shadow: 0px 30px 56px rgba(171, 76, 71, 0.6);
      }

      .card .card-img {
        border-radius: 32px;
      }
    </style>

    <title>Login | Arcade Games</title>
  </head>

  <body>
    <div class="container h-100 d-flex justify-content-center">
      <div class="card my-auto">
        <div class="row no-gutters align-items-center">
          <div class="col-lg-6">
            <img src="./assets/login-img.png" style="max-width: 570px" class="card-img" />
          </div>

          <div class="col-lg-6">
            <div class="card-body">
              <form class="form-signin px-4 py-3" method="POST" action="cek_login.php">
                <div class="mb-4">
                  <h1 class="mb-3 font-weight-bold">Form Login</h1>
                  <p>Silahkan masukan username dan password kamu</p>
                </div>

                <div class="form-label-group">
                  <input type="text" class="form-control rounded-pill" name="username" placeholder="Masukan username" required autofocus autocomplete="off" />
                  <label>Masukan username</label>
                </div>

                <div class="form-label-group">
                  <input type="password" class="form-control rounded-pill" name="password" placeholder="Masukan password" required autocomplete="off" />
                  <label>Masukan password</label>
                </div>

                <div class="form-label-group pb-4">
                  <select class="form-control rounded-pill" name="level">
                    <option value="#">Pilih role akun</option>
                    <option value="admin">Administrator</option>
                    <option value="user">User</option>
                  </select>
                </div>

                <button class="btn btn-lg btn-danger btn-block rounded-pill" type="submit">Sign in</button>

                <div class="container pt-4">
                  <p>Belum punya akun? Buat <a href="register.php" style="color: #ff6961; text-decoration: none">di sini.</a></p>
                  <p class="mt-4 mb-3 text-muted text-center">&copy; 2021 Arcade Games</p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>

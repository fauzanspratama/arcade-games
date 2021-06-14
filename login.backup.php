<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="generator" content="Jekyll v4.1.1">
  <title>Login</title>

  <!-- Bootstrap core CSS -->
  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/floating-labels/">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>

  <link href="assets/dist/css/floating-labels.css" rel="stylesheet">
</head>

<body>
  <form class="form-signin" method="POST" action="cek_login.php">
    <div class="text-center mb-4">
      <h1 class="h3 mb-3 font-weight-normal">Form Login</h1>
      <p>Masukkan Username dan Password anda dengan Benar!</p>
    </div>

    <div class="form-label-group">
      <input type="text" class="form-control" name="username" placeholder="Masukan username" required autofocus autocomplete="off">
      <label>Masukan username</label>
    </div>

    <div class="form-label-group">
      <input type="password" class="form-control" name="password" placeholder="Masukan password" required autocomplete="off">
      <label>Masukan password</label>
    </div>

    <div class="form-label-group">
      <select class="form-control" name="level">
	    <option value="#">---Silahkan Pilih!---</option>
        <option value="admin">Administrator</option>
        <option value="user">User</option>
      </select>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
	<p><center>Belum Punya Akun? Buat <a href="register.php" style="text-decoration: none">DISINI</a></center></p>
    <p class="mt-2 mb-3 text-muted text-center">&copy; 2021 Arcade Games</p>
  </form>
</body>

</html>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="generator" content="Jekyll v4.1.1">
  <title>Registrasi | Arcade Games</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/floating-labels/">

  <!-- Bootstrap core CSS -->
  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

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
  <!-- Custom styles for this template -->
  <link href="assets/dist/css/floating-labels.css" rel="stylesheet">
</head>

<body>
  <form class="form-signin" method="POST" action="cek_registrasi.php">
    <div class="text-center mb-4">
      <h1 class="h3 mb-3 font-weight-normal">Form Register</h1>
    </div>

    <div class="form-label-group">
      <input type="text" class="form-control" name="username" placeholder="Masukkan Username Anda!" required autofocus>
      <label>Masukkan Username Anda!</label>
    </div>

    <div class="form-label-group">
      <input type="text" class="form-control" name="nama_lengkap" placeholder="Masukkan Nama Lengkap Anda!" required autofocus>
      <label>Masukkan Nama Lengkap Anda!</label>
    </div>

    <div class="form-label-group">
      <input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda!" required>
      <label>Masukkan Password Anda!</label>
    </div>

    <div class="form-label-group">
      <select class="form-control" name="level">
	    <option value="#">---Silahkan Pilih!---</option>
        <option value="admin">Administrator</option>
        <option value="user">User</option>
      </select>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Daftar</button>
    <p class="mt-2 mb-3 text-muted text-center">&copy; 2021 Arcade Games</p>
  </form>
</body>

</html>
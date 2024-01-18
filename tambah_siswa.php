<?php
include_once("cek_login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hananan Academy</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <?php include_once('navbar.php') ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include_once('sidebar.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blank Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto mt-5">
                <div class="card">
                    <div class="card-header">
                        Biodata siswa
                    </div>
                    <div class="card-body">
                        <form action="proses_form.php" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="nisn" class="form-label">NISN</label>
                                <input type="text" name="nisn" class="form-control" id="nisn" aria-describedby="Disini ya NISN nya Dengan Benar">
                            </div>

                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" id="nama" aria-describedby="Nama jangan salah ya">
                            </div>

                            <div class="mb-3">
                                <label for="tgl" class="form-label">Tanggal Lahir</label>
                                <input type="date" name="tgl" class="form-control" id="tgl" aria-describedby="jangan Lupa Tanggal Lahir Orang">
                            </div>

                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" name="alamat" class="form-control" id="alamat" aria-describedby="Alamat Yang Real Ya">
                            </div>

                            <div class="mb-3">
                                <label for="jjg" class="form-label">Jenjang Pendidikan</label>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jjg" id="inlineRadio1" value="SD/MI">
                                    <label class="form-check-label" for="inlineRadio1">SD/MI</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jjg" id="inlineRadio2" value="SMP/MTs">
                                    <label class="form-check-label" for="inlineRadio2">SMP/MTs</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jjg" id="inlineRadio2" value="SMA/MA">
                                    <label class="form-check-label" for="inlineRadio2">SMA/MA</label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="hp" class="form-label">Nomor HP</label>
                                <input type="text" name="hp" class="form-control" id="hp" aria-describedby="Masa Lupa Nomor HP nya">
                            </div>

                            <button type="submit" class="btn btn-dark">Proses Data</button>
                            <a href="siswa.php" class="btn btn-secondary">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include_once('footer.php')?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script src="js/bootstrap.js"></script>

</body>
</html>

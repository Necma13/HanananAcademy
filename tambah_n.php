<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tambah Nilai Baru</title>

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
            <h1>Tambah Nilai baru</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Hananan Academy</li>
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
                        Tambah Nilai Baru
                    </div>
                    <div class="card-body">
                        <form action="proses_n.php" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="nisn" class="form-label">NISN Siswa</label>
                                <input type="text" name="nisn" class="form-control" id="nisn" aria-describedby="kode baru nih">
                            </div>

                            <div class="mb-3">
                                <label for="id_pel" class="form-label">ID Pelajaran</label>
                                <input type="text" name="id_pel" class="form-control" id="id_pel" aria-describedby="mapel yang sesuai kode ya">
                            </div>

                            <div class="mb-3">
                                <label for="n_quiz" class="form-label">Nilai Quiz Siswa</label>
                                <input type="text" name="n_quiz" class="form-control" id="n_quiz" aria-describedby="jumlah yang sesuai ya">
                            </div>

                            <div class="mb-3">
                                <label for="n_tugas" class="form-label">Nilai Tugas Siswa</label>
                                <input type="text" name="n_tugas" class="form-control" id="n_tugas" aria-describedby="jumlah yang sesuai ya">
                            </div>

                            <div class="mb-3">
                                <label for="n_ujian" class="form-label">Nilai Ujian Siswa</label>
                                <input type="text" name="n_ujian" class="form-control" id="n_ujian" aria-describedby="jumlah yang sesuai ya">
                            </div>

                            <button type="submit" class="btn btn-dark">Proses Data</button>
                            <a href="nilai.php" class="btn btn-secondary">Batal</a>
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
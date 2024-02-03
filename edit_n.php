<?php
include_once("koneksi.php");
$no_nilai = $_GET['no_nilai'];
$qry = "SELECT * FROM nilai WHERE no_nilai='$no_nilai'";
$data = mysqli_query($con,$qry);

$nil = mysqli_fetch_array($data);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EDIT Nilai</title>

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
            <h1>EDIT Nilai</h1>
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
                        DATA NILAI
                    </div>
                    <div class="card-body">
                        <form action="n_edit.php" method="POST">
                        <input type="hidden" name="no_nilai" value="<?php echo $nil['no_nilai'] ?>">
                        <div class="mb-3">
                                <label for="nisn" class="form-label">Nisn siswa</label>
                                <input type="text" value="<?php echo $nil['nisn'] ?>" name="nisn" class="form-control" id="nisn" aria-describedby="mapel yang sesuai kode ya">
                            </div>

                        <div class="mb-3">
                                <label for="id_pel" class="form-label">ID Pelajaran</label>
                                <input type="text" value="<?php echo $nil['id_pel'] ?>" name="id_pel" class="form-control" id="id_pel" aria-describedby="kode baru nih">
                            </div>

                            <div class="mb-3">
                                <label for="n_quiz" class="form-label">Nilai Quiz</label>
                                <input type="text" value="<?php echo $nil['n_quiz'] ?>" name="n_quiz" class="form-control" id="n_quiz" aria-describedby="jumlah yang sesuai ya">
                            </div>

                            <div class="mb-3">
                                <label for="n_tugas" class="form-label">Nilai Tugas</label>
                                <input type="text" value="<?php echo $nil['n_tugas'] ?>" name="n_tugas" class="form-control" id="n_tugas" aria-describedby="jumlah yang sesuai ya">
                            </div>

                            <div class="mb-3">
                                <label for="n_ujian" class="form-label">Nilai Ujian</label>
                                <input type="text" value="<?php echo $nil['n_ujian'] ?>" name="n_ujian" class="form-control" id="n_ujian" aria-describedby="jumlah yang sesuai ya">
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

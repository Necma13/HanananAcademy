<?php
include_once("koneksi.php");
$id = $_GET['id'];
$qry = "SELECT * FROM pelajaran WHERE id='$id'";
$data = mysqli_query($con,$qry);

$PJ = mysqli_fetch_array($data);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EDIT SISWA</title>

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
            <h1>EDIT SISWA</h1>
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
                        Biodata siswa
                    </div>
                    <div class="card-body">
                        <form action="pelajaran_edit.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $PJ['id'] ?>">
                        <div class="mb-3">
                                <label for="kode_pel" class="form-label">Kode Pelajaran</label>
                                <input type="text" value="<?php echo $PJ['kode_pel'] ?>" name="kode_pel" class="form-control" id="kode_pel" aria-describedby="kode baru nih">
                            </div>

                            <div class="mb-3">
                                <label for="mapel" class="form-label">Mata Pelajaran</label>
                                <input type="text" value="<?php echo $PJ['mapel'] ?>" name="mapel" class="form-control" id="mapel" aria-describedby="mapel yang sesuai kode ya">
                            </div>

                            <div class="mb-3">
                                <label for="jum_sesi" class="form-label">Jumlah Sesi</label>
                                <input type="text" value="<?php echo $PJ['jum_sesi'] ?>" name="jum_sesi" class="form-control" id="jum_sesi" aria-describedby="jumlah yang sesuai ya">
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

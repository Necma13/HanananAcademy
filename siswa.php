<?php
include_once("cek_login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Siswa | Hananan Academy </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Custom CSS for background color -->
  <style>
    body {
      background-color: #f8f9fa; 
    }
    .content-wrapper {
      background-color: #ffffff; 
    }
  </style>

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
            <h1>Data Siswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>nisn</th>
                    <th>nama</th>
                    <th>Detail</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <div class="col-md-12 m-auto mt-5">
                <a class="btn btn-outline-primary mb-1" href="tambah_siswa.php"><i class="fa fa-user-plus"></i> Tambah siswa</a>
                  </div>
                  <tbody>
                  <?php
                    //1. membuat koneksi
                    include_once("koneksi.php");
                    //2. membuat query untuk menampilkan seluruh data
                    $qry = "SELECT * FROM siswa";
                    //3. menjalankan query
                    $tampil = mysqli_query($con,$qry);
                    //4. menampilkan data menggunakan looping foreach
                    $nomor = 1;
                    foreach($tampil as $data){
                    ?>
                  <tr>
                    <td><?php echo $nomor++ ?></td>
                    <td><?php echo $data['nisn'] ?></td>
                    <td><?php echo $data['nama'] ?></td>
                    <td><button type="button" class="btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $data['nisn'] ?>" >Lihat</td>
                    <!-- Modal -->
                    <div class="modal fade modal-lg" id="exampleModal<?php echo $data['nisn'] ?>" tabindex="-1" aria-labelledby="#exampleModal" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Data <?php echo $data['nama'] ?></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="mb-3">
                    <label for="exampleInputEmail" class="form-label" ><b>Nisn</b></label>
                    <br>
                    <span class="fs-3"><?php echo $data['nisn']?></span>
                    </div>
                  <hr>
                  <div class="mb-3">
                    <label for="exampleInputEmail" class="form-label" ><b>Nama</b></label>
                    <br>
                    <span class="fs-3"><?php echo $data['nama']?></span>
                    </div>
                    <hr>
                  <div class="mb-3">
                    <label for="exampleInputEmail" class="form-label" ><b>Tanggal Lahir</b></label>
                    <br>
                    <span class="fs-3"><?php echo $data['tgl']?></span>
                    </div>
                    <hr>
                  <div class="mb-3">
                    <label for="exampleInputEmail" class="form-label" ><b>Alamat</b></label>
                    <br>
                    <span class="fs-3"><?php echo $data['alamat']?></span>
                    </div>
                     <hr>
                  <div class="mb-3">
                    <label for="exampleInputEmail" class="form-label" ><b>Jenjang Pendidikan</b></label>
                    <br>
                    <span class="fs-3"><?php echo $data['jjg']?></span>
                    </div>
                    <hr>
                  <div class="mb-3">
                    <label for="exampleInputEmail" class="form-label" ><b>Nomor HP</b></label>
                    <br>
                    <span class="fs-3"><?php echo $data['hp']?></span>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div> 
                    <td>
                        <a href="edit_siswa.php?nisn=<?php echo $data['nisn'] ?>" class="btn btn-sm btn-info"><i class="fa fa-pencil-alt"></i></a>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#hapus<?php echo $data['nisn'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                        <!-- Modal -->
                        <div class="modal fade" id="hapus<?php echo $data['nisn'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Apakah Data Siswa Dengan Nama <b><?php echo $data['nama'] ?></b> Ingin Dihapus?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                <a href="hapus_siswa.php?nisn=<?php echo $data['nisn'] ?>" class="btn btn-danger">Ya</a>
                            </div>
                            </div>
                        </div>
                        </div>
                    </td>
                  </tr>
                  <?php
                    }
                    ?>
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>No</th>
                    <th>nisn</th>
                    <th>nama</th>
                    <th>Detail</th>
                    <th>Aksi</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>

<?php include_once("koneksi.php"); ?>

<?php
    $sql_sis = "SELECT * FROM siswa";
    $result_sis = mysqli_query($con,$sql_sis);
    $sis = mysqli_num_rows($result_sis);
?>
<?php
$sql_pel = "SELECT * FROM pelajaran";
$result_pel = mysqli_query($con,$sql_pel);
$pel = mysqli_num_rows($result_pel);
?>
<?php
$sql_pem = "SELECT * FROM pembayaran";
$result_pem = mysqli_query($con,$sql_pem);
$pem = mysqli_num_rows($result_pem);
?>
<?php
$sql_nil= "SELECT * FROM nilai";
$result_nil = mysqli_query($con,$sql_nil);
$nil = mysqli_num_rows($result_nil);
?>
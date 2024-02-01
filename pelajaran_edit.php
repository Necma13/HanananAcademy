<?php
//include koneksi
include_once("koneksi.php");

// Menangkap seluruh nilai input
$id = $_POST['id'];
$kode = $_POST['kode'];
$mapel = $_POST['mapel'];
$jum_sesi = $_POST["jum_sesi"];

// Membuat query Update
$PE = "UPDATE pelajaran SET kode='$kode', mapel='$mapel', jum_sesi='$jum_sesi' WHERE id='$id'";

// Menjalankan query
$simpan = mysqli_query($con, $PE);

// Alihkan ke halaman
?>
<script>
    document.location="pelajaran.php";
</script>
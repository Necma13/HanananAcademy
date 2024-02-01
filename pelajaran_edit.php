<?php
//include koneksi
include_once("koneksi.php");
// menagambil seluruh nilai input 
$id = $_POST['id'];
$kode = $_POST['kode'];
$mapel = $_POST['mapel'];
$jum_sesi = $_POST["jum_sesi"];

//membuat query Insert
$PE ="UPDATE pelajaran SET kode='$kode',mapel='$mapel', jum_sesi='$jum_sesi', WHERE id='$id'";

//menajalankan query
$simpan = mysqli_query($con,$PE);

//alihkan ke halaman 
?>
<script>
    document.location="pelajaran.php";
</script>
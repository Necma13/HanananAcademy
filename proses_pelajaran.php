<?php
// 1. membuat koneksi
include_once("koneksi.php");

//2. mengambil seluruh nilai input dan dimasukkan ke variabel
$kode  = $_POST['kode_pel'];
$mapel = $_POST['mapel'];
$jum_sesi = $_POST['jum_sesi'];

//3. membuat query INSERT
$qry = "INSERT INTO pelajaran (kode_pel, mapel, jum_sesi) VALUES ('$kode','$mapel','$jum_sesi')";

//4. menjalankan query
$simpan = mysqli_query($con,$qry);

//5. alihkan ke halaman index.php
?>
<script>
    document.location="pelajaran.php";
</script>
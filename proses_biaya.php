<?php
// 1. membuat koneksi
include_once("koneksi.php");

//2. mengambil seluruh nilai input dan dimasukkan ke variabel
$nofak  = $_POST['nofak'];
$nisn = $_POST['nisn'];
$tgl = $_POST['tgl_b'];
$jum = $_POST['jum_b'];
$bukti = $_POST['bukti_b'];

//3. membuat query INSERT
$qry = "INSERT INTO pembayaran (nofak, nisn, tgl_b, jum_b, bukti_b ) VALUES ('$nofak','$nisn','$tgl','$jum','$bukti')";

//4. menjalankan query
$simpan = mysqli_query($con,$qry);

//5. alihkan ke halaman index.php
?>
<script>
    document.location="pembayaran.php";
</script>
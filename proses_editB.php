<?php
// 1. membuat koneksi
include_once("koneksi.php");

//2. mengambil seluruh nilai input dan dimasukkan ke variabel
$id = $_POST['id'];
$nofak = $_POST['nofak'];
$nisn  = $_POST['nisn'];
$tgl = $_POST['tgl_b'];
$jum = $_POST['jum_b'];
$bukti_b =$_POST['bukti_b'];
//3. membuat query INSERT
$qry = "UPDATE pembayaran SET  nofak='$nofak', nisn='$nisn',
tgl_b='$tgl', jum_b='$jum', bukti_b='$bukti_b' WHERE id='$id'";

//4. menjalankan query
$simpan = mysqli_query($con,$qry);

//5. alihkan ke halaman index.php
?>
<script>
    document.location="pembayaran.php";
</script>
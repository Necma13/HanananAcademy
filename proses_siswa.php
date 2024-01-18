<?php
// 1. membuat koneksi
include_once("koneksi.php");

//2. mengambil seluruh nilai input dan dimasukkan ke variabel
$nisn  = $_POST['nisn'];
$nama  = $_POST['nama'];
$tanggal  = $_POST['tgl'];
$alamat  = $_POST['alamat'];
$jenjang = $_POST['jjg'];
$hp  = $_POST['hp'];

//3. membuat query INSERT
$qry = "INSERT INTO siswa (nisn, nama, tgl, alamat, jjg, hp) VALUES ('$nisn','$nama','$tanggal',
'$alamat','$jenjang','$hp')";

//4. menjalankan query
$simpan = mysqli_query($con,$qry);

//5. alihkan ke halaman index.php
?>
<script>
    document.location="siswa.php";
</script>
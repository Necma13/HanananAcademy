<?php
// 1. membuat koneksi
include_once("koneksi.php");

//2. mengambil seluruh nilai input dan dimasukkan ke variabel
$nisn  = $_POST['nisn'];
$nama  = $_POST['nama'];
$tgl  = $_POST['tgl'];
$alamat  = $_POST['alamat'];
$jjg = $_POST['jjg'];
$hp  = $_POST['hp'];

//3. membuat query INSERT
$qry = "UPDATE siswa SET nama='$nama', tgl='$tgl', alamat='$alamat',
jjg='$jjg', hp='$hp' WHERE nisn='$nisn'";

//4. menjalankan query
$simpan = mysqli_query($con,$qry);

//5. alihkan ke halaman index.php
?>
<script>
    document.location="siswa.php";
</script>
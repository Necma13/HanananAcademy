<?php
// 1. membuat koneksi
include_once("koneksi.php");

//2. mengambil seluruh nilai input dan dimasukkan ke variabel
$no = $_POST['no_nilai'];
$nisn = $_POST['nisn'];
$id = $_POST['id_pel'];
$quiz = $_POST['n_quiz'];
$tugas =$_POST['n_tugas'];
$ujian=$_POST['n_ujian'];
//3. membuat query INSERT
$qry = "UPDATE nilai SET  nisn='$nisn', id_pel='$id',
n_quiz='$quiz', n_tugas='$tugas', n_ujian='$ujian' WHERE no_nilai='$no'";

//4. menjalankan query
$simpan = mysqli_query($con,$qry);

//5. alihkan ke halaman index.php
?>
<script>
    document.location="nilai.php";
</script>
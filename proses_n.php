<?php
// 1. membuat koneksi
include_once("koneksi.php");

//2. mengambil seluruh nilai input dan dimasukkan ke variabel
$nisn = $_POST['nisn'];
$id  = $_POST['id_pel'];
$quiz = $_POST['n_quiz'];
$tugas = $_POST['n_tugas'];
$ujian = $_POST['n_ujian'];

//3. membuat query INSERT
$qry = "INSERT INTO nilai (nisn, id_pel, n_quiz, n_tugas, n_ujian ) VALUES ('$nisn','$id ','$quiz','$tugas','$ujian')";

//4. menjalankan query
$simpan = mysqli_query($con,$qry);

//5. alihkan ke halaman index.php
?>
<script>
    document.location="nilai.php";
</script>
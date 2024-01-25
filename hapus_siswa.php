<?php
// 1. membuat koneksi
include_once("koneksi.php");

// 2. mengambil id dari URL
$nisn = $_GET['nisn'];

// 3. membuat query delete
$qry = "DELETE FROM siswa WHERE nisn='$nisn'";

// 4. menjalankan query
$simpan = mysqli_query($con,$qry);

//5. redirect ke index
?>
<script>
    document.location="siswa.php";
</script>

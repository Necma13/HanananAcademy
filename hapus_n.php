<?php
// 1. membuat koneksi
include_once("koneksi.php");

// 2. mengambil id dari URL
$no = $_GET['no_nilai'];

// 3. membuat query delete
$qry = "DELETE FROM nilai WHERE no_nilai='$no'";

// 4. menjalankan query
$simpan = mysqli_query($con,$qry);

//5. redirect ke index
?>
<script>
    document.location="nilai.php";
</script>
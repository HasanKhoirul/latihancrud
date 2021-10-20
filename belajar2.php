<?php
//cek apakah ada data di GET

if( !isset($_GET["Nama"]) ||
!isset($_GET["umur"]) ||
!isset($_GET["hobi"])){
    // fungsinya buat mencegah masuk url untuk mengakses halaman ini
    header("Location:latihan1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Siswa</title>
</head>
<body>

<ul>
    <li><?= $_GET["Nama"];?></li>
    <li><?= $_GET["umur"];?></li>
    <li><?= $_GET["hobi"];?></li>
</ul>

<a href ="belajar2.php">kembali ke Menu</a>
    
</body>
</html>
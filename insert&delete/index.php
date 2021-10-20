<?php
require 'function.php';
$siswa = query("SELECT * FROM siswa");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Halaman admin</title>
</head>
<body>
<div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DAFTAR SISWA
            </div>
            <div class="card-body">
              <a href="tambah-siswa.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA SISWA</a>
              <table class="table table-bordered" id="myTable">

    <table border="1" cellpadding= "10" cellspacing="0">
        <tr>
            <td>No.</td>
            <td>Aksi</td>
            <td>Gambar</td>
            <td>NIM</td>
            <td>Nama</td>
            <td>Email</td>
            <td>Jurusan</td>
        </tr>
        <?php $i = 1;?>
        <?php foreach ($siswa as $sws) :?>
        <tr>
            <td><?= $i?></td>
            <td class="text-center">
                <a href="ubah.php?id=<?php echo $row['id_siswa'] ?>" class="btn btn-sm btn-primary">UBAH</a>
                <a href="hapus.php?id=<?php echo $row['id_siswa'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
             </td>
            <td><img src="img/<?= $sws["gamabar"]?>" alt="" width="100"></td>
            <td><?= $sws["nim"] ?></td>
            <td><?= $sws ["nama"] ?></td>
            <td><?= $sws ["email"] ?></td>
            <td><?=$sws ["jurusan"] ?></td>
        </tr>
        
         <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
         <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
          <script>
        <?php $i++ ?>
        <?php endforeach; ?>
    </table>
</body>

</html>
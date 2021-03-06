<?php 
require 'function.php';
$siswa = query("SELECT * FROM siswa");

//tombol cari ditekan

if (isset($_POST["cari"])) {
    $siswa = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- boostrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Halaman Admin</title>
</head>

<body>
<div class="container">
    <div class="bagian-atas text-center">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
    <h1> DAFTAR SISWA </h1>
    <a class="btn btn-primary my-3" href="tambah.php" style="border-radius: 40px;">Tambah data siswa</a>
    <br>
    <form action="" method="post">
        <div class="masukan my-2"> 
        <input type="text" name="keyword" id="" size="50" autofocus
        placeholder="Massukan Keyword pencarian!" a
        utocomplete="off" class="form-control border border-success" style="width: 400px; border-radius: 40px;">
        </div>
        <div class="tombol my-2">
        <button class="btn btn-success" type="submit" name="cari" style="border-radius: 40px;"> Cari! </button>
        </div>
      </form>
      </div>
      <div class="col-4"></div>
      </div>
    </div>

     <div class="bagian-bawah">
      <br>
      <table class="table">
        <tr>
            <td>No.</td>
            <td>aksi</td>
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
                <td>
                    <a href="ubah.php" class="btn btn-warning">ubah</a>
                    <a href="hapus.php?id=<?= $sws["id"]?>"
                    onclick="return confirm('yakin mau dihapus?');" 
                    class="btn btn-danger">hapus</a>
                </td>
                <td><img src="img/<?= $sws["gamabar"]?>" alt="" width="100"></td>
                <td><?= $sws["nim"]?></td>
                <td><?= $sws["nama"]?></td>
                <td><?= $sws["email"]?></td>
                <td><?= $sws["jurusan"]?></td>
            </tr>
            <?php $i++ ?>
            <?php endforeach; ?>
            </div> 
    </table>
</div>
    <!--boostrap javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
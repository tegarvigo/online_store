<?php
include "vendor/konek.php";
session_start();
if (isset($_SESSION["login"])) {
 







?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>



  <?php
        $data_siswa = mysqli_query($kon,"SELECT * FROM tb_siswa WHERE NO=".$_GET['id']);
        foreach ($data_siswa as $key){
          $id =$key ['NO'];
          $nama = $key ['NAMA'];
          $kelas =$key ['KELAS'];
          $jurusan = $key ['JURUSAN'];
          $alamat =$key ['ALAMAT'];
          $jk = $key ['JK'];
        }


   ?>

   <h1> 
      <?= $nama;?>
   </h1>

<h1 style="text-align: center; margin-top: 100px;">EDIT</h1><br>

<!-- form -->
  <form class="row g-3" action="vendor/sistem.php?id=<?=$id;?>" method="post" style="text-align: center;">
    <input type="hidden" name="form" value="form2">
    <div class="col-sm-2 mx-3">
      <label for="inputPassword4" class="form-label">Nama</label>
      <input type="text" value="<?= $nama;?>" class="form-control" id="inputPassword4" name="Enamadiweb">
    </div>
    <div class="col-sm-2 mx-3">
      <label for="inputAddress" class="form-label">Kelas</label>
      <input type="text"  value="<?= $kelas;?>"class="form-control" id="inputAddress" placeholder="" name="Ekelasdiweb">
    </div>
    <div class="col-sm-2 mx-3">
      <label for="inputAddress" class="form-label">Jurusan</label>
      <input type="text"  value="<?= $jurusan;?>"class="form-control" id="inputAddress" placeholder="" name="Ejurusandiweb">
    </div>
    <div class="col-sm-2 mx-3">
      <label for="inputAddress" class="form-label">Alamat</label>
      <input type="text"  value="<?= $alamat;?>"class="form-control" id="inputAddress" placeholder="" name="Ealamatdiweb">
    </div>
    <div class="col-sm-2 mx-3">
      <label for="inputAddress" class="form-label">Jenis Kelamin</label>
      <input type="text"  value="<?= $jk;?>"class="form-control" id="inputAddress" placeholder="" name="Ejkdiweb">
    </div>
    <div class="col-12 mb-5">
    <!-- <div id="liveAlertPlaceholder"></div> -->
    <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </form>
<!-- end form -->

</body>
</html>
<?php 

}else{
  header("location: login.php");
  exit();
 }
?>
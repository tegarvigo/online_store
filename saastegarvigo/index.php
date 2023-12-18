<?php 
@session_start();
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

<h1>INPUT DATA SISWA</h1><br>

<!-- form -->
  <form class="row g-3" action="vendor/sistem.php" method="post">
    <input type="hidden" name="form" value="form1">
    <div class="col-sm-2">
      <label for="inputPassword4" class="form-label">Nama</label>
      <input type="text" class="form-control" id="inputPassword4" name="namadiweb">
    </div>
    <div class="col-sm-2">
      <label for="inputAddress" class="form-label">Kelas</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="" name="kelasdiweb">
    </div>
    <div class="col-sm-2">
      <label for="inputAddress" class="form-label">Jurusan</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="" name="jurusandiweb">
    </div>
    <div class="col-sm-2">
      <label for="inputAddress" class="form-label">Alamat</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="" name="alamatdiweb">
    </div>
    <div class="col-sm-2">
      <label for="inputAddress" class="form-label">Jenis Kelamin</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="" name="jkdiweb">
    </div>
    <div class="col-12 mb-5">
    <!-- <div id="liveAlertPlaceholder"></div> -->
    <button type="submit" class="btn btn-primary">Tambah</button>

    </div>
  </form>
<!-- end form -->
 <?php
include "vendor/konek.php";
?>

<table border="1px" cellspacing="0px" cellpadding="15px">

<tr style="background-color: orange;">
            <td>No</td>
            <td>Nama</td>
            <td>Kelas</td>
            <td>Jurusan</td>
            <td>Alamat</td>
            <td>JK</td>
            <td>Aksi</td>

            
        </tr>

<?php
$sql = "SELECT * FROM tb_siswa";

$ambil = mysqli_query($kon, $sql);

$no_urut = 0;

foreach ($ambil as $key) {

  $no_urut ++;
  $id = $key['NO'];
  $nama = $key['NAMA'];
  $kelas = $key['KELAS'];
  $js = $key['JURUSAN'];
  $al = $key['ALAMAT'];
  $jk = $key['JK'];

?>

        <tr>
            <td><?= $no_urut; ?></td>
            <td><?= $nama; ?></td>
            <td><?= $kelas; ?></td>
            <td><?= $js; ?></td>
            <td><?= $al; ?></td>
            <td><?= $jk; ?></td>
            <td><button type="button" class="btn btn-primary"><a href="edit.php?id=<?=$id?>" style="color: aliceblue; text-decoration: none;">edit</button>
              <button type="button" class="btn btn-primary"><a href="delete.php?del=<?=$id?>" style="color: aliceblue; text-decoration: none;">delete</button></a>

        </tr>

<?php }; ?>
</table>


<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script>
  const alertPlaceholder = document.getElementById('liveAlertPlaceholder')

const alert = (message, type) => {
  const wrapper = document.createElement('div')
  wrapper.innerHTML = [
    `<div class="alert alert-${type} alert-dismissible" role="alert">`,
    `   <div>${message}</div>`,
    '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
    '</div>'
  ].join('')

  alertPlaceholder.append(wrapper)
}

const alertTrigger = document.getElementById('liveAlertBtn')
if (alertTrigger) {
  alertTrigger.addEventListener('click', () => {
    alert('Nice, you triggered this alert message!', 'success')
  })
}
</script> -->
</body>
</html>
<?php 

}else{
  header("location: login.php");
  exit();
 }
?>
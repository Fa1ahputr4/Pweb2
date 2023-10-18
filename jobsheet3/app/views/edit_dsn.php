<?php
include '../../public/bootstrap.php';
include '../classes/databases.php';
$db=new database();
?>

<div class="px-3 py-3">
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <div class="container-fluid">
    <a class="navbar-brand" href="navbar.php">SIAKAD</a>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="tampil_dosen.php">Dosen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="tampil_mhs.php">Mahasiswa</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="px-4 py-3">
<h3>Edit Data Dosen</h3>
<div class="card px-3 py-3" style="width: 30%;">
<form action="proses_dsn.php?aksi=update" method="post">
    <?php
    foreach($db->edit_dsn($_GET['nipd']) as $d){
    ?>
    <table class="table table-borderless">
        <tr>
            <td>NIPD</td>
            <td><input type="text" name="nipd" value="<?php echo $d['nipd']?>"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?php echo $d['nama']?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>
                <textarea name="alamat" id="" cols="30" rows="5"><?php echo $d['alamat']?></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="simpan" class="btn btn-success"></td>
        </tr>
    </table>
    <?php
    }
    ?>
</form> 
</div>
</div>
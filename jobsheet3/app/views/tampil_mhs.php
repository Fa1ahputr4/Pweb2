

<?php
include '../../public/navbar.php';
include '../classes/databases.php';
$db=new database;
?>

<div class="px-3 py-0">
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SIAKAD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
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

<h3>Data Mahasiswa</h3>
<a href="input_mhs.php" class="btn btn-primary">Tambah Mahasiswa</a>
<table border="1" class="table table-bordered">
    <tr class="table-secondary">
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
    <?php
    $no=1;
    foreach($db->tampil_mahasiswa() as $x){
    ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $x['nim']?></td>
        <td><?php echo $x['nama']?></td>
        <td><?php echo $x['alamat']?></td>
        <td>
            <a href="edit_mhs.php?nim=<?php echo $x['nim'];?>&aksi=edit" class="btn btn-warning">Edit</a>
            <a href="proses_mhs.php?nim=<?php echo $x['nim'];?>&aksi=hapus" class="btn btn-danger">Hapus </a>

        </td>
    </tr>
    <?php
    }
    ?>

</table>  
</div>
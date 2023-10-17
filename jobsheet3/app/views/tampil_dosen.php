<?php
include '../../public/navbar.php';
include '../classes/databases.php';
$db=new database;
?>
<div class="px-3 py-0">
<nav class="navbar navbar-expand-lg bg-body-secondary">
  <div class="container-fluid">
    <a class="navbar-brand" href="navbar.php">SIAKAD</a>
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

<h3>Data Dosen</h3>
<a href="input_dsn.php" class="btn btn-primary">Tambah Dosen</a>
<table border="1" class="table table-bordered">
    <tr class="table-secondary">
        <th>No</th>
        <th>NIPD</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
    <?php
    $no=1;
    foreach($db->tampil_dosen() as $x){
    ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $x['nipd']?></td>
        <td><?php echo $x['nama']?></td>
        <td><?php echo $x['alamat']?></td>
        <td>
            <a href="edit_dsn.php?nipd=<?php echo $x['nipd'];?>&aksi=edit" class="btn btn-warning">Edit</a>
            <a href="proses_dsn.php?nipd=<?php echo $x['nipd'];?>&aksi=hapus" class="btn btn-danger">Hapus </a>

        </td>
    </tr>
    <?php
    }
    ?>

</table>  </div>
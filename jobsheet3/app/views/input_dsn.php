<?php
include '../../public/navbar.php';
?>


<nav class="navbar navbar-expand-lg bg-body-secondary">
  <div class="container-fluid">
    <a class="navbar-brand" href="navbar.php">Beranda</a>
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


<div class="px-4 py-3">
<h3>Tambah Data Dosen</h3>
<div class="card px-3 py-3" style="width: 30%;">
<form action="proses_dsn.php?aksi=tambah" method="post">

    <table class="table table-borderless">
        <tr>
            <td>NIPD</td>
            <td><input type="text" name="nipd"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>
                <textarea name="alamat" id="" cols="30" rows="5"></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" class="btn btn-success"></td>
        </tr>
    </table>
</form> 
</div>
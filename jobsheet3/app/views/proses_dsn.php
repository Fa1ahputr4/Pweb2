<?php
include '../classes/databases.php';
$db=new database();

$aksi=$_GET['aksi'];
if ($aksi=="tambah"){
    $db->tambah_dsn($_POST['nipd'],$_POST['nama'],$_POST['alamat']);
    header("location:tampil_dosen.php?status=tambah");
}elseif ($aksi=="update"){
    $db->update_dsn($_POST['nipd'],$_POST['nama'],$_POST['alamat']);
    header("location:tampil_dosen.php?status=edit");
}elseif ($aksi=="hapus"){
    $db->hapus_dsn($_GET['nipd']);
    header("location:tampil_dosen.php?status=hapus");

}
?>
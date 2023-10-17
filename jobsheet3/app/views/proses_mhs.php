<?php
include '../classes/databases.php';
$db=new database();

$aksi=$_GET['aksi'];
if ($aksi=="tambah"){
    $db->tambah_mhs($_POST['nim'],$_POST['nama'],$_POST['alamat']);
    header("location:tampil_mhs.php");
}elseif ($aksi=="update"){
    $db->update($_POST['nim'],$_POST['nama'],$_POST['alamat']   );
    header("location:tampil_mhs.php");
}elseif ($aksi=="hapus"){
    $db->hapus($_GET['nim']);
    header("location:tampil_mhs.php");

}
?>
<?php
class database{
    var $host="localhost";
    var $username="root";
    var $password="";
    var $db="akademik";
    var $koneksi;

    function __construct(){
        $this->koneksi = mysqli_connect($this->host,$this->username,$this->password,$this->db);
    }

    function tampil_mahasiswa(){
        $data=mysqli_query($this->koneksi, "select * from mahasiswa");
        while($d=mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }

    function tambah_mhs($nim,$nama,$alamat){
        mysqli_query($this->koneksi, "insert into mahasiswa (nim,nama,alamat) values('$nim','$nama','$alamat')");
    }

    function edit($nim){
        $data = mysqli_query($this->koneksi,"select * from mahasiswa where nim='$nim'");
        while($d=mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }

    function update($nim, $nama, $alamat){
        mysqli_query($this->koneksi,"update mahasiswa set nim='$nim', nama='$nama',alamat='$alamat' where nim='$nim'");
    }

    function hapus($nim){
        mysqli_query($this->koneksi,"delete from mahasiswa where nim='$nim'");
    }

    //================================================================================================================================

    function tampil_dosen(){
        $data=mysqli_query($this->koneksi, "select * from dosen");
        while($d=mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }

    function tambah_dsn($nipd,$nama,$alamat){
        mysqli_query($this->koneksi, "insert into dosen (nipd,nama,alamat) values('$nipd','$nama','$alamat')");
    }

    function edit_dsn($nipd){
        $data = mysqli_query($this->koneksi,"select * from dosen where nipd='$nipd'");
        while($d=mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }

    function update_dsn($nipd, $nama, $alamat){
        mysqli_query($this->koneksi,"update dosen set nipd='$nipd', nama='$nama',alamat='$alamat' where nipd='$nipd'");
    }

    function hapus_dsn($nipd){
        mysqli_query($this->koneksi,"delete from dosen where nipd='$nipd'");
    }

}
?>
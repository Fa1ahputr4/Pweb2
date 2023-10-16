<?php

class mahasiswa{
    var $nim;
    var $nama;
    var $alamat;

    function tampil_nama(){
        return "Nama Saya Adalah Falah <br>";
    }

    function tampil_alamat(){

    }
}

class dosen{
    var $nama;
    var $nipd;
    var $prodi;

    function tampil_nama(){
        return "Nama Saya adalah Dika";
    }
}

//membuat objek mahasiswa 
$nama_mahasiswa = new mahasiswa();
//menampilkan method tampil_nama pada class mahasiswa
echo $nama_mahasiswa->tampil_nama();

//membuat objek dosen
$nama_dosen = new dosen();
//menampilkan method tampil_nama pada class dosen
echo $nama_dosen->tampil_nama();

?>
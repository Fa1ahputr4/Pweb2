<?php

class mahasiswa{
    var $nim;
    var $nama;
    var $alamat;

    function __construct(){
        echo "Saya Mahasiswa Teknik Informatika <br>";
    }

    function __destruct(){
        echo "Politeknik Negeri Cilacap";
    }

    function tampil_nama(){
        return "Nama Saya Adalah Falah <br>";
    }

    function tampil_mahasiswa(){
        return "Tidak akan menjadi joki atau menggunakan joki sampai lulus kuliah <br> ";
    }

    function tampil_alamat(){

    }
}


//membuat objek mahasiswa 
$nama_mahasiswa = new mahasiswa();
//menampilkan method tampil_nama pada class mahasiswa
echo $nama_mahasiswa->tampil_nama();
echo $nama_mahasiswa->tampil_mahasiswa();

?>
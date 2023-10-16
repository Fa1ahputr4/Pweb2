<?php
//membuat class mahasiswa
class mahasiswa{
    //public property
    public $nama;
    //private property
    private $nim = "220302084";

    //public method
    public function tampilkan_nama(){
        return "Nama Saya Falah <br>";
    }

    //protected method
    function tampilkan_nim(){
        return "NIM saya ". $this->nim;
    }

}
//instansi objek mahasiswa kedalam variabel mahasiswa
$mahasiswa = new mahasiswa();
$nim = new mahasiswa();
//memanggil method tamplkan_nama
echo $mahasiswa->tampilkan_nama();
echo $nim->tampilkan_nim();
?>
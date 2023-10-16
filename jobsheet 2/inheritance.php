<?php
//membuat class manusia
class manusia {
    public $nama_saya;
    private $usia = "19 tahun";
    protected $jenis_kelamin;

    //membuat method panggil nama
    function panggil_nama($saya){
        $this->nama_saya = $saya;
    }

    //method untuk memanggin usia
    function usia(){
        return "Usia saya adalah : ". $this->usia;
    }

    //method untuk memanggil jenis_kelamin
    function jk(){
        return "Jenis kelamin saya adalah : Laki-Laki ";
    }
}

//membuat class turunan dari class manusia
class mahasiswa extends manusia{
    public $nama_mahasiswa;
    function panggil_mahasiswa($mahasiswa){
        $this->nama_mahasiswa = $mahasiswa;
    }
}

//instansiasi class mahasiswa
$informatika=new mahasiswa();
$informatika->panggil_nama("Falah Putra");
$informatika->panggil_mahasiswa("Ardika");
$informatika->usia();
$informatika->jk();

//menampilkan isi property
echo "Nama Depan Saya : ". $informatika->nama_saya. "<br>";
echo "Nama Belakang Saya : ". $informatika->nama_mahasiswa. "<br>";
echo $informatika->usia(). "<br>";
echo $informatika->jk();
?>
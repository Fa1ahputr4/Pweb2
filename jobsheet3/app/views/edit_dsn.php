<?php
include '../classes/databases.php';
$db=new database();
?>

<h3>Edit Data Dosen</h3>
<form action="proses_dsn.php?aksi=update" method="post">
    <?php
    foreach($db->edit_dsn($_GET['nipd']) as $d){
    ?>
    <table class="table table-borderless">
        <tr>
            <td>NIPD</td>
            <td><input type="text" name="nipd" value="<?php echo $d['nipd']?>"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?php echo $d['nama']?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>
                <textarea name="alamat" id="" cols="30" rows="5"><?php echo $d['alamat']?></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="simpan"></td>
        </tr>
    </table>
    <?php
    }
    ?>
</form> 
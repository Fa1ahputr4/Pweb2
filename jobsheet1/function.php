<html>  
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hallo</title>
    </head>
    <body>
        <form method="post">
            <h4>Menghitung Luas Persegi Panjang</h4>
            Masukan Panjang : <br>
            <input type="number" name="panjang"><br>
            Masukan Lebar : <br>
            <input type="number" name="lebar"><br>
            Masukan Jari-Jari : <br>
            <input type="number" name="jari"><br>
            <input type="submit" value="Hasil"><br>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $p = $_POST["panjang"];
            $l = $_POST["lebar"];
            $r = $_POST["jari"];
                function persegi_panjang($p, $l){
                    return $p * $l;
                }
                function lingkaran($r){
                    return 3.14 * $r * $r;
                }
                echo "Luas Persegi Panjang = ". persegi_panjang($p, $l). "</br>";
                echo "Luas Lingkaran = ". lingkaran($r). "</br>";
    }
        ?>
        
    </body>
    </html>
</html>
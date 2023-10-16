<html>  
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Branching</title>
    </head>
    <body>
    <h1>Cek Angka Negatif, Positif, atau Nol</h1>
    <form method="post">
        Masukkan angka: <input type="number" name="angka">
        <input type="submit" value="Cek">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $x = $_POST["angka"];

       
            if ($x < 0) {
                echo "Angka $x adalah negatif.";
            } elseif ($x > 0) {
                echo "Angka $x adalah positif.";
            } else {
                echo "Angka $x adalah nol.";
            }
    }
    ?>
    </body>
    </html>
</html>
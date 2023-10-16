<html>  
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>String Manipulation</title>
    </head>
    <body>
        <?php
        $x = "Selamat belajar PHP!";
        $date = "02-05-2023";
        echo "$x </br>";
        echo strtoupper($x). "<br>";
        echo strtolower($x). "<br>";
        echo substr($x, 0, 7). "</br>";
        echo substr($date, 6, 4);


        ?>
    </body>
    </html>
</html>
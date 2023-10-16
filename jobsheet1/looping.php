<html>  
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hallo</title>
    </head>
    <body>
    <?php
    echo "Perulangan FOR bilangan genap dari 1 hingga 10 </br>";
        for ($x = 2; $x <= 10; $x += 2) {
        echo $x . "<br>";
     }

     echo "Perulangan WHILE bilangan ganjil dari 1 hingga 10 </br>";
     $y=1;
     while ($y<=10){
        echo "$y <br>";
         $y+=2;
     }

     echo "Perulangan DO WHILE bilangan prima dari 1 hingga 20 </br>";
     $z = 1;

do {
    $prima = true;

    if ($z <= 1) {
        $prima = false;
    } elseif ($z <= 3) {
        $prima = true;
    } elseif ($z % 2 == 0) {
        $prima = false;
    } else {
        for ($i = 3; $i <= sqrt($z); $i += 2) {
            if ($z % $i == 0) {
                $prima = false;
                break;
            }
        }
    }

    if ($prima) {
        echo "$z </br>";
    }
    $z++;
} while ($z <= 20);


    ?>
    </body>
    </html>
</html>
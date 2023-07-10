<?php
    //Recupero i file contenenti le classi
    require_once __DIR__."/Models/Prodotto.php";
    require_once __DIR__."/Models/Cibo.php";
    require_once __DIR__."/Models/Gioco.php";
    require_once __DIR__."/Models/Utilita.php";

    //Istanze della classe prodotto
    $cibo = new Cibo ('https://picsum.photos/200/300','Canin','Gatto',13, 10,'pollo');

    $giochi = new Gioco ('https://picsum.photos/200/300','Canin','Gatto',13, 'sasas',10);

    $utilita = new Gioco ('https://picsum.photos/200/300','Canin','Gatto',13, 'legno',10);


    var_dump($cibo, $giochi,$utilita );

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolshop</title>
</head>
<body>
    
</body>
</html>
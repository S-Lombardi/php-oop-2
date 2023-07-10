<?php
    //Recupero i file contenenti le classi
    require_once __DIR__."/Models/Prodotto.php";

    //Creo la prima istanza della classe Prodotto
    $prodotto = new Prodotto('https://picsum.photos/200/300','Royal Canin','Cane', 12);

    var_dump($prodotto);

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
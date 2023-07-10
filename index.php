<?php
    //Recupero i file contenenti le classi
    require_once __DIR__."/Models/Prodotto.php";
    require_once __DIR__."/Models/Cibo.php";
    require_once __DIR__."/Models/Gioco.php";
    require_once __DIR__."/Models/Utilita.php";

    //Istanze della classe Prodotto
    $cibo = new Cibo ('https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg','Royal Canin Mini Adult','Cane', 43.99, 545, 'prosciutto, riso');
    $cibo1 = new Cibo ('https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg','Almo Nature Holistic Maintenance Medium Large Tonno e Riso','Cane', 44.99, 600, 'manzo, cereali');
    $cibo2 = new Cibo ('https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg','Almo Nature Cat Daily Lattina','Gatto', 34.99, 400, 'tonno, pollo, prosciutto');
    $cibo3 = new Cibo ('https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg','Mangime per Pesci Guppy in Fiocchi','Psce', 2.95, 30, 'Pesci, Cereali, Lieviti, Alghe');

    $giochi = new Gioco ('https://picsum.photos/200/300','Canin','Gatto',13, 'sasas',10);

    $utilita = new Gioco ('https://picsum.photos/200/300','Canin','Gatto',13, 'legno',10);
    
    //Array per stampare le info con un ciclo
    $cibi=[
        $cibo,
        $cibo1,
        $cibo2,
        $cibo3,
    ];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Boolshop</title>
</head>
<body>
    <!-- HEADER -->
    <header class="text-center mb-5">
        <h1>Boolshop</h1>
    </header>
    <!-- FINE HEADER -->
    <!-- CARD Prodotti -->
    <div class="container">
        <div class="row">
            <!-- CICLO CIBO -->
            <?php foreach($cibi as $cibo){ ?>
                <div class="col-4">
                    <div class="card">
                        <!-- Immagine prodotto -->
                        <img src=<?php  echo $cibo->getImg(); ?> alt="" class=" ">
                        <!-- Info prodotto-->
                        <div class="card-body d-flex">
                            <h4><?php  echo $cibo->getNome() ?></h4>
                        </div>
                    </div>
                </div>

            <?php } ?>
        </div>



    </div>

    <!-- FINE CARD Prodotti -->


</body>
</html>
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
    $cibo3 = new Cibo ('https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg','Mangime per Pesci Guppy in Fiocchi','Pesce', 2.95, 30, 'Pesci, Cereali, Lieviti, Alghe');
    
    $utilita = new Utilita ('https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg','Voliera Wilma in Legno','Uccello', 184.99, 'Legno', 'M: L 83 x P67 x H 153 cm');
    $utilita1 = new Utilita ('https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg','Cartucce Filtranti per Filtro EasyCrystal','Pesce', 2.29, 'Materiale espanso', 'ND');

    $gioco = new Gioco ('https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg','Kong Classic','Cane', 13.49, 'Galleggia e rimbalzaa', '8,5 cm x 10cm');
    $gioco1 = new Gioco ('https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg','Topini di peluche Trixie','Gatto', 4.99, 'Morbido con codina in corda', '8,5 cm x 10cm');
   
    
    //Array per stampare le info con un ciclo
    $array_cibo=[
        $cibo,
        $cibo1,
        $cibo2,
        $cibo3,
    ];

    $array_utilita=[
        $utilita,
        $utilita1,
    ];

    $array_gioco=[
        $gioco,
        $gioco1,
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

            <!--PRODOTTI CIBO -->
            <?php foreach($array_cibo as $cibo){ ?>
                <div class="col-4">
                    <div class="card mb-3">

                        <!-- Immagine prodotto -->
                        <img src=<?php  echo $cibo->getImg(); ?> alt="" class=" ">
                        
                        <!-- Info prodotto-->
                        <div class="card-body ">
                            <h4>
                                <?php  echo $cibo->getNome() ?>
                            </h4>
                            <p>
                                <?php  echo $cibo->getAnimale() ?>
                            </p>
                            <p>
                                Prezzo: &euro; <?php  echo  $cibo->getPrezzo() ?>
                            </p>
                            <p>
                                Peso neto: <?php  echo $cibo->getPeso() ?>g
                            </p>
                            <p>
                                Ingredinti: <?php  echo $cibo->getIngredienti() ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!--FINE PRODOTTI  CIBO -->

            <!-- PRODOTTI  UTILITA -->
            <?php foreach($array_utilita as $utilita){ ?>
                <div class="col-4">
                    <div class="card mb-3">

                        <!-- Immagine prodotto -->
                        <img src=<?php  echo $utilita->getImg(); ?> alt="" class=" ">
                        
                        <!-- Info prodotto-->
                        <div class="card-body ">
                            <h4>
                                <?php  echo $utilita->getNome() ?>
                            </h4>
                            <p>
                                <?php  echo $utilita->getAnimale() ?>
                            </p>
                            <p>
                                Prezzo: &euro; <?php  echo  $utilita->getPrezzo() ?>
                            </p>
                            <p>
                                Peso neto: <?php  echo $utilita->getMateriale() ?>
                            </p>
                            <p>
                                Ingredinti: <?php  echo $utilita->getDimensioni() ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!--FINE PRODOTTI UTILITA -->

            <!--FINE PRODOTTI GIOCO -->
            <?php foreach($array_gioco as $gioco){ ?>
                <div class="col-4">
                    <div class="card mb-3">

                        <!-- Immagine prodotto -->
                        <img src=<?php  echo $gioco->getImg(); ?> alt="" class=" ">
                        
                        <!-- Info prodotto-->
                        <div class="card-body ">
                            <h4>
                                <?php  echo $gioco->getNome() ?>
                            </h4>
                            <p>
                                <?php  echo $gioco->getAnimale() ?>
                            </p>
                            <p>
                                Prezzo: &euro; <?php  echo  $gioco->getPrezzo() ?>
                            </p>
                            <p>
                                Peso neto: <?php  echo $gioco->getCaratteristiche() ?>
                            </p>
                            <p>
                                Ingredinti: <?php  echo $gioco->getDimensioni() ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <!--FINE PRODOTTI GIOCO -->

        </div>
    </div>

    <!-- FINE CARD Prodotti -->


</body>
</html>
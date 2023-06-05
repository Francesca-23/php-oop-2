<?php 

include_once __DIR__ . '/database/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container w-75">
        <h1 class="text-center">Pet Store</h1>

        <div class="row">

        <!-- cards prodotti per cani -->

            <?php foreach($prodottiCani as $elem){ ?>

                <h3 class="mx-3 mt-3"> 
                    <?php 
                        if($elem == $prodottiCani['cibo']){
                            echo 'CANI: CIBO';
                        }elseif($elem == $prodottiCani['giochi']){
                            echo 'CANI: GIOCHI';
                        }elseif($elem == $prodottiCani['cucce']){
                            echo 'CANI: CUCCE';
                        }elseif($elem == $prodottiCani['abbigliamento']){
                            echo 'CANI: ABBIGLIAMENTO';
                        }
                    ?> 
                </h3>

                <?php foreach($elem as $elemento){ ?>

                    <div class="card single-card" >
                        <div class="img-container">
                            <img src=" <?php echo $elemento->immagine ?> " class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"> <?php echo $elemento->nome ?> </h5>
                            <p><strong>Prezzo: </strong> <?php echo $elemento->prezzo ?> </p>
                            <p class="card-text">
                                <?php 
                                    if(isset($elemento->calorie)){
                                        echo '<strong>Calorie: </strong>' . $elemento->calorie;
                                    }elseif(isset($elemento->materiale)){
                                        echo '<strong>Materiale: </strong>' . $elemento->materiale;
                                    }elseif(isset($elemento->dimensioni)){
                                        echo '<strong>Dimensioni: </strong>' . $elemento->dimensioni;
                                    }elseif(isset($elemento->taglia)){
                                        echo '<strong>Taglia: </strong>' . $elemento->taglia;
                                    }
                                ?>
                            </p>
                            <p><strong>Descrizione: </strong> <?php echo $elemento->descrizione ?> </p>
                            <p><strong>Categoria prodotto: </strong><?php echo $elemento->categoria->name ?> </p>
                        </div>
                    </div>

                <?php } ?>
            <?php } ?>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>


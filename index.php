<?php 

include_once __DIR__ . '/category.php';
include_once __DIR__ . '/cibo.php';
include_once __DIR__ . '/accessori.php';
include_once __DIR__ . '/giocattoli.php';

$arrCategory = [
    'cane' => new Category ('cane', 'icona_cane'),
    'uccello' => new Category ('uccello', 'icona_uccello'),
    'gatto' => new Category ('gatto', 'icona_gatto')
];


$arrProdotti = [
    new Cibo('https://picsum.photos/200/300', 'Royal Canin', 43.99, $arrCategory['cane'], 545, 'prosciutto, riso' ),
    new Cibo('https://picsum.photos/200/300', 'Almo Nature', 44.99, $arrCategory['cane'], 600, 'manzo, cereali' ),
    new Accessori('https://picsum.photos/200/300', 'Voliera Ferplast Bella Casa', 60, $arrCategory['uccello'], 'legno', 'M:L 83 x P 67 x H 153 cm'), 
    new Giocattoli('https://picsum.photos/200/300', 'Topini di peluche Trixie', 4.99, $arrCategory['gatto'], 'Morbido con codina in corda', '8,5 x 10 cm' ),  
];

// foreach ($arrProdotti as $elem) {
//     var_dump($elem);
//     echo '<img src="$elem->immagine" alt="">';
//     echo '<br>';
//     echo $elem->nome;
//     echo '<br>';
//     echo $elem->category->nome;
//     echo '<br>';
//     echo $elem->category->icona;

    // if(get_class($elem) == 'Cibo' ){
    //     echo '<br>';
    //     echo $elem->peso;
    //     echo '<br>';
    //     echo $elem->ingredienti;
    // }
    
    // if(get_class($elem) == 'Accessori' ){
    //     echo '<br>';
    //     echo $elem->materiale;
    //     echo '<br>';
    //     echo $elem->dimensioni;
    // }
    // if(get_class($elem) == 'Giocattoli' ){
    //     echo '<br>';
    //     echo $elem->caratteristiche;
    //     echo '<br>';
    //     echo $elem->dimensioni;
    // }
// }
?>
<!doctype html>
<html lang="en">

<head>
  <title>php-oop-2</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <header>

  </header>
  <main>

  <div>
    <div class="row w-75 g-2 m-auto">
       
            <?php foreach ($arrProdotti as $elem){?>
            <div class="col m-4">    
                <div class="card" style="width: 18rem">
                  <img src="<?php echo $elem->immagine ?>"  class="card-img-top" alt="...">
                  <div class="card-body">
                   <h5 class="card-title"><?php echo $elem->nome ?> </h5>
                  <p class="card-text  ">Prezzo: €<?php echo $elem->prezzo ?></p>
                  <p class="card-text"><?php echo $elem->category->icona?></p>
                  <p class="card-text"><?php echo $elem->category->nome ?> </p>
                  <?php 
                        if(get_class($elem) == 'Cibo' ){
                        echo '<br>';
                        echo $elem->peso;
                        echo '<br>';
                        echo $elem->ingredienti;
                    }
                    
                    if(get_class($elem) == 'Accessori' ){
                        echo '<br>';
                        echo $elem->materiale;
                        echo '<br>';
                        echo $elem->dimensioni;
                    }
                    if(get_class($elem) == 'Giocattoli' ){
                        echo '<br>';
                        echo $elem->caratteristiche;
                        echo '<br>';
                        echo $elem->dimensioni;
                    }
                                
                ?>

                                
                 </div>
                </div>
            </div>
        
            <?php  
            } 
            ?>
  




       
   
  </div>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>


</body>

</html>

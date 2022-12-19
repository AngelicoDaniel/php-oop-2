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
    new Cibo('https://cdn.royalcanin-weshare-online.io/v2k6a2QBG95Xk-RBN9oV/v196/packshot-mini-ad-shn17', 'Royal Canin', 43.99, $arrCategory['cane'], 545, 'prosciutto, riso' ),
    new Cibo('https://picsum.photos/200/300', 'Almo Nature', 44.99, $arrCategory['cane'], 600, 'manzo, cereali' ),
    new Accessori('https://picsum.photos/200/300', 'Voliera Ferplast Bella Casa', 60, $arrCategory['uccello'], 'legno', 'M:L 83 x P 67 x H 153 cm'), 
    new Giocattoli('https://picsum.photos/200/300', 'Topini di peluche Trixie', 4.99, $arrCategory['gatto'], 'Morbido con codina in corda', '8,5 x 10 cm' ),  
];

foreach ($arrProdotti as $elem) {
    var_dump($elem);
    echo '<img src="$elem->immagine" alt="">';
    echo '<br>';
    echo $elem->nome;
    echo '<br>';
    echo $elem->category->nome;
    echo '<br>';
    echo $elem->category->icona;

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
}
?>
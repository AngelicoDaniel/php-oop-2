<?php 

include_once __DIR__ . './category.php';
include_once __DIR__ . './cibo.php';
include_once __DIR__ . './accessori.php';
include_once __DIR__ . './giocattoli.php';

$arrCategory = [
    'cane' => new Category ('cane', 'icona_cane'),
    'uccello' => new Category ('uccello', 'icona_uccello'),
    'gatto' => new Category ('gatto', 'icona_gatto')
];

$arrProdotti = [
    new Cibo('https://picsum.photos/200/300', 'Royal Canin', 43.99, $arrayCategory['cane'], 545, 'prosciutto,riso' ),
    new Cibo('https://picsum.photos/200/300', 'Almo Nature', 44.99, $arrayCategory['cane'], 600, 'manzo,cereali' ),
    new Accessori('https://picsum.photos/200/300', 'Voliera Ferplast Bella Casa', 60, $arrayCategory['uccello'], 'legno', 'M:L 83 x P 67 x H 153 cm'), 
    new Giocattoli('https://picsum.photos/200/300', 'Topini di peluche Trixie', 4.99, $arrayCategory['gatto'], 'Morbido con codina in corda', '8,5 x 10 cm' ),  
];


?>
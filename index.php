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


?>
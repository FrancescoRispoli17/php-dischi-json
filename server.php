<?php 

   $dischi = [
    [
        'name' => 'Angel of salvation',
        'author' => 'Galneryus',
        'year' => '2012',
        'url' => 'https://upload.wikimedia.org/wikipedia/en/a/af/AngelofSalvationGalneryuscover.jpg',
    ],
    [
        'name' => 'hurry up we\'re dreaming',
        'author' => 'M83',
        'year' => '2011',
        'url' => 'https://m.media-amazon.com/images/I/81tEvdYVSPL.__AC_SX300_SY300_QL70_ML2_.jpg',
    ],
    [
        'name' => 'Mothership',
        'author' => 'Led Zeppelin',
        'year' => '2007',
        'url' => 'https://m.media-amazon.com/images/I/81g+SqwTwLL._AC_SX522_.jpg',
    ],
    [
        'name' => 'Igor',
        'author' => 'Tyler, the Creator',
        'year' => '2019',
        'url' => 'https://m.media-amazon.com/images/I/71UzjXRiGHL.__AC_SY300_SX300_QL70_ML2_.jpg',
    ],
    [
        'name' => 'Once in a long, long while',
        'author' => 'Low Roar',
        'year' => '2017',
        'url' => 'https://upload.wikimedia.org/wikipedia/en/a/a1/Ross_longlongwhile.jpg',
    ],
    [
        'name' => 'How to be a human being',
        'author' => 'Glass Animals',
        'year' => '2016',
        'url' => 'https://m.media-amazon.com/images/I/7196UNBo2IL.__AC_SX300_SY300_QL70_ML2_.jpg',
    ],

];

header('Content-Type: application/json');
echo json_encode($dischi);




?>
<?php

function getDisc($disc){
    return[
        "id"=>$disc['id'],
        "name"=>$disc['name'],
        "author"=>$disc['author'],
        "year"=>$disc['year'],
        "url"=>$disc['url'],
    ];
}


?>
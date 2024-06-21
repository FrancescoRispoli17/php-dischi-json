<?php 

    $dischi = file_get_contents(__DIR__ . '/disc.json');
    header('Content-Type: application/json');
    echo $dischi;

?>
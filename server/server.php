<?php 
require_once __DIR__ . '/function.php';
    $data = file_get_contents(__DIR__ . '/disc.json');

    $dischi=json_decode($data,true);
    $dischi_light=$dischi;
    $dischi_light=array_map('getDisc',$dischi_light);

    if(isset($_GET['action']) && $_GET['action']==='read'){
        if(isset($_GET['id']))
            $index=$_GET['id'];
        $position=array_search($index,array_column($dischi,'id'));
        if($position!==false)
            $dischi_light=$dischi[$position];
    }
    header('Content-Type: application/json');
    echo json_encode($dischi_light);

?>
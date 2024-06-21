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
    if(isset($_POST['action']) && $_POST['action']==='create'){
        $new_disc=[
            "id"=> count($dischi),
            "name"=>$_POST['name'],
            "author"=>$_POST['author'],
            "year"=>$_POST['year'],
            "url"=>$_POST['url'],
            "description"=>$_POST['description']
        ];
        $dischi_light=[...$dischi, $new_disc];
        $dischi_light=array_map('getDisc',$dischi_light);
        file_put_contents(__DIR__ . '/disc.json', json_encode($dischi_light));
    }
    header('Content-Type: application/json');
    echo json_encode($dischi_light);

?>
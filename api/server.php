<?php 
    require __DIR__ .'/../data/database.php';

    $selected = $_GET['genre'];

    if ($selected == '' || $selected == 'Tutti') {
        $filtred = $db;
    }else{
        foreach($db as $disk) {
            if ($selected == $disk['genre']) {
                $filtred[] = $disk;
            }
        }
    }



    
    header('Content-Type: application/json');
    echo json_encode($filtred);
?>
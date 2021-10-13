<?php 
        include __DIR__ .'/data/database.php';
        
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Dischi</title>
</head>
<body>
    <header>

    </header>
    <main>
        <div class="container">
            <div class="boxDischi">
                <?php
                foreach ($db as $disco)
                echo '<div class="boxCard">
                    <div class="boxImage">
                        <img src=" ' .$disco["poster"] .'" alt="' .$disco["title"] .'">
                    </div>
                    <div class="boxText">
                        <h3>'.$disco["title"] .'</h3>
                        <p>'.$disco["author"] .'</p>
                        <p>'.$disco["year"] .'</p>
                    </div>
                </div>';
               ?>
            </div>
        </div>
    </main>    
</body>
</html>

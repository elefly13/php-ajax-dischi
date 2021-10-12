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
    <?php 
        include __DIR__ .'/partial/database.php';
        include __DIR__ .'/partial/function.php';
    ?>
    <header>
        
    </header>
    <main>
        <div class="container">
            <div class="boxDischi">
                <?php
                foreach ($db as $key => $value)
                echo '<div class="boxCard">
                    <div class="boxImage">
                        <img src=" ' .$value["poster"] .'" alt="' .$value["title"] .'">
                    </div>
                    <div class="boxText">
                        <h3>'.$value["title"] .'</h3>
                        <p>'.$value["author"] .'</p>
                        <p>'.$value["year"] .'</p>
                    </div>
                </div>';
               ?>
            </div>
        </div>
    </main>    
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Ajax Dischi</title>
</head>
<body>
    <div id="root" class="container">
        <div class="boxDischi">
               
            <div class="boxCard" v-for="(disco, index) in discs" :key="index">
                <div class="boxImage">
                    <img :src="disco.poster" :alt="disco.title">
                </div>
                <div class="boxText">
                    <h3>{{disco.title}}</h3>
                    <p>{{disco.author}}</p>
                    <p>{{disco.year}}</p>
                </div>
            </div>
        </div>

    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="js/main.js"></script>
</body>
</html>
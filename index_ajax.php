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
        <header>
            <div class="box-header">
                <div class="logo">
                    <img src="https://www.freepnglogos.com/uploads/spotify-logo-png/file-spotify-logo-png-4.png" alt="Logo Spotify">
                </div>
                <label >
                    <select v-model="selected" @change="getGenre" name="" id="select">
                        <option v-for="(opzione, index) in opzioni" :key="index">{{ opzione }}</option>
                    </select>
                </label>
            </div>
        </header>
        <main>
            <div class="boxDischi">
                <div class="boxCard" v-for="(disco, index) in filteredGenre" :key="index">
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
        </main>
    </div>
   

    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="js/main.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Andika+New+Basic:wght@400;700&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="./dist/css/main.css">
    <title>My Gallery Disc in PHP</title>
</head>
<!-- database -->
<?php include __DIR__ . '/scripts/database.php' ?>

<body>
    <div id="app">
        <!-- Header -->
        <header>
            <nav class="container flex justify-between">
                <div class="logo">
                    <img src="./img/logo.png" alt="logo">
                </div>
                <div class="logo-text">
                    <img src="./img/booltify.png" alt="">
                </div>
            </nav>
        </header>
        <!-- Main -->
        <main class="hv100">
            <div class="select">
                <select v-model="selectedGen" @change="filterGenre">
                    <option value="all">All</option>
                    <option v-for="(item, index) in listGenre(genres)" :value="item">{{item}}</option>
                </select>
            </div>
            <div class="container flex justify-center">

                <div v-for="cd in cds" class="disk flex column align-center">
                    <div class="disk-cover">
                        <img class="h100" :src="cd.poster" alt="">
                    </div>
                    <h4> {{cd.title}} </h4>
                    <p> {{cd.author}}</p>
                    <p> {{cd.year}}</p>
                    <p>{{cd.genre}}</p>
                </div>
            </div>
        </main>
    </div>



</body>
<!-- JS -->
<script src="./dist/js/main.js"></script>

</html>
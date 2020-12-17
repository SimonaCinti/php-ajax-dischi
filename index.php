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
    <div id="app" class="hv100">
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
        <main>
            <div class="container flex justify-between">
                <?php foreach ($database as $disk) { ?>
                    <div class="disk flex column align-center">
                        <div class="disk-cover">
                            <img class="h100" src="<?php echo $disk['poster'] ?>" alt="">
                        </div>
                        <h4> <?php echo $disk['title'] ?></h4>
                        <p> <?php echo $disk['author'] ?> </p>
                        <p> <?php echo $disk['year'] ?></p>
                        <p><?php echo $disk['genre'] ?></p>
                    </div>

                <?php } ?>
            </div>
        </main>
    </div>



</body>
<!-- JS -->
<script src="./dist/js/main.js"></script>

</html>
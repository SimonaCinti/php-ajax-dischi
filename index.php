<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="./dist/css/main.css">
    <title>My Gallery Disc in PHP</title>
</head>
<body>
    <div id="app">
        <?php $lorem = 'lorem' ?>
        <h1> <?php echo $lorem ?></h1>
        <h2>{{appTitle}}</h2>
    </div>
    <?php include __DIR__ . '/scripts/database.php';
    var_dump ($database) ?>
    
</body>
<!-- JS -->
<script src="./dist/js/main.js"></script>
</html>
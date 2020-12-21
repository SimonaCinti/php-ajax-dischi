<?php include __DIR__ . "/database.php";

$albums = [];

if ((empty($_GET)) || ($_GET['genre'] === 'all')) {
    // empty string check or all genre, return  full database
    $albums = $database;
} else {
    // check genre, return list of cds
    $filter = $_GET['genre'];
    foreach ($database as $cd) {
        if ($cd['genre'] == $filter) {
            $albums[] = $cd;
        }
    };
}

// Get Genre List available inside the database

$genreList = [];

foreach($database as $cd){
    if (! in_array($cd['genre'], $genreList)){
        $genreList[] = $cd['genre'];
    }
}


// Final Json 

$result = [
    'albums' => $albums,
    'genres' => $genreList
];

 header('Content-Type: application/json');
 echo json_encode($result);
?>
<?php include __DIR__ . "/database.php";

// Rock - Pop - Jazz - Metal 

$filter_genre = [];

if (empty($_GET)) {
    // empty string check, return database
    $filter_genre = $database;
} else{
    // check filter
    $filter = $_GET['genre'];
    foreach($database as $cd){
       if ( in_array($filter, $cd)){
           $filter_genre[] = $cd;
       }
    };
}    


header('Content-Type: application/json');
echo json_encode($filter_genre);
?>
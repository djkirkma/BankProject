<?php
require_once("../application/database.php");
if (filter_has_var(INPUT_GET, "q")) {//process ajax request
    $query_terms = filter_input(INPUT_GET, 'q', FILTER_SANITIZE_STRING);
    //$movies = $movie_manager->search_movie($query_terms);
    
    $sql = "Select Name from features WHERE Name LIKE '%$query_terms%'";
    $suggestions = array();
    $result = $conn->query($sql);
    if($result) {
        while ($obj = $result->fetch_object()) {
            $suggestions[] = $obj->Name;
        }
    }
    
    
    echo json_encode($suggestions);
} 
?>
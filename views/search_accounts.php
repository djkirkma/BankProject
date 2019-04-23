<?php
require_once("../application/database.php");
if (filter_has_var(INPUT_GET, "q")) {//process ajax request
    $query_terms = filter_input(INPUT_GET, 'q', FILTER_SANITIZE_STRING);
    //$movies = $movie_manager->search_movie($query_terms);
    
    $sql = "Select * from account WHERE AccountNumber LIKE '%$query_terms%' or FirstName LIKE '%$query_terms%' or
     LastName LIKE '%$query_terms%' or Email LIKE '%$query_terms%' or Balance LIKE '%$query_terms%'";
    $suggestions = array();
    $result = $conn->query($sql);
    if($result) {
        while ($obj = $result->fetch_object()) {
            $suggestions[] = "<tr> <td> " . $obj->AccountNumber . "</td>" .
            "<td> " .   $obj->FirstName. "</td>" .
            "<td> " . $obj->LastName. "</td>" .
            "<td> " . $obj->Email . "</td>" .
            "<td> " . $obj->Balance . "</td>" .
            "<td>
            <form method='get' action='search.php'>
            <input type='hidden' name='myID' value='$obj->AccountNumber' >
            <input type='submit' value='Edit Account'>
            </form>
            </td>" . 
             "</tr>";
        }
    }
    
    
    echo json_encode($suggestions);
} 
?>
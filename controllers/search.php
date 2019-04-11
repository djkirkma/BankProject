<?php
if (isset($_GET['query-terms'])) { 
    //retrieve query terms
    $query_terms = trim($_GET['query-terms']);

    //search the database for matching movies
    $movies = $movie_manager->search_movie($query_terms);
    
}

//auto suggest movies
if (filter_has_var(INPUT_GET, "q")) {//process ajax request
    $query_terms = filter_input(INPUT_GET, 'q', FILTER_SANITIZE_STRING);
    $movies = $movie_manager->search_movie($query_terms);
    
    //retrieve all movie titles and store them in an array
    $titles = array();
    if ($movies) {
        foreach ($movies as $movie) {
            $titles[] = $movie->getTitle();
        }
    }
    
    echo json_encode($titles);
} 
public function search_movie($terms) {
    $terms = explode(" ", $terms); //explode multiple terms into an array
    //select statement for AND serach
    $sql = "SELECT * FROM " . . "," . $this->tblMovieRating .
            " WHERE " . $this->tblMovie . ".rating=" . $this->tblMovieRating . ".rating_id AND (1";

    foreach ($terms as $term) {
        $sql .= " AND title LIKE '%" . $term . "%'";
    }
    $sql .= ")";
   
    //execute the query
    $query = $this->dbConnection->query($sql);

    // the search failed, return false. 
    if (!$query) {
        return false;
    }
    //search succeeded, but no movie was found.
    if ($query->num_rows == 0) {
        return 0;
    }
    //search succeeded, and found at least 1 movie found.
    //create an array to store all the returned movies
    $movies = array();

    //loop through all rows in the returned recordsets
    while ($obj = $query->fetch_object()) {
        $movie = new Movie($obj->title, $obj->rating, $obj->release_date, $obj->director, $obj->image, $obj->description);

        //set the id for the movie
        $movie->setId($obj->id);

        //add the movie into the array
        $movies[] = $movie;
    }
    return $movies;
}
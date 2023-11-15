<?php
require "config/db.php";
$db = new myDB();

if (isset($_POST['getMovie'])) {
    if (isset($_POST['featuredMovie'])) {
        $db->selectFeaturedMovie('movie', '*', null, 5, false);
    }
    if (isset($_POST['getAllMovies'])) {
        $db->selectFeaturedMovie('movie', '*', null, 8, true);
    }
    if (isset($_POST['getTopMovie'])) {
        $db->selectFeaturedMovie('movie', '*', null, 1, false);
    }
    if (isset($_POST['getSpecialMovie'])) {
        $db->select('movie', '*', "title = 'Home Alone'");
    }

    echo json_encode($db->res);
}

if (isset($_POST['movieInfo'])) {
    if (isset($_POST['showReview'])) {

        $movieID = $_POST['movieID'];

        $db->selectJoin('review', '*', " review.movieID = '$movieID'");
    }

    echo json_encode($db->res);
}

if (isset($_POST['allMovies'])) {

    if (isset($_POST['getAllMovies'])) {
        $db->selectFeaturedMovie('movie', '*', null, 8, true);
    }
    if (isset($_POST['searchMovie'])) {
        $searchInput = isset($_POST['searchInput']) ? $_POST['searchInput'] : '';
        $genreSelect = isset($_POST['genreSelect']) ? $_POST['genreSelect'] : '';

        $where = '';

        if (!empty($genreSelect)) {
            $where .= "genre LIKE '%$genreSelect%' AND ";
        }

        if (!empty($searchInput)) {
            $where .= "title LIKE '%$searchInput%' AND ";
        }

        // Remove the trailing "AND" if it exists
        $where = rtrim($where, ' AND ');

        // If $where is not empty, add it to the query
        if (!empty($where)) {
            $db->select('movie', "*", $where);
        }
    }

    echo json_encode($db->res);
}

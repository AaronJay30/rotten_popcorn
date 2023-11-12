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

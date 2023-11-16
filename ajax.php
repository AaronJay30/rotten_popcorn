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

if (isset($_POST['adminGetMovie'])) {

    $db->select('movie', '*', null);

    echo json_encode($db->res);
}

if (isset($_POST['deleteReview'])) {
    $reviewID = $_POST['reviewID'];
    $where = ' reviewID =' . $reviewID;
    $db->delete('review', $where);

    echo json_encode($db->res);
}

if (isset($_POST['deleteMovie'])) {
    $movieID = $_POST['movieID'];
    $where = ' movieID =' . $movieID;
    $db->delete('movie', $where);

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

if (isset($_POST['registerUser'])) {
    $postData = $_POST['datas'];


    $existingUser = $db->select('user', '*', "email = '{$postData['email']}'");

    if (!empty($existingUser)) {
        $error = array('error' => 'Email already exists');
        echo json_encode($error);
        exit; // Stop execution if there's an error
    } else {
        $hashPassword = $postData['password'];
        $conHashPassword = $postData['confirm-password'];

        if ($hashPassword == $conHashPassword) {
            $data = array(
                'username' => $postData['username'],
                'email' => $postData['email'],
                'password' => md5($hashPassword),
                'birthday' => $postData['birthday'],
                'created_at' => date('Y-m-d'),
            );

            $db->insert('user', $data);
            echo json_encode($db->res);
        } else {
            $error = array('error' => 'Passwords do not match');
            echo json_encode($error);
        }
    }
}

if (isset($_POST['addReview'])) {
    $reviewData = $_POST['datas'];

    $comment = $reviewData['review'];
    $stars = $reviewData['stars'];
    $movieID = $reviewData['movieID'];
    $userID = $_COOKIE['userID'];

    $subject = generateShortSubject($comment);

    $trimSubject = str_replace("'", "\'", $subject);
    $trimComment = str_replace("'", "\'", $comment);

    print_r($trimSubject);

    $data = array(
        'movieID' => $movieID,
        'userID' => $userID,
        'rating' => $stars,
        'review_subject' => $trimSubject,
        'review_text' => $trimComment,
        'review_date' => date('Y-m-d'),
    );

    $db->insert('review', $data);

    $where = ' movieID = ' . $movieID;
    $db->select('review', 'rating', $where);

    // Check if there are reviews for the movie
    if (!empty($db->res)) {
        // Calculate the average rating
        $totalRating = array_sum(array_column($db->res, 'rating'));
        $averageRating = $totalRating / (count($db->res) * 5);

        // Convert the average rating to a percentage
        $percentage = $averageRating * 100;

        $updateData = array('average_rating' => $percentage, 'total_review_count' => count($db->res));
        $updateWhere = 'movieID = ' . $movieID;
        $db->update('movie', $updateData, $updateWhere);

        echo json_encode($db->res);
    }
}

function generateShortSubject($comment)
{
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/chat/completions');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);

    $userReview = "Create a one brief title for this user's movie review using 4-5 words. Avoid using apostrophes or quotation marks: " . $comment;


    $post_data = array(
        'model' => 'gpt-3.5-turbo',
        'messages' => array(
            array('role' => 'system', 'content' => 'You are a helpful assistant.'),
            array('role' => 'user', 'content' => $userReview),
            // Add more user messages as needed
        ),
        'temperature' => 0,
        'max_tokens' => 250,
        'top_p' => 1,
        'frequency_penalty' => 0,
        'presence_penalty' => 0
    );

    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post_data));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);

    $headers = array();
    $headers[] = 'Content-Type: application/json';
    $headers[] = 'Authorization: Bearer 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';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }

    curl_close($ch);

    // Assuming $response contains the API response
    $responseData = json_decode($response, true);

    // Check if the response has choices
    if (isset($responseData['choices']) && !empty($responseData['choices'])) {
        // Get the content from the first message
        $firstContent = $responseData['choices'][0]['message']['content'];
    } else {
        // Handle the case where choices are not present in the response
        echo 'Error: No choices in the response.';
    }


    return $firstContent;
}


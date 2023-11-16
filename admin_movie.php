<?php

if (!isset($_COOKIE['userID'])) {
    header('Location: index.php');
}

require "config/db.php";
$movieDB = new myDB();

if (isset($_GET['movieID'])) {
    $movieID = $_GET['movieID'];

    $movieDB->select('movie', '*', " movieID = $movieID");

    $movie = $movieDB->res;
}

if (isset($_POST['submit'])) {

    $updateMovie = new myDB();

    $statusMsg = '';

    $targetDir = "img/posters/";

    $datas = array();

    if (!empty($_FILES["file"]["name"])) {
        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        // Allow certain file formats 
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
        if (in_array($fileType, $allowTypes)) {
            // Upload file to server 
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                // Insert image file name into database 
                $datas['poster'] = $fileName;
            } else {
                $statusMsg = "Sorry, there was an error uploading your file.";
            }
        } else {
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
        }
    } else {
        $statusMsg = 'Please select a file to upload.';
    }


    $updateMovieID = $_POST['movieID'];

    $trimTitle = str_replace("'", "\'", $_POST['title']);
    $datas['title'] = $trimTitle;

    $trimDirector = str_replace("'", "\'", $_POST['director']);
    $datas['director'] = $trimDirector;

    $trimcast = str_replace("'", "\'", $_POST['cast']);
    $datas['cast'] = $trimcast;

    $trimyear = str_replace("'", "\'", $_POST['year']);
    $datas['year'] = $trimyear;

    $trimgenre = str_replace("'", "\'", $_POST['genre']);
    $datas['genre'] = $trimgenre;

    $trimSynopsis = str_replace("'", "\'", $_POST['synopsis']);

    $datas['synopsis'] = $trimSynopsis;

    // print_r($datas);

    $updateMovie->update('movie', $datas, " movieID = $updateMovieID");

    $result = $updateMovie->res;

    if ($result) {
        $statusMsg = "Updated Successfully";
        header("Location: admin.php?message=" . $statusMsg);
    }
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/RottenPopCorn(LogoOnly).png">
    <title>Admin | Rotten Popcorn</title>

    <!-- IMPORTS -->
    <script src="js/tailwind.js"></script>
    <script src="js/jquery.3.7.1.js"></script>
    <script src="js/flowbite.js"></script>
    <script src="js/sweetalert.js"></script>

    <!-- <link href="css/flowbite.css" rel="stylesheet" /> -->
    <link href='css/boxicons.min.css' rel='stylesheet'>

    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="./css/admin.css">

</head>

<!-- CUSTOM CSS -->
<style>
    @import url('https://fonts.googleapis.com/css2?family=Gabarito:wght@400;500;600;700;800;900&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        width: 100vw;
        overflow-x: hidden;
        background-image: url('img/bg-image.jpg');
        background-size: cover;
        font-family: 'Gabarito', sans-serif;
    }

    nav {
        background: rgba(140, 21, 21, 0.7);
        backdrop-filter: blur(20px) saturate(160%) contrast(45%) brightness(140%);
        -webkit-backdrop-filter: blur(20px) saturate(160%) contrast(45%) brightness(140%);
    }

    nav .logo-container img {
        transition: 200ms ease-in-out;
    }

    nav .logo-container img:hover {
        transform: scale(1.2);
    }

    nav ul li {
        transition: 200ms ease-in-out;
    }

    nav ul li:hover {
        transform: scale(1.1);
    }

    .container {
        background: rgba(180, 33, 33, 0.72);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(8.2px);
        -webkit-backdrop-filter: blur(8.2px);
    }

    .buttons__burger {
        --size: 2.5rem;
        --clr: #fff;
        width: var(--size);
        height: calc(0.7 * var(--size));
        cursor: pointer;
        position: relative;
        display: block;
    }

    .buttons__burger #burger {
        display: none;
        width: 100%;
        height: 100%;
    }

    .buttons__burger span {
        display: block;
        position: absolute;
        width: 100%;
        border-radius: 0.5rem;
        border: 3px solid var(--clr);
        background-color: var(--clr);
        transition: 0.15s ease-in-out;
    }

    .buttons__burger span:nth-of-type(1) {
        top: 0;
        right: 0;
        transform-origin: right center;
    }

    .buttons__burger span:nth-of-type(2) {
        top: 50%;
        transform: translateY(-50%);
    }

    .buttons__burger span:nth-of-type(3) {
        top: 100%;
        right: 0;
        transform-origin: right center;
        transform: translateY(-100%);
    }

    .buttons__burger #burger:checked~span:nth-of-type(1) {
        transform: translateY(-30%) rotate(40deg);
        width: 50%;
        top: 50%;
    }

    .buttons__burger #burger:checked~span:nth-of-type(3) {
        transform: translateY(-70%) rotate(-40deg);
        width: 50%;
        top: 50%;
    }

    #sidebar {
        background: rgba(180, 33, 33, 1);
    }
</style>

<body>
    <!-- LOADER -->
    <!-- <?php include 'config/loader.php'; ?> -->
    <?php include 'config/admin_navbar.php'; ?>

    <!-- CONTAINER -->
    <div class="container relative p-10 mx-auto mt-24 rounded-lg overflow-auto border-4 border-white">

        <div class="flex flex-row items-center justify-center">
            <h3 class="text-3xl font-bold text-white">Edit Movie Info</h3>
        </div>

        <div class="grid grid-cols-2 gap-2 max-[1200px]:grid-cols-2 max-[600px]:grid-cols-1 w-full z-1 border-b-4 border-white py-8">

            <!-- Movie Poster -->
            <div class="flex flex-col items-center justify-center">

                <div class="items-center justify-center my-2 py-2">
                    <img id="profileImage" src="./img/posters/<?php echo $movie[0]['poster'] ?>" alt="Movie Poster" class="w-60 h-90 mb-4">


                    <label for="profile" class="flex flex-col gap-y-4 justify-center items-center w-full">
                        <h1 class="px-4 text-center py-2.5 rounded-xl bg-blue-700 cursor-pointer text-white hover:bg-blue-900 duration-200 w-full">Change Poster</h1>
                    </label>

                    <input type="file" id="profile" name="file" class="hidden" form="updateMovieForm">
                </div>
            </div>

            <!-- Movie Information -->
            <div class="flex items-center justify-center w-full">
                <form class="w-full" id="updateMovieForm" action='admin_movie.php' id="updateMovieForm" method="POST" enctype="multipart/form-data">
                    <div class="flex flex-row items-center justify-center">
                        <div class="relative z-0 w-full mb-6 group">
                            <label for="title" class="block mb-2 text-sm font-medium text-white">Movie Title</label>
                            <input type="text" value="<?php echo $movie[0]['title'] ?>" name="title" id="title" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-white appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                            <label for="director" class="block mb-2 text-sm font-medium text-white">Movie Director</label>
                            <input type="text" value="<?php echo $movie[0]['director'] ?>" name="director" id="director" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-white appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                        </div>
                        <input type="hidden" name="movieID" value="<?php echo $movieID ?>">
                        <div class="relative z-0 w-full mb-6 group">
                            <label for="cast" class="block mb-2 text-sm font-medium text-white">Movie Cast</label>
                            <input type="text" value="<?php echo $movie[0]['cast'] ?>" name="cast" id="cast" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-white appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                        </div>

                        <div class="relative z-0 w-full mb-6 group">
                            <label for="year" class="block mb-2 text-sm font-medium text-white">Movie Year</label>
                            <input type="text" value="<?php echo $movie[0]['year'] ?>" name="year" id="year" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-white appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                        </div>

                        <div class="relative z-0 w-full mb-6 group">
                            <label for="genre" class="block mb-2 text-sm font-medium text-white">Movie Genre</label>
                            <input type="text" value="<?php echo $movie[0]['genre'] ?>" name="genre" id="genre" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-white appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                        </div>
                    </div>

                    <div class="flex flex-col mb-6">
                        <label for="synopsis" class="block mb-2 text-sm font-medium text-white">Synopsis</label>
                        <textarea id="synopsis" name="synopsis" rows="4" class="block p-2.5 w-full text-sm text-white bg-transparent rounded-lg border border-white focus:ring-blue-500 focus:border-blue-500 placeholder-white dark:focus:ring-blue-500 dark:focus:border-blue-500 resize-none" placeholder="Write a brief summary of the movie here..."><?php echo $movie[0]['synopsis'] ?></textarea>
                    </div>

                    <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>

                </form>
            </div>
        </div>


        <div class="mt-10 gap-y-4 max-h-[800px] overflow-y-auto">
            <h1 class="text-3xl font-bold text-white col-span-2 mb-4 text-center">Reviews</h1>
            <div class="grid grid-cols-2 gap-x-8" id="reviewSection">

            </div>
        </div>

    </div>

</body>

<!-- SCRIPT -->
<script>
    document.getElementById("profile").onchange = function() {
        document.getElementById('profileImage').src = URL.createObjectURL(this.files[0]);
    };

    $(document).ready(function() {
        loadReviews();
    });

    function loadReviews() {
        $.ajax({
            url: 'ajax.php',
            method: 'POST',
            data: {
                'movieInfo': true,
                'showReview': true,
                'movieID': <?php echo $movieID; ?>,
            },
            success: function(result) {
                var datas = JSON.parse(result);

                var div = ``;
                if (datas.length > 0) {
                    datas.forEach(function(data) {
                        console.log(datas);
                        const inputDate = new Date(data['created_at']);
                        const reviewDate = new Date(data['review_date']);
                        const options = {
                            year: 'numeric',
                            month: 'long',
                            day: 'numeric',
                        };
                        const formattedDate = new Intl.DateTimeFormat('en-US', options).format(inputDate);
                        const reviewFormattedDate = new Intl.DateTimeFormat('en-US', options).format(inputDate);


                        // Dynamically generate star icons based on the 'rating' value
                        const rating = data['rating'];
                        let stars = '';
                        for (let i = 0; i < 5; i++) {
                            if (i < rating) {
                                stars += `<svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>`;
                            } else {
                                stars += `<svg class="w-4 h-4 text-gray-300 dark:text-gray-500 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>`;
                            }
                        }


                        div += `<article class="py-4 border-b">
                                <div class="flex items-center mb-4 space-x-4">
                                    <img class="w-10 h-10 rounded-full" src="img/profile/` + data['profile_picture'] + `" alt="">
                                    <div class="space-y-1 font-medium dark:text-white">
                                        <p>` + data['username'] + `<time datetime="2014-08-16 19:00" class="block text-sm text-gray-500 dark:text-gray-400">Joined on ` + formattedDate + `</time></p>
                                    </div>
                                </div>
                                <div class="flex items-center mb-1">
                                    ` + stars + `
                                    <h3 class="ml-2 text-sm font-semibold text-gray-900 dark:text-white">` + data['review_subject'] + `</h3>
                                </div>
                                <footer class="mb-5 text-sm text-gray-500 dark:text-gray-400">
                                    <p>Reviewed on <time datetime="2017-03-03 19:00">` + reviewFormattedDate + `</time></p>
                                </footer>
                                <p class="mb-2 text-gray-500 dark:text-gray-400 text-justify">` + data['review_text'] + `</p>
                                <button onclick="sweetAlertDelete(` + data['reviewID'] + `)" class='bg-red-500 hover:bg-red-700 duration-200 text-white px-4 py-1 rounded-xl'> Delete </button>
                            </article>`
                    });

                    $('#reviewSection').html(div);
                } else {

                    div += `<div class="w-full text-center text-xl text-gray-400 col-span-2 mt-4">There's no review at the moment :( </div>`;
                    $('#reviewSection').html(div);
                }
            },
            error: function(e) {
                alert("Oops something went wrong!");
            }
        });
    }

    function sweetAlertDelete(id) {

        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "py-2.5 px-4 bg-blue-500 text-white mx-1 rounded-lg",
                cancelButton: "py-2.5 px-4 bg-red-500 text-white mx-1 rounded-lg"
            },
            buttonsStyling: false
        });
        swalWithBootstrapButtons.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                swalWithBootstrapButtons.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success"
                });
                deleteReview(id);
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire({
                    title: "Cancelled",
                    text: "Your imaginary file is safe :)",
                    icon: "error"
                });
            }
        });
    }

    function deleteReview(reviewID) {
        // alert(reviewId);
        $.ajax({
            url: 'ajax.php',
            method: 'POST',
            data: {
                'deleteReview': true,
                'reviewID': reviewID,
            },
            success: function(result) {
                loadReviews();
            },
            error: function(error) {
                console.log(error)
            }
        });

    }
</script>

</html>
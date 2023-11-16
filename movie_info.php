<?php


require "config/db.php";
$movieDB = new myDB();
$starsCountDB = new myDB();
$commentDB = new myDB();

if (isset($_COOKIE['userID'])) {
    $userID = $_COOKIE['userID'];
    $commentDB->select('user', '*', " userID = $userID");

    $comment = $commentDB->res;

    $picture = $comment[0]['profile_picture'];
}

$userID = $_COOKIE['userID'];


if (!isset($_GET['id'])) {
    header("Location: index.php");
}

$movieID = $_GET['id'];

$movieDB->select('movie', '*', " movieID = $movieID");

$movie = $movieDB->res;

$starsCountDB->countMovieRatings('review', $movieID);

$starsCount = $starsCountDB->res;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/tailwind.js"></script>
    <script src="js/jquery.3.7.1.js"></script>
    <script src="js/flowbite.js"></script>
    <link href='css/boxicons.min.css' rel='stylesheet'>
    <link href="css/flowbite.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/index.css">

    <link rel="icon" type="image/x-icon" href="img/RottenPopCorn(LogoOnly).png">
    <!-- <script src="js/alphine.js" defer></script> -->
    <title>Rotten Popcorn</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Gabarito:wght@400;500;600;700;800;900&display=swap');

    ::-webkit-scrollbar {
        width: 5px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: red;
        border-width: 100%;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #555;
    }

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

    .rating {
        display: inline-block;
        position: relative;
        height: 50px;
        line-height: 50px;
        letter-spacing: 10px;
        font-size: 30px;
    }

    .rating label {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        cursor: pointer;
    }

    .rating label:last-child {
        position: static;
    }

    .rating label:nth-child(1) {
        z-index: 5;
    }

    .rating label:nth-child(2) {
        z-index: 4;
    }

    .rating label:nth-child(3) {
        z-index: 3;
    }

    .rating label:nth-child(4) {
        z-index: 2;
    }

    .rating label:nth-child(5) {
        z-index: 1;
    }

    .rating label input {
        position: absolute;
        top: 0;
        left: 0;
        opacity: 0;
    }

    .rating label .icon {
        float: left;
        color: transparent;
    }

    .rating label:last-child .icon {
        color: rgba(255, 255, 255, 1);
    }

    .rating:not(:hover) label input:checked~.icon,
    .rating:hover label:hover input~.icon {
        color: #FDE047;
    }

    .rating label input:focus:not(:checked)~.icon:last-child {
        color: rgba(255, 255, 255, 1);
        text-shadow: 0 0 5px #09f;
    }
</style>

<body>
    <!-- <?php include 'config/loader.php'; ?> -->
    <?php include 'config/navbar.php'; ?>

    <div class="container relative flex flex-col mx-auto mt-24 rounded-lg overflow-auto border-4 border-white">
        <div class="w-full h-auto">
            <div class="relative h-[500px] overflow-hidden">
                <img src="img/posters/<?php echo $movie[0]['poster']; ?>" class="absolute w-full -translate-x-1/2 -translate-y-1/3 top-1/2 left-1/2" alt="...">
            </div>
            <div class="relative p-10 w-full flex flex-col border-t-4 border-white mt-4 border-dotted">
                <div class="flex-row flex flex-wrap justify-between items-center gap-y-10 border-b-2 pb-8">
                    <div class="flex flex-col justify-center">
                        <h1 class="text-5xl font-bold uppercase text-white"><?php echo $movie[0]['title']; ?></h1>
                        <div class="text-gray-400 text-lg">
                            <span><?php echo $movie[0]['year']; ?> - <?php echo $movie[0]['genre']; ?></span>
                        </div>
                    </div>

                    <div class="flex flex-row items-center justify-center gap-x-8 flex-wrap">
                        <div class="flex flex-col gap-y-2 items-center justify-center">
                            <h1 class="text-xl font-bold uppercase text-gray-400">POPCORN RATING</h1>
                            <div class="flex flex-row items-center justify-center gap-4">
                                <img src="img/popcorn.png" class="w-10"> </img>
                                <span class="text-white text-3xl"><?php echo $movie[0]['average_rating']; ?>%</span>
                            </div>
                        </div>
                        <div class="flex flex-col gap-y-2 items-center justify-center">
                            <h1 class="text-xl font-bold uppercase text-gray-400">REVIEW COUNT</h1>
                            <div class="flex flex-row items-center justify-center gap-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 32 32">
                                    <path fill="#fff" d="m16 8l1.912 3.703l4.088.594L19 15l1 4l-4-2.25L12 19l1-4l-3-2.703l4.2-.594L16 8z" />
                                    <path fill="#fff" d="M17.736 30L16 29l4-7h6a1.997 1.997 0 0 0 2-2V8a1.997 1.997 0 0 0-2-2H6a1.997 1.997 0 0 0-2 2v12a1.997 1.997 0 0 0 2 2h9v2H6a4 4 0 0 1-4-4V8a3.999 3.999 0 0 1 4-4h20a3.999 3.999 0 0 1 4 4v12a4 4 0 0 1-4 4h-4.835Z" />
                                </svg>
                                <span class="text-white text-3xl"><?php echo $movie[0]['total_review_count']; ?></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col mt-4 w-full ">

                    <!-- Synopsis -->
                    <div class="synopsis flex flex-col gap-y-4 border-b-2 pb-8">
                        <h1 class="text-2xl font-semibold text-white">Synopsis</h1>
                        <p class="text-justify text-gray-400 font-medium text-lg" style="text-indent: 50px;"><?php echo $movie[0]['synopsis']; ?></p>
                    </div>

                    <!-- Person -->
                    <div class="flex flex-col border-b-2 pb-8">
                        <div class="director flex flex-row gap-x-4 items-center mt-4">
                            <h1 class="font-bold text-2xl text-white">Director: </h1>
                            <span class="text-gray-300 text-lg"><?php echo $movie[0]['director']; ?></span>
                        </div>
                        <div class="director flex flex-row gap-x-4 items-center mt-4">
                            <h1 class="font-bold text-2xl text-white">Cast: </h1>
                            <span class="text-gray-300 text-lg"><?php echo $movie[0]['cast']; ?></span>
                        </div>

                    </div>

                    <!-- Leave a comment -->
                    <div class="flex flex-col mt-4 gap-y-4 border-b-2 pb-8">
                        <h1 class="text-2xl font-bold text-white">Leave a review</h1>

                        <form id="reviewForm">
                            <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-transparent ">
                                <div class="px-4 py-2  rounded-t-lg bg-gray-300">
                                    <label for="comment" class="sr-only">Your comment</label>
                                    <textarea id="comment" name="review" rows="4" class="w-full px-0 text-sm text-gray-900 bg-gray-300 border-0 focus:ring-0 placeholder-gray-600" placeholder="Write a comment..." required></textarea>
                                </div>
                                <input type="hidden" name="movieID" value="<?php echo $movieID ?>">
                                <div class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600">
                                    <div class="flex flex-row gap-4">
                                        <button type="submit" class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-red-700 rounded-lg focus:ring-4 focus:ring-red-200 dark:focus:ring-red-900 hover:bg-red-800">
                                            Post review
                                        </button>
                                        <img class="w-10 h-10 p-1 rounded-full bg-white" src="img/profile/Arjay.png" alt="Bordered avatar">
                                    </div>
                                    <div class="flex ps-0 space-x-1 rtl:space-x-reverse sm:ps-2">
                                        <div class="rating">
                                            <label>
                                                <input type="radio" name="stars" required value="1" />
                                                <span class="icon">★</span>
                                            </label>
                                            <label>
                                                <input type="radio" name="stars" required value="2" />
                                                <span class="icon">★</span>
                                                <span class="icon">★</span>
                                            </label>
                                            <label>
                                                <input type="radio" name="stars" required value="3" />
                                                <span class="icon">★</span>
                                                <span class="icon">★</span>
                                                <span class="icon">★</span>
                                            </label>
                                            <label>
                                                <input type="radio" name="stars" required value="4" />
                                                <span class="icon">★</span>
                                                <span class="icon">★</span>
                                                <span class="icon">★</span>
                                                <span class="icon">★</span>
                                            </label>
                                            <label>
                                                <input type="radio" name="stars" required value="5" />
                                                <span class="icon">★</span>
                                                <span class="icon">★</span>
                                                <span class="icon">★</span>
                                                <span class="icon">★</span>
                                                <span class="icon">★</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <?php
                        if (isset($_COOKIE['userID'])) {
                            echo '
                                
                                ';
                        } else {
                            echo '
                            <div class="w-full text-center text-xl text-white">To leave a comment, you are required to <a href="login.php" class="text-red-400 hover:underline">login</a> to your account. </div>
                            ';
                        }
                        ?>





                    </div>

                    <div class="w-full mt-4 ">
                        <h1 class="text-2xl font-bold text-white">Ratings</h1>
                        <div class="flex items-center mt-4 w-full">
                            <a href="#" class="text-lg font-medium text-white hover:underline">5 star</a>
                            <div class="flex-1 h-5 mx-4 bg-gray-500 rounded">
                                <?php
                                if ($starsCount['total'] == 0) {
                                    $fiveStarPercent = 0;
                                } else {
                                    $fiveStarPercent = ($starsCount[5] / $starsCount['total']) * 100;
                                }
                                ?>
                                <div class="h-5 bg-yellow-300 rounded" style="width: <?php echo $fiveStarPercent; ?>%;"></div>
                            </div>
                            <span class="text-lg font-medium text-white"><?php echo $fiveStarPercent; ?>%</span>
                        </div>
                        <div class="flex items-center mt-4 w-full">
                            <a href="#" class="text-lg font-medium text-white hover:underline">4 star</a>
                            <div class="flex-1 h-5 mx-4 bg-gray-500 rounded">
                                <?php
                                if ($starsCount['total'] == 0) {
                                    $fourStarPercent = 0;
                                } else {
                                    $fourStarPercent = ($starsCount[4] / $starsCount['total']) * 100;
                                }
                                ?>
                                <div class="h-5 bg-yellow-300 rounded" style="width: <?php echo $fourStarPercent; ?>%;"></div>
                            </div>
                            <span class="text-lg font-medium text-white"><?php echo $fourStarPercent; ?>%</span>
                        </div>
                        <div class="flex items-center mt-4 w-full">
                            <a href="#" class="text-lg font-medium text-white hover:underline">3 star</a>
                            <div class="flex-1 h-5 mx-4 bg-gray-500 rounded">
                                <?php
                                if ($starsCount['total'] == 0) {
                                    $threeStarPercent = 0;
                                } else {
                                    $threeStarPercent = ($starsCount[3] / $starsCount['total']) * 100;
                                }
                                ?>
                                <div class="h-5 bg-yellow-300 rounded" style="width: <?php echo $threeStarPercent; ?>%;"></div>
                            </div>
                            <span class="text-lg font-medium text-white"><?php echo $threeStarPercent; ?>%</span>
                        </div>
                        <div class="flex items-center mt-4 w-full">
                            <a href="#" class="text-lg font-medium text-white hover:underline">2 star</a>
                            <div class="flex-1 h-5 mx-4 bg-gray-500 rounded">
                                <?php
                                if ($starsCount['total'] == 0) {
                                    $twoStarPercent = 0;
                                } else {
                                    $twoStarPercent = ($starsCount[2] / $starsCount['total']) * 100;
                                }
                                ?>
                                <div class="h-5 bg-yellow-300 rounded" style="width: <?php echo $twoStarPercent; ?>%;"></div>
                            </div>
                            <span class="text-lg font-medium text-white"><?php echo $twoStarPercent; ?>%</span>
                        </div>
                        <div class="flex items-center mt-4 w-full">
                            <a href="#" class="text-lg font-medium text-white hover:underline">1 star</a>
                            <div class="flex-1 h-5 mx-4 bg-gray-500 rounded">
                                <?php
                                if ($starsCount['total'] == 0) {
                                    $oneStarPercent = 0;
                                } else {
                                    $oneStarPercent = ($starsCount[1] / $starsCount['total']) * 100;
                                }
                                ?>
                                <div class="h-5 bg-yellow-300 rounded" style="width: <?php echo $oneStarPercent; ?>%;"></div>
                            </div>
                            <span class="text-lg font-medium text-white"><?php echo $oneStarPercent; ?>%</span>
                        </div>

                    </div>

                    <div class="mt-10 gap-y-4 max-h-[800px] overflow-y-auto divide-y">
                        <h1 class="text-2xl font-bold text-white col-span-2 mb-4">Reviews</h1>
                        <div class="grid grid-cols-2 gap-x-8" id="reviewSection">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
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
                            </article>`
                });

                $('#reviewSection').html(div);
            },
            error: function(e) {
                alert("Oops something went wrong!");
            }
        });
    }

    $("#reviewForm").on("submit", function(e) {
        e.preventDefault();
        var datas = $(this).serializeArray();
        var datas_array = {};
        $.map(datas, function(data, cnt) {
            datas_array[data['name']] = data['value'];
        });
        $.ajax({
            url: "ajax.php",
            method: "POST",
            data: {
                "addReview": true,
                "datas": datas_array
            },
            success: function(result) {
                console.log(result);
                loadReviews();
                $("#reviewForm")[0].reset();
            },
            error: function(error) {
                console.log(error);
                alert("Oops, something went wrong");
            }
        })

        // console.log(datas)
    })
</script>

</html>
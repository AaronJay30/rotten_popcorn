<?php

if (isset($_COOKIE['userID'])) {

    if (isset($_COOKIE['role']) == "Admin") {
        header('location:admin_content.php');
    } else {
        header('location:index.php');
    }
}

require "config/db.php";
$db = new myDB();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        // Display an error message
        echo '<script>alert("Email and password are required.");</script>';
    } else {

        $db->select('user', '*', " email = '$email' ");

        $result = $db->res;

        if ($result && md5($password) == $result[0]['password']) {

            // Set cookies
            setcookie('userID', $result[0]['userID'], time() + (86400 * 30), "/");
            setcookie('role', $result[0]['role'], time() + (86400 * 30), "/");

            if ($result[0]['role'] == "Admin") {
                header("Location: admin.php");
            } else {
                header("Location: index.php");
            }
            exit();
        } else {
            echo '<script>alert("Invalid email or password.");</script>';
        }
    }
}
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
    <script src="https://accounts.google.com/gsi/client" async defer></script>
</head>

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

    .loginBtn {
        box-sizing: border-box;
        position: relative;
        /* width: 13em;  - apply for fixed size */
        margin: 0.2em;
        padding: 0 15px 0 46px;
        border: none;
        text-align: left;
        line-height: 34px;
        white-space: nowrap;
        border-radius: 0.2em;
        font-size: 16px;
        color: #FFF;
    }

    .loginBtn:before {
        content: "";
        box-sizing: border-box;
        position: absolute;
        top: 0;
        left: 0;
        width: 34px;
        height: 100%;
    }

    .loginBtn:focus {
        outline: none;
    }

    .loginBtn:active {
        box-shadow: inset 0 0 0 32px rgba(0, 0, 0, 0.1);
    }


    /* Facebook */
    .loginBtn--facebook {
        background-color: #4C69BA;
        background-image: linear-gradient(#4C69BA, #3B55A0);
        /*font-family: "Helvetica neue", Helvetica Neue, Helvetica, Arial, sans-serif;*/
        text-shadow: 0 -1px 0 #354C8C;
    }

    .loginBtn--facebook:before {
        border-right: #364e92 1px solid;
        background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_facebook.png') 6px 6px no-repeat;
    }

    .loginBtn--facebook:hover,
    .loginBtn--facebook:focus {
        background-color: #5B7BD5;
        background-image: linear-gradient(#5B7BD5, #4864B1);
    }


    /* Google */
    .loginBtn--google {
        /*font-family: "Roboto", Roboto, arial, sans-serif;*/
        background: #DD4B39;
    }

    .loginBtn--google:before {
        border-right: #BB3F30 1px solid;
        background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_google.png') 6px 6px no-repeat;
    }

    .loginBtn--google:hover,
    .loginBtn--google:focus {
        background: #E74B37;
    }
</style>

<body>
    

    <div class="absolute right-10 bottom-5">
        <?php
        // Check if the "message" parameter is present in the URL and has the value "success"
        if (isset($_GET['message']) && $_GET['message'] === 'success') {
            echo '
                <div id="toast-interactive" class="w-full max-w-xs p-4 text-gray-500 bg-white rounded-lg shadow dark:bg-gray-800 dark:text-gray-400" role="alert">
                    <div class="flex">
                        <div class="mx-3 text-sm font-normal">
                            <span class="mb-1 text-lg text-gray-900 dark:text-white">Register account successfully</span>
                        </div>
                    </div>
                </div>';
        }
        ?>
    </div>



    <div class="flex flex-col min-h-screen justify-center items-center relative">
        <div class="bg-[#000000bb] py-20 px-20 flex flex-col justify-start items-center w-1/3 gap-y-4">
            <!-- <div class="w-full flex flex-row justify-center">
                <img src="img/RottenPopCorn(Text).png" alt="Logo" class="w-[20rem]">
            </div> -->
            <h1 class="text-white w-full text-left font-bold text-5xl border-b-2 pb-4">Sign In</h1>
            <form action="login.php" method="POST" class="w-full flex flex-col justify-start items-center gap-y-4">
                <div class="flex flex-col justify-start w-full mt-4 gap-y-1">
                    <label for="email" class="text-white font-medium text-xl">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" placeholder="sample@gmail.com" class="rounded-lg p-2.5 bg-gray-700 border border-gray-600 placeholder:text-gray-400 text-white focus:ring-red-900 focus:border-0">
                </div>
                <div class="flex flex-col justify-start w-full gap-y-1">
                    <label for="password" class="text-white font-medium text-xl">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" placeholder="************" class="rounded-lg p-2.5 bg-gray-700 border border-gray-600 placeholder:text-gray-400 text-white focus:ring-red-900 focus:border-0">
                </div>

                <button class="bg-red-900 hover:bg-red-700 p-2.5 w-full mt-7 rounded-lg text-white text-xl font-medium" type="submit" name="login">Sign in</button>

                <h2 class="text-center text-white text-xl hover:text-red-700 pt-4 hover:underline duration-200"><a href="register.php">Doesn't have an account?</a></h2>

                <div class="mt-4 flex items-center w-full justify-center">
                    <div class="border-t flex-1 mx-4"></div>
                    <p class="mx-4 mb-0 text-center font-medium dark:text-white">Or</p>
                    <div class="border-t flex-1 mx-4"></div>
                </div>

                <div class="flex flex-row gap-x-4">
                    <button class="loginBtn loginBtn--facebook">
                        Login with Facebook
                    </button>

                    
                    <div id="g_id_onload"
                        data-client_id="742827345984-ta3h5a37mvhroqvq4b6tcnjd84k81hen"
                    >
                    </div>
                    <div class="g_id_signin" data-type="standard"></div>
                </div>

            </form>
        </div>
    </div>
</body>

<script>
    window.addEventListener('blur', () => {
        document.title = "I miss you comeback 💔 - RottenPopcorn";
    })

    window.addEventListener('focus', () => {
        document.title = "Rotten Popcorn";
    })
</script>

<script>
    // Add JavaScript to hide the toast after 10 seconds
    setTimeout(function() {
        var toast = document.getElementById('toast-interactive');
        if (toast) {
            toast.style.display = 'none';
        }
    }, 3000); // 10 seconds in milliseconds

    function onSignIn(googleUser) {
            var profile = googleUser.getBasicProfile();
            console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
            console.log('Name: ' + profile.getName());
            console.log('Image URL: ' + profile.getImageUrl());
            console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present. 
            window.location.replace('index.php');
    } 
    
</script>

</html>
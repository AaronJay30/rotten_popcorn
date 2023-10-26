<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/x-icon" href="img/RottenPopCorn(LogoOnly).png">
    <title>Rotten Popcorn</title>
</head>

<style>
    body {
        background-image: url('img/bg-image.jpg');
        background-size: cover;
    }

    nav {
        background: rgb(140, 21, 21);
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
</style>

<body>
    <!-- <?php include 'config/loader.php'; ?> -->

    <nav class="w-full py-4 px-8 flex flex-row items-center justify-between relative">
        <a href="index.php" class="logo-container">
            <img src="img/RottenPopCorn(Text).png" alt="Rotten Popcorn" class="h-20">
        </a>

        <ul class="flex flex-row gap-8 text-white">
            <li class="text-lg font-normal hover:text-red-500 py-2.5">
                <a href="">
                    <h1>Movie</h1>
                </a>
            </li>
            <li class="text-lg font-normal hover:text-red-500 py-2.5">
                <a href="">
                    <h1>About</h1>
                </a>
            </li>
            <li class="text-lg font-normal hover:text-red-500 py-2.5">
                <a href="">
                    <h1>Contacts</h1>
                </a>
            </li>
            <li class="text-lg font-semibold hover:text-red-500 bg-white text-black px-8 py-2.5 rounded-full hover:bg-black">
                <a href="" class="">
                    <h1>Sign in</h1>
                </a>
            </li>
        </ul>
    </nav>

    <div class="container bg-red relative p-10 flex mx-auto mt-10 rounded-lg">
        <div class="first-layer">

        </div>
    </div>
</body>

</html>
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

    <!-- <link href="css/flowbite.css" rel="stylesheet" /> -->
    <link href='css/boxicons.min.css' rel='stylesheet'>

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

    #modal {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 10px;
    }
</style>

<body>
    <!-- LOADER -->
    <!-- <?php include 'config/loader.php'; ?> -->

    <!-- BURGER MENU -->
    <div class="absolute left-[-3000px] z-10 h-full w-full duration-500 ease-in-out flex flex-col items-center" id='sidebar'>

        <div class="w-full flex justify-end border-b-4 border-b-white px-10 pt-4 ">
            <img src="img/RottenPopCorn(Text).png" alt="Rotten Popcorn" class="h-20 hover:scale-110 duration-300">
        </div>

        <div class="flex flex-col justify-between w-full h-full">
            <ul class="flex flex-col justify-center items-center text-white mt-10 w-full">
                <li class="text-3xl uppercase duration-300 font-bold hover:text-red-500 hover:bg-white py-10 w-full text-center">
                    <a href="" class="flex flex-row w-full justify-center items-center gap-4">
                        <i class='bx bxs-movie'></i>
                        <h1>Movie</h1>
                    </a>
                </li>
                <li class="text-3xl uppercase duration-300 font-bold hover:text-red-500 hover:bg-white py-10 w-full text-center">
                    <a href="" class="flex flex-row w-full justify-center items-center gap-4">
                        <i class='bx bxs-user'></i>
                        <h1>About</h1>
                    </a>
                </li>
                <li class="text-3xl uppercase duration-300 font-bold hover:text-red-500 hover:bg-white py-10 w-full text-center">
                    <a href="" class="flex flex-row w-full justify-center items-center gap-4">
                        <i class='bx bxs-contact'></i>
                        <h1>Contacts</h1>
                    </a>
                </li>
                <li class="text-3xl uppercase duration-300 font-bold hover:text-red-500 hover:bg-white py-10 w-full text-center">
                    <a href="" class="flex flex-row w-full justify-center items-center gap-4">
                        <i class='bx bxs-cog'></i>
                        <h1>Settings</h1>
                    </a>
                </li>
                <li class="text-3xl uppercase duration-300 font-bold hover:text-red-500 hover:bg-white py-10 w-full text-center">
                    <a href="" class="">
                        <h1>Sign in</h1>
                    </a>
                </li>

            </ul>

            <div class="w-full bg-red-900 py-4 px-8 gap-10 flex flex-row items-center">
                <div class="w-auto">
                    <img src="img/admin.png" alt="" class="h-24 rounded-full">
                </div>
                <div class="flex flex-col text-white gap-1 w-full">
                    <h1 class="text-2xl font-bold uppercase border-b-2 border-b-white w-full">Full Name</h1>
                    <span>admin@gmail.com</span>
                </div>
            </div>
        </div>
    </div>

    <label class="buttons__burger hidden max-[600px]:block absolute z-20 top-[30px] left-8 duration-500" for="burger">
        <input type="checkbox" id="burger">
        <span></span>
        <span></span>
        <span></span>
    </label>

    <!-- NAVBAR -->
    <nav class="w-full py-1 px-8 flex flex-row items-center justify-between max-[600px]:justify-end relative">
        <a href="admin_content.php" class="logo-container">
            <img src="img/RottenPopCorn(Text).png" alt="Rotten Popcorn" class="h-20 max-[600px]:hidden">
            <img src="img/RottenPopCorn(Logo).png" alt="Rotten Popcorn" class="h-20 max-[600px]:block hidden">
        </a>

        <div class="flex flex-row gap-8 items-center relative z-10">
            <ul class="max-[600px]:hidden flex flex-row gap-8 items-center text-white">
                <li class="text-lg font-normal hover:text-red-500 py-2.5">
                    <a href="admin_content.php">
                        <h1>Dashboard</h1>
                    </a>
                </li>
                <li class="text-lg font-normal hover:text-red-500 py-2.5">
                    <a href="admin_content.php">
                        <h1>Content Management</h1>
                    </a>
                </li>
                <li class="text-lg font-normal hover:text-red-500 py-2.5">
                    <a href="admin_content.php">
                        <h1>User Management</h1>
                    </a>
                </li>
            </ul>

            <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="left-start" class="max-[600px]:hidden w-10 h-10 rounded-full cursor-pointer bg-white" src="img/admin.png" alt="User dropdown">

            <!-- Dropdown Menu from clicking user icon -->
            <div id="userDropdown" class="relative hidden bg-white divide-y divide-red-300 rounded-lg shadow w-1/5">
                <div class="px-4 py-3 text-sm text-red-900 ">
                    <div class="font-bold">Administrator</div>
                    <div class="font-medium truncate">name@admin.com</div>
                </div>

                <div class="py-1">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-500 hover:text-white duration-300">Settings</a>
                </div>
                <div class="py-1">
                    <a href="index.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-500 hover:text-white duration-300">Sign out</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- CONTENT MANAGEMENT SECTION -->
    <div class="container relative p-10 mx-auto mt-24 rounded-lg overflow-auto border-4 border-white">
        <div class="flex justify-center items-center w-full z-1 border-b-4 border-white pb-8 border-dotted">

            <!-- List of Movies -->
            <div>
                <h1 class="text-white font-bold text-6xl uppercase">
                    Available Movies
                    <button onclick="modal.showModal(modal)"><i class='bx bx-plus-circle bx-tada text-white'></i></button>
                </h1>

                <!-- Main modal -->
                <dialog id="modal" class="p-5 backdrop:bg-black backdrop:opacity-80 rounded-2xl w-3/5  max-[1000px]:w-4/5  max-[600px]:w-full">
                <div class="relative w-full p-10 grid grid-cols-3 max-[1000px]:grid-cols-1 items-center gap-x-8 max-h-full">

                    <!-- Column 1 for Movie Poster Column 2 for Movie Info -->
                    <!-- Movie Poster (size 27" x 40") -->
                    <div class="flex items-center justify-center w-full col-span-1">
                        <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 ">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                            </div>
                            <input id="dropzone-file" type="file" class="hidden" />
                        </label>
                    </div>

                    <!-- Movie Details -->
                    <form class="col-span-2">
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="movie-title" class="block mb-2 text-sm font-medium text-gray-900">Movie Title</label>
                                <input type="text" id="movie-title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Movie Title" required>
                            </div>
                            <div>
                                <label for="movie-release" class="block mb-2 text-sm font-medium text-gray-900">Movie Release</label>
                                <input type="text" id="movie-release" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Movie Release" required>
                            </div>
                            <div>
                                <label for="movie-director" class="block mb-2 text-sm font-medium text-gray-900">Movie Director</label>
                                <input type="text" id="movie-director" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Movie Director" required>
                            </div>
                            <div>
                                <label for="movie-summary" class="block mb-2 text-sm font-medium text-gray-900">Movie Summary</label>
                                <input type="text" id="movie-summary" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Movie Summary" required>
                            </div>
                            <!-- <div>
                                <label for="website" class="block mb-2 text-sm font-medium text-gray-900">Website URL</label>
                                <input type="url" id="website" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="flowbite.com" required>
                            </div>
                            <div>
                                <label for="visitors" class="block mb-2 text-sm font-medium text-gray-900">Unique visitors (per month)</label>
                                <input type="number" id="visitors" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="" required>
                            </div> -->
                        </div>
                        
                        <div class="mb-6">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email address</label>
                            <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="john.doe@company.com" required>
                        </div>
                        <div class="mb-6">
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="•••••••••" required>
                        </div>
                        <div class="mb-6">
                            <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm password</label>
                            <input type="password" id="confirm_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="•••••••••" required>
                        </div>
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                        <button onclick="modal.close(modal)" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Cancel</button>
                    </form>
                </div>
                </dialog>
            </div>

            <!-- Search -->
            <!-- <form class="flex items-center flex-1">
                <label for="simple-search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2" />
                        </svg>
                    </div>
                    <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" placeholder="What movie are you looking for?" required>
                </div>
                <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
            </form> -->
        </div>

        <!-- FILTER SECTION -->
        <!-- <div class="flex flex-row justify-evenly flex-wrap w-full z-1 border-b-4 border-white py-2 border-dotted"> -->
        <div class="flex flex-row justify-evenly flex-wrap w-full z-1 border-b-4 border-white py-2 border-dotted">

            <!-- Dropdown 1 -->
            <div class="flex justify-center items-center">

                <button data-dropdown-toggle="dropdown-sort" class="w-full text-center text-gray-900 flex-shrink-0 z-10 inline-flex justify-center items-center py-2.5 px-4 rounded text-sm font-medium text-center text-gray-500 bg-gray-100 border border-gray-300 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100" type="button">
                    SORT
                    <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <div id="dropdown-sort" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-1/5">
                    <ul class="py-2 text-sm text-gray-700" aria-labelledby="states-button">
                        <li>
                            <button type="button" class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-300 duration-100">
                                Most Popular
                            </button>
                        </li>
                        <li>
                            <button type="button" class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-300 duration-100">
                                Newest
                            </button>
                        </li>
                        <li>
                            <button type="button" class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-300 duration-100">
                                A → Z
                            </button>
                        </li>
                        <li>
                            <button type="button" class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-300 duration-100">
                                Audience Score (Highest)
                            </button>
                        </li>
                        <li>
                            <button type="button" class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-300 duration-100">
                                Audience Score (Lowest)
                            </button>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Dropdown 2 -->
            <div class="flex justify-center items-center">
                <button data-dropdown-toggle="dropdown-genre" class="w-full text-center text-gray-900 flex-shrink-0 z-10 inline-flex justify-center items-center py-2.5 px-4 rounded text-sm font-medium text-center text-gray-500 bg-gray-100 border border-gray-300 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100" type="button">
                    GENRE
                    <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                    </svg>
                </button>

                <div id="dropdown-genre" class="z-10 hidden bg-white rounded-lg shadow w-1/5">
                    <ul class="h-48 px-3 pb-3 overflow-y-auto text-sm text-gray-700" aria-labelledby="dropdownSearchButton">
                        <li>
                            <div class="flex items-center p-2 rounded text-gray-900">
                                <input id="checkbox-item-11" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">
                                <label for="checkbox-item-11" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Action</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded text-gray-900">
                                <input checked id="checkbox-item-12" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">
                                <label for="checkbox-item-12" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Adventure</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded text-gray-900">
                                <input id="checkbox-item-13" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">
                                <label for="checkbox-item-13" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Animation</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded text-gray-900">
                                <input id="checkbox-item-14" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">
                                <label for="checkbox-item-14" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Anime</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded text-gray-900">
                                <input id="checkbox-item-15" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">
                                <label for="checkbox-item-15" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Biography</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded text-gray-900">
                                <input id="checkbox-item-16" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">
                                <label for="checkbox-item-16" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Comedy</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded text-gray-900">
                                <input id="checkbox-item-17" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">
                                <label for="checkbox-item-17" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Crime</label>
                            </div>
                        </li>
                    </ul>

                    <div class="grid grid-cols-2">
                        <a href="#" class="flex items-center p-3 text-sm font-medium text-red-600 border-t border-gray-200 rounded-b-lg bg-gray-50 dark:border-gray-600 text-gray-900 dark:text-red-500 hover:underline">
                            <svg class="w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                <path d="M6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Zm11-3h-6a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2Z" />
                            </svg>
                            CLEAR ALL
                        </a>
                        <a href="#" class="flex items-center p-3 text-sm font-medium text-red-600 border-t border-gray-200 rounded-b-lg bg-gray-50 dark:border-gray-600 text-gray-900 dark:text-red-500 hover:underline">
                            <svg class="w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                <path d="M6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Zm11-3h-6a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2Z" />
                            </svg>
                            APPLY
                        </a>
                    </div>

                </div>
            </div>

            <!-- Dropdown 3 -->
            <div class="flex justify-center items-center">
                <button data-dropdown-toggle="dropdown-rating" class="w-full text-center text-gray-900 flex-shrink-0 z-10 inline-flex justify-center items-center py-2.5 px-4 rounded text-sm font-medium text-center text-gray-500 bg-gray-100 border border-gray-300 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100" type="button">
                    RATING
                    <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                    </svg>
                </button>

                <div id="dropdown-rating" class="z-10 hidden bg-white rounded-lg shadow w-1/5">
                    <ul class="h-48 px-3 pb-3 overflow-y-auto text-sm text-gray-700" aria-labelledby="dropdownSearchButton">
                        <li>
                            <div class="flex items-center p-2 rounded text-gray-900">
                                <input id="checkbox-item-11" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">
                                <label for="checkbox-item-11" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">G</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded text-gray-900">
                                <input checked id="checkbox-item-12" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">
                                <label for="checkbox-item-12" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">PG</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded text-gray-900">
                                <input id="checkbox-item-13" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">
                                <label for="checkbox-item-13" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">PG-13</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded text-gray-900">
                                <input id="checkbox-item-14" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">
                                <label for="checkbox-item-14" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">R</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded text-gray-900">
                                <input id="checkbox-item-15" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">
                                <label for="checkbox-item-15" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">NC-17</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded text-gray-900">
                                <input id="checkbox-item-16" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">
                                <label for="checkbox-item-16" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">NOT RATED</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded text-gray-900">
                                <input id="checkbox-item-17" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">
                                <label for="checkbox-item-17" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">UNRATED</label>
                            </div>
                        </li>
                    </ul>

                    <div class="grid grid-cols-2">
                        <a href="#" class="flex items-center p-3 text-sm font-medium text-red-600 border-t border-gray-200 rounded-b-lg bg-gray-50 dark:border-gray-600 text-gray-900 dark:text-red-500 hover:underline">
                            <svg class="w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                <path d="M6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Zm11-3h-6a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2Z" />
                            </svg>
                            CLEAR ALL
                        </a>
                        <a href="#" class="flex items-center p-3 text-sm font-medium text-red-600 border-t border-gray-200 rounded-b-lg bg-gray-50 dark:border-gray-600 text-gray-900 dark:text-red-500 hover:underline">
                            <svg class="w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                <path d="M6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Zm11-3h-6a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2Z" />
                            </svg>
                            APPLY
                        </a>
                    </div>

                </div>
            </div>

            <!-- Dropdown 4 -->
            <div class="flex justify-center items-center">
                <button data-dropdown-toggle="dropdown-score" class="w-full text-center text-gray-900 flex-shrink-0 z-10 inline-flex justify-center items-center py-2.5 px-4 rounded text-sm font-medium text-center text-gray-500 bg-gray-100 border border-gray-300 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100" type="button">
                    AUDIENCE SCORE
                    <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                    </svg>
                </button>

                <div id="dropdown-score" class="z-10 hidden bg-white rounded-lg shadow w-1/5">
                    <ul class="h-48 px-3 pb-3 overflow-y-auto text-sm text-gray-700" aria-labelledby="dropdownSearchButton">
                        <li>
                            <div class="flex items-center p-2 rounded text-gray-900">
                                <input id="checkbox-item-11" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">
                                <label for="checkbox-item-11" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">G</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded text-gray-900">
                                <input checked id="checkbox-item-12" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">
                                <label for="checkbox-item-12" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">PG</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded text-gray-900">
                                <input id="checkbox-item-13" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">
                                <label for="checkbox-item-13" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">PG-13</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded text-gray-900">
                                <input id="checkbox-item-14" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">
                                <label for="checkbox-item-14" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">R</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded text-gray-900">
                                <input id="checkbox-item-15" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">
                                <label for="checkbox-item-15" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">NC-17</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded text-gray-900">
                                <input id="checkbox-item-16" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">
                                <label for="checkbox-item-16" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">NOT RATED</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded text-gray-900">
                                <input id="checkbox-item-17" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">
                                <label for="checkbox-item-17" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">UNRATED</label>
                            </div>
                        </li>
                    </ul>

                    <div class="grid grid-cols-2">
                        <a href="#" class="flex items-center p-3 text-sm font-medium text-red-600 border-t border-gray-200 rounded-b-lg bg-gray-50 dark:border-gray-600 text-gray-900 dark:text-red-500 hover:underline">
                            <svg class="w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                <path d="M6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Zm11-3h-6a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2Z" />
                            </svg>
                            CLEAR ALL
                        </a>
                        <a href="#" class="flex items-center p-3 text-sm font-medium text-red-600 border-t border-gray-200 rounded-b-lg bg-gray-50 dark:border-gray-600 text-gray-900 dark:text-red-500 hover:underline">
                            <svg class="w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                <path d="M6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Zm11-3h-6a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2Z" />
                            </svg>
                            APPLY
                        </a>
                    </div>
                </div>
            </div>

            <!-- Dropdown 5 -->
            <div class="flex justify-center items-center">
                <button class="w-full text-center text-white flex-shrink-0 z-10 inline-flex justify-center items-center py-2.5 px-4 rounded text-sm font-medium bg-red-500 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-gray-100" type="button">
                    RESET FILTERS
                    <!-- <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                    </svg> -->
                </button>
            </div>

            <!--  -->
            <div class="flex justify-center items-center w-[30rem]">
                <form class="flex items-center flex-1">
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2" />
                            </svg>
                        </div>
                        <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" placeholder="What movie are you looking for?" required>
                    </div>
                    <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </form>
            </div>

            <!-- <div class="flex justify-center items-center">
                <form class="flex items-center">   
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2"/>
                            </svg>
                        </div>
                        <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="What movie are you looking for?" required>
                    </div>
                    <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </form>
            </div> -->
        </div>

        <div class="grid grid-cols-6 gap-4 max-[1200px]:grid-cols-2 max-[600px]:grid-cols-1 w-full z-1 border-b-4 border-white py-8 border-dotted">
            <!-- Movie Card 1 -->
            <div class="w-full max-w-sm bg-[#F0EAD6] border border-gray-200 rounded-lg shadow group">
                <!-- <div class="w-full max-w-sm bg-[#F0EAD6] border border-gray-200 rounded-lg shadow group"> -->

                <!-- <div class="relative overflow-hidden"> -->
                <!-- Movie Poster -->
                <a href="#" class="">
                    <div class="relative w-full">
                        <img class=" p-3 rounded-t-lg relative z-0 group-hover:blur-sm duration-100" src="./img/posters/parasite.jpg" alt="Movie Poster" class="" />

                        <div class="absolute w-full p-3 py-5 flex flex-col gap-y-2 justify-evenly duration-300 bottom-1 opacity-0 group-hover:bottom-[40%] group-hover:opacity-100">
                            <!-- Redirect to Detailed Info of Movie -->
                            <button onclick="window.location.href='admin_movie.php'" class="bg-gray-900 text-white p-2.5 hover:bg-gray-700">See Reviews</button>
                            <!-- <button class="bg-gray-900 text-white p-2.5 hover:bg-gray-700">Edit Info</button> -->
                        </div>

                    </div>

                    <div class="px-2 pb-4">
                        <!-- Movie Title -->
                        <a href="#">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-gray-900 text-center">Parasite (2019)</h5>
                        </a>
                    </div>
                </a>

            </div>

            <!-- Movie Card 2 -->
            <div class="w-full max-w-sm bg-[#F0EAD6] border border-gray-200 rounded-lg shadow">
                <!-- Movie Poster -->
                <a href="#">
                    <img class="p-3 rounded-t-lg" src="./img/posters/eeaao.jpg" alt="Movie Poster" />
                </a>

                <div class="px-2 pb-4">
                    <!-- Movie Title -->
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-gray-900 text-center">Everything Everywhere All At Once (2022)</h5>
                    </a>
                </div>
            </div>

            <!-- Movie Card 3 -->
            <div class="w-full max-w-sm bg-[#F0EAD6] border border-gray-200 rounded-lg shadow">
                <!-- Movie Poster -->
                <a href="#">
                    <img class="p-3 rounded-t-lg" src="./img/posters/barbie2023.jpg" alt="Movie Poster" />
                </a>

                <div class="px-2 pb-4">
                    <!-- Movie Title -->
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-gray-900 text-center">Barbie (2023)</h5>
                    </a>
                </div>
            </div>

            <!-- Movie Card 4 -->
            <div class="w-full max-w-sm bg-[#F0EAD6] border border-gray-200 rounded-lg shadow">
                <!-- Movie Poster -->
                <a href="#">
                    <img class="p-3 rounded-t-lg" src="./img/posters/fight-club.jpg" alt="Movie Poster" />
                </a>

                <div class="px-2 pb-4">
                    <!-- Movie Title -->
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-gray-900 text-center">Fight Club (1999)</h5>
                    </a>
                </div>
            </div>

            <!-- Movie Card 5 -->
            <div class="w-full max-w-sm bg-[#F0EAD6] border border-gray-200 rounded-lg shadow">
                <!-- Movie Poster -->
                <a href="#">
                    <img class="p-3 rounded-t-lg" src="./img/posters/joker.jpg" alt="Movie Poster" />
                </a>

                <div class="px-2 pb-4">
                    <!-- Movie Title -->
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-gray-900 text-center">Joker (2019)</h5>
                    </a>
                </div>
            </div>

            <!-- Movie Card 6 -->
            <div class="w-full max-w-sm bg-[#F0EAD6] border border-gray-200 rounded-lg shadow">
                <!-- Movie Poster -->
                <a href="#">
                    <img class="p-3 rounded-t-lg" src="./img/posters/spider-man-itsv.jpg" alt="Movie Poster" />
                </a>

                <div class="px-2 pb-4">
                    <!-- Movie Title -->
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-gray-900 text-center">Spider-Man: Into The Spider-Verse (2018)</h5>
                    </a>
                </div>
            </div>

            <!-- Movie Card 7 -->
            <div class="w-full max-w-sm bg-[#F0EAD6] border border-gray-200 rounded-lg shadow">
                <!-- Movie Poster -->
                <a href="#">
                    <img class="p-3 rounded-t-lg" src="./img/posters/knives-out.jpg" alt="Movie Poster" />
                </a>

                <div class="px-2 pb-4">
                    <!-- Movie Title -->
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-gray-900 text-center">Knives Out (2019)</h5>
                    </a>
                </div>
            </div>

        </div>

    </div>
</body>

<!-- SCRIPT -->
<script>
    $('#burger').on('click', () => {
        $('#sidebar').toggleClass('left-[0px] ');
        $('.buttons__burger').toggleClass('top-[40px] ');
    })

    window.addEventListener('blur', () => {
        document.title = "I miss you comeback 💔 - RottenPopcorn";
    })

    window.addEventListener('focus', () => {
        document.title = "Admin | Rotten Popcorn";
    })

</script>

</html>
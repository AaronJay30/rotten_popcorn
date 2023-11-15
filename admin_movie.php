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
                    <img src="img/sample.webp" alt="" class="h-24 rounded-full">
                </div>
                <div class="flex flex-col text-white gap-1 w-full">
                    <h1 class="text-2xl font-bold uppercase border-b-2 border-b-white w-full">Full Name</h1>
                    <span>aaaaarondalla@gmail.com</span>
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
        <a href="admin.php" class="logo-container">
            <img src="img/RottenPopCorn(Text).png" alt="Rotten Popcorn" class="h-20 max-[600px]:hidden">
            <img src="img/RottenPopCorn(Logo).png" alt="Rotten Popcorn" class="h-20 max-[600px]:block hidden">
        </a>

        <div class="flex flex-row gap-8 items-center relative z-10">
            <ul class="max-[600px]:hidden flex flex-row gap-8 items-center text-white">
                <li class="text-lg font-normal hover:text-red-500 py-2.5">
                    <a href="admin.php">
                        <h1>Dashboard</h1>
                    </a>
                </li>
                <li class="text-lg font-normal hover:text-red-500 py-2.5">
                    <a href="admin_content.php">
                        <h1>Content Management</h1>
                    </a>
                </li>
                <li class="text-lg font-normal hover:text-red-500 py-2.5">
                    <a href="admin_user.php">
                        <h1>User Management</h1>
                    </a>
                </li>
                <!-- <li class="text-lg font-semibold hover:text-red-500 bg-white text-black px-8 py-2.5 rounded-full hover:bg-black">
                    <a href="" class="">
                        <h1>Sign in</h1>
                    </a>
                </li> -->
                <!-- <button type="button" class="mb-2 md:mb-0 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Tooltip bottom</button> -->

            </ul>

            <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="left-start" class="max-[600px]:hidden w-10 h-10 rounded-full cursor-pointer bg-white" src="img/admin.png" alt="User dropdown">
            <!-- Dropdown Menu from clicking user icon -->
            <div id="userDropdown" class="relative hidden bg-white divide-y divide-red-300 rounded-lg shadow w-44">
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

    <!-- CONTAINER -->
    <div class="container relative p-10 mx-auto mt-24 rounded-lg overflow-auto border-4 border-white">
        <!-- <div class="flex justify-center items-center w-full z-1 border-b-4 border-white pb-8 border-dotted"> -->
            <!-- <div class="col-span-2  max-[600px]:col-span-1"> -->
                    
        <!-- </div> -->

        <div class="grid grid-cols-2 gap-2 max-[1200px]:grid-cols-2 max-[600px]:grid-cols-1 w-full z-1 border-b-4 border-white py-8">
            
            <!-- <div class="flex flex-col items-center justify-center"> -->
                <!-- <img src="./img/posters/parasite.jpg" alt="Movie Poster" class="w-60 h-80"> -->
                <!-- <img src="./img/posters/parasite.jpg" alt="Movie Poster" class="w-60 h-90"> -->
                <!-- <button id="showBtn" type="button" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 my-2">Watch Trailer</button> -->

                <!-- Dropdown Overlay -->
                <!-- <input type="file" class="absolute inset-0 opacity-0 cursor-pointer hover:blur-sm" style="width: 100%; height: 100%;" />
            </div> -->

            <div class="flex flex-col items-center justify-center relative">
            <!-- Movie Poster -->
            <div class="flowbite-file-input-container">
                <label for="dropzone-file" class="flex flex-col items-center justify-center w-60 h-90 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600 transition-transform transform hover:scale-105">
                    <img src="./img/posters/parasite.jpg" alt="Movie Poster" class="w-full h-full object-cover rounded-lg" id="hovered-image">

                    <!-- File Input Overlay -->
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                        </svg>
                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                    </div>

                    <input id="dropzone-file" type="file" class="hidden" />
                </label>
            </div>
        </div>

            <div class="flex flex-col items-center justify-center">
                <h1 class="flex items-center text-5xl font-extrabold text-white mb-8">Parasite<span class="bg-blue-100 text-blue-800 text-2xl font-semibold me-2 px-2.5 py-0.5 rounded ms-2">2019</span></h1>

                <form>
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="floating_first_name" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-600 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First name</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="floating_last_name" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last name</label>
                    </div>
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
                </form>

            </div>

            
        </div>
        
        
        <div class="flex flex-col w-full z-1 py-8">

            <div class="flex flex-row items-center justify-center">
                <h3 class="text-3xl font-bold text-white">Ratings and Reviews</h3>
            </div>

            <div class="grid grid-cols-2 m-6 p-2">
                <!-- Rating and Review 1 -->
                <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 m-1 md:p-12">
                <article>
                    <div class="flex items-center mb-4">
                        <img class="w-10 h-10 me-4 rounded-full" src="./img/profile/sample.webp" alt="">
                        <div class="font-medium dark:text-white">
                            <p>Aaron Jay <time datetime="2014-08-16 19:00" class="block text-sm text-gray-500 dark:text-gray-400">Reviewed on August 2014</time></p>
                        </div>
                    </div>
                    <div class="flex items-center mb-1 space-x-1 rtl:space-x-reverse">
                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 text-gray-300 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <h3 class="ms-2 text-sm font-semibold text-gray-900 dark:text-white">Thinking to buy another one!</h3>
                    </div>
                    <p class="mb-2 text-gray-500 dark:text-gray-400">This is my third Invicta Pro Diver. They are just fantastic value for money. This one arrived yesterday and the first thing I did was set the time, popped on an identical strap from another Invicta and went in the shower with it to test the waterproofing.... No problems.</p>
                    <aside>
                        <div class="flex items-center mt-3">
                            <a href="#" class="text-white bg-red-800 border border-gray-600 focus:outline-none hover:bg-gray-700 focus:ring-4 focus:ring-gray-700 font-medium rounded-lg text-xs px-2 py-1.5">Delete</a>
                            <a href="#" class="ps-4 text-sm font-medium text-blue-600 hover:underline dark:text-blue-500 border-gray-600 ms-4 border-s md:mb-0"><i class='bx bx-flag'></i> Mark as Spoiler</a>
                        </div>
                    </aside>
                </article>
                </div>
                
                <!-- Rating and Review 2 -->
                <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 m-1 md:p-12">
                <article>
                    <div class="flex items-center mb-4">
                        <img class="w-10 h-10 me-4 rounded-full" src="./img/profile/sample.webp" alt="">
                        <div class="font-medium dark:text-white">
                            <p>Arjay <time datetime="2014-08-16 19:00" class="block text-sm text-gray-500 dark:text-gray-400">Reviewed on August 2014</time></p>
                        </div>
                    </div>
                    <div class="flex items-center mb-1 space-x-1 rtl:space-x-reverse">
                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 text-gray-300 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <h3 class="ms-2 text-sm font-semibold text-gray-900 dark:text-white">Thinking to buy another one!</h3>
                    </div>
                    <p class="mb-2 text-gray-500 dark:text-gray-400">This is my third Invicta Pro Diver. They are just fantastic value for money. This one arrived yesterday and the first thing I did was set the time, popped on an identical strap from another Invicta and went in the shower with it to test the waterproofing.... No problems.</p>
                    <aside>
                        <div class="flex items-center mt-3">
                            <a href="#" class="text-white bg-red-800 border border-gray-600 focus:outline-none hover:bg-gray-700 focus:ring-4 focus:ring-gray-700 font-medium rounded-lg text-xs px-2 py-1.5">Delete</a>
                            <a href="#" class="ps-4 text-sm font-medium text-blue-600 hover:underline dark:text-blue-500 border-gray-600 ms-4 border-s md:mb-0"><i class='bx bx-flag'></i> Mark as Spoiler</a>
                        </div>
                    </aside>
                </article>
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
        document.title = "Rotten Popcorn";
    })

    document.getElementById("showBtn").addEventListener("click", function() {
        var trailer = document.getElementById("container");
        if (trailer.style.display !== "block") {
            trailer.style.display = "block"; // Show the div
        } else {
            trailer.style.display = "none";
        }
    });

</script>

</html>
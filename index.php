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
    <!-- <?php include 'config/loader.php'; ?> -->

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

    <nav class="w-full py-1 px-8 flex flex-row items-center justify-between max-[600px]:justify-end relative">


        <a href="index.php" class="logo-container">
            <img src="img/RottenPopCorn(Text).png" alt="Rotten Popcorn" class="h-20 max-[600px]:hidden">
            <img src="img/RottenPopCorn(Logo).png" alt="Rotten Popcorn" class="h-20 max-[600px]:block hidden">
        </a>

        <!-- <div class="ml-[100px] max-[1000px]:ml-0 max-[600px]:hidden">
            <a href="">
                <img src="img/sample.webp" alt="" class="h-16 rounded-full z-10" data-tooltip-target="tooltip-bottom" data-tooltip-placement="bottom">
                <div id="tooltip-bottom" role="tooltip" style="z-index: 100;" class="absolute text-center w-auto invisible inline-block px-3 py-2 text-sm font-medium text-gray-900 bg-white rounded-lg shadow-sm opacity-0 tooltip transition-opacity duration-500">
                    <h1 class="text-md font-bold uppercase border-b-2 border-b-black w-full">Full Name</h1>
                    <span class="text-sm">aaaaarondalla@gmail.com</span>
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
            </a>
        </div> -->
        <div class="flex flex-row gap-8 items-center relative z-10">


            <ul class="max-[600px]:hidden flex flex-row gap-8 items-center text-white">
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
                <!-- <li class="text-lg font-semibold hover:text-red-500 bg-white text-black px-8 py-2.5 rounded-full hover:bg-black">
                    <a href="" class="">
                        <h1>Sign in</h1>
                    </a>
                </li> -->
                <!-- <button type="button" class="mb-2 md:mb-0 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Tooltip bottom</button> -->

            </ul>

            <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="left-start" class="max-[600px]:hidden w-10 h-10 rounded-full cursor-pointer" src="img/sample.webp" alt="User dropdown">

            <!-- Dropdown menu -->
            <div id="userDropdown" class="relative hidden bg-white divide-y divide-red-300 rounded-lg shadow w-44">
                <div class="px-4 py-3 text-sm text-red-900 ">
                    <div class="font-bold">Bonnie Green</div>
                    <div class="font-medium truncate">name@flowbite.com</div>
                </div>

                <div class="py-1">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-500 hover:text-white duration-300">Settings</a>
                </div>
                <div class="py-1">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-500 hover:text-white duration-300">Sign out</a>
                </div>
            </div>
        </div>

    </nav>

    <div class="container relative p-10 flex mx-auto mt-24 rounded-lg overflow-auto border-4 border-white">
        <div class="first-layer grid grid-cols-4 gap-4 max-[1200px]:grid-cols-2 max-[600px]:grid-cols-1 w-full z-1 border-b-4 border-white pb-8 border-dotted">
            <div class="col-span-2  max-[600px]:col-span-1">
                <div id="animation-carousel" class="relative w-full" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <h1 class="text-white font-bold text-xl uppercase">Featured Movies</h1>
                    <a href="">
                        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                            <!-- Item 1 -->
                            <div class="hidden duration-200 ease-linear group cursor-pointer" data-carousel-item data-carousel-item="active">
                                <img src="https://ychef.files.bbci.co.uk/976x549/p04dgkm4.jpg" class="absolute block w-full group-hover:scale-75 duration-300 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                                <div class="absolute bg-[#ff1621bb] shadow-lg px-10 py-4 -bottom-[45%] max-[600px]:-bottom-[70%] group-hover:bottom-0 duration-300 w-full flex flex-col gap-y-4">
                                    <div class="flex flex-row max-[600px]:flex-col border-b-2 border-b-white justify-between items-center">
                                        <h1 class="text-white font-bold text-3xl max-[600px]:text-lg pb-2 uppercase opacity-100">BORAT</h1>
                                        <div class="pb-2 text-lg text-white font-semibold uppercase flex flex-row items-center gap-3">
                                            <img src="img/popcorn.png" class="w-7"> </img>
                                            <span class="">100% Rotten Popcorn</span>
                                        </div>
                                    </div>
                                    <div class="tags max-[600px]:hidden flex flex-row w-full gap-4 items-center">
                                        <span class="bg-white text-red-900 font-semibold text-md px-2 py-1 rounded-lg hover:bg-red-900 hover:text-white duration-300 cursor-pointer">
                                            Comedy
                                        </span>
                                        <span class="bg-white text-red-900 font-semibold text-md px-2 py-1 rounded-lg hover:bg-red-900 hover:text-white duration-300 cursor-pointer">
                                            Documentary
                                        </span>
                                        <span class="bg-white text-red-900 font-semibold text-md px-2 py-1 rounded-lg hover:bg-red-900 hover:text-white duration-300 cursor-pointer">
                                            Jumpscare
                                        </span>
                                    </div>
                                    <div class="flex flex-row flex-wrap w-full gap-x-8 justify-between max-[600px]:hidden">
                                        <div class="text-md text-white flex flex-row gap-2">
                                            <h1 class="font-semibold uppercase">Director:</h1>
                                            <span>Larry Charles</span>
                                        </div>
                                        <div class="text-md text-white flex flex-row gap-2">
                                            <h1 class="font-semibold uppercase">Writers:</h1>
                                            <span>Sacha Baron, Cohen Anthony Hines, Peter Baynham</span>
                                        </div>
                                        <div class="text-md text-white flex flex-row gap-2">
                                            <h1 class="font-semibold uppercase">Cast:</h1>
                                            <span>Sacha Baron Cohen as Borat</span>
                                        </div>
                                    </div>
                                    <div class="w-full text-md text-white flex flex-col">
                                        <h1 class="font-semibold uppercase">Synopsis:</h1>
                                        <p>Kazakh TV talking head Borat is dispatched to the United States to report on the greatest country in the world. With a documentary crew in tow, Borat becomes more interested in locating and marrying Pamela Anderson.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 2 -->
                            <div class="hidden duration-200 ease-linear group cursor-pointer" data-carousel-item>
                                <img src="https://i.ytimg.com/vi/fzFHMhsTdf0/maxresdefault.jpg" class="absolute group-hover:scale-75 duration-300 block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                                <div class="absolute bg-[#ff1621bb] shadow-lg px-10 py-4 -bottom-[45%] max-[600px]:-bottom-[70%] group-hover:bottom-0 duration-300 w-full flex flex-col gap-y-4">
                                    <div class="flex flex-row max-[600px]:flex-col border-b-2 border-b-white justify-between items-center">
                                        <h1 class="text-white font-bold text-3xl max-[600px]:text-lg pb-2 uppercase opacity-100">BORAT 2</h1>
                                        <div class="pb-2 text-lg text-white font-semibold uppercase flex flex-row items-center gap-3">
                                            <img src="img/popcorn.png" class="w-7"> </img>
                                            <span class="">100% Rotten Popcorn</span>
                                        </div>
                                    </div>
                                    <div class="tags max-[600px]:hidden flex flex-row w-full gap-4 items-center">
                                        <span class="bg-white text-red-900 font-semibold text-md px-2 py-1 rounded-lg hover:bg-red-900 hover:text-white duration-300 cursor-pointer">
                                            Comedy
                                        </span>
                                        <span class="bg-white text-red-900 font-semibold text-md px-2 py-1 rounded-lg hover:bg-red-900 hover:text-white duration-300 cursor-pointer">
                                            Documentary
                                        </span>
                                        <span class="bg-white text-red-900 font-semibold text-md px-2 py-1 rounded-lg hover:bg-red-900 hover:text-white duration-300 cursor-pointer">
                                            Jumpscare
                                        </span>
                                    </div>
                                    <div class="flex flex-row flex-wrap w-full gap-x-8 justify-between max-[600px]:hidden">
                                        <div class="text-md text-white flex flex-row gap-2">
                                            <h1 class="font-semibold uppercase">Director:</h1>
                                            <span>Larry Charles</span>
                                        </div>
                                        <div class="text-md text-white flex flex-row gap-2">
                                            <h1 class="font-semibold uppercase">Writers:</h1>
                                            <span>Sacha Baron, Cohen Anthony Hines, Peter Baynham</span>
                                        </div>
                                        <div class="text-md text-white flex flex-row gap-2">
                                            <h1 class="font-semibold uppercase">Cast:</h1>
                                            <span>Sacha Baron Cohen as Borat</span>
                                        </div>
                                    </div>
                                    <div class="w-full text-md text-white flex flex-col">
                                        <h1 class="font-semibold uppercase">Synopsis:</h1>
                                        <p>Kazakh TV talking head Borat is dispatched to the United States to report on the greatest country in the world. With a documentary crew in tow, Borat becomes more interested in locating and marrying Pamela Anderson.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 3 -->
                            <div class="hidden duration-200 ease-linear group cursor-pointer" data-carousel-item>
                                <img src="https://www.un.org/sites/un2.un.org/files/field/image/dictator_quad-1024x768.jpg" class="absolute group-hover:scale-75 duration-300 block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                                <div class="absolute bg-[#ff1621bb] shadow-lg px-10 py-4 -bottom-[45%] max-[600px]:-bottom-[70%] group-hover:bottom-0 duration-300 w-full flex flex-col gap-y-4">
                                    <div class="flex flex-row max-[600px]:flex-col border-b-2 border-b-white justify-between items-center">
                                        <h1 class="text-white font-bold text-3xl max-[600px]:text-lg pb-2 uppercase opacity-100">The Dicktator</h1>
                                        <div class="pb-2 text-lg text-white font-semibold uppercase flex flex-row items-center gap-3">
                                            <img src="img/popcorn.png" class="w-7"> </img>
                                            <span class="">100% Rotten Popcorn</span>
                                        </div>
                                    </div>
                                    <div class="tags max-[600px]:hidden flex flex-row w-full gap-4 items-center">
                                        <span class="bg-white text-red-900 font-semibold text-md px-2 py-1 rounded-lg hover:bg-red-900 hover:text-white duration-300 cursor-pointer">
                                            Comedy
                                        </span>
                                        <span class="bg-white text-red-900 font-semibold text-md px-2 py-1 rounded-lg hover:bg-red-900 hover:text-white duration-300 cursor-pointer">
                                            Documentary
                                        </span>
                                        <span class="bg-white text-red-900 font-semibold text-md px-2 py-1 rounded-lg hover:bg-red-900 hover:text-white duration-300 cursor-pointer">
                                            Political
                                        </span>
                                    </div>
                                    <div class="flex flex-row flex-wrap w-full gap-x-8 justify-between max-[600px]:hidden">
                                        <div class="text-md text-white flex flex-row gap-2">
                                            <h1 class="font-semibold uppercase">Director:</h1>
                                            <span>Larry Charles</span>
                                        </div>
                                        <div class="text-md text-white flex flex-row gap-2">
                                            <h1 class="font-semibold uppercase">Writers:</h1>
                                            <span>Sacha Baron, Cohen Anthony Hines, Peter Baynham</span>
                                        </div>
                                        <div class="text-md text-white flex flex-row gap-2">
                                            <h1 class="font-semibold uppercase">Cast:</h1>
                                            <span>Sacha Baron Cohen as Borat</span>
                                        </div>
                                    </div>
                                    <div class="w-full text-md text-white flex flex-col">
                                        <h1 class="font-semibold uppercase">Synopsis:</h1>
                                        <p>Kazakh TV talking head Borat is dispatched to the United States to report on the greatest country in the world. With a documentary crew in tow, Borat becomes more interested in locating and marrying Pamela Anderson.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 4 -->
                            <div class="hidden duration-200 ease-linear group cursor-pointer" data-carousel-item>
                                <img src="https://scontent.fmnl32-1.fna.fbcdn.net/v/t39.30808-6/394205406_306160085613365_9046891007176085910_n.jpg?stp=dst-jpg_p600x600&_nc_cat=100&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFxf_sokR6xTsRLAWymo5RUPyngKnmDXzo_KeAqeYNfOsaT_33pX0C-1WeruybEHhsGCA-KBXBe-xk7i5tma8wP&_nc_ohc=Vs58vrsCPNAAX8O-pVn&_nc_ht=scontent.fmnl32-1.fna&oh=00_AfCWWOuZwMwDTPMDDVwDKv6d1JFr0yQC8CDdzYiFY0e2Gw&oe=654374E0" class="absolute group-hover:scale-75 duration-300 block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                                <div class="absolute bg-[#ff1621bb] shadow-lg px-10 py-4 -bottom-[45%] max-[600px]:-bottom-[70%] group-hover:bottom-0 duration-300 w-full flex flex-col gap-y-4">
                                    <div class="flex flex-row max-[600px]:flex-col border-b-2 border-b-white justify-between items-center">
                                        <h1 class="text-white font-bold text-3xl max-[600px]:text-lg pb-2 uppercase opacity-100">The Holocaust</h1>
                                        <div class="pb-2 text-lg text-white font-semibold uppercase flex flex-row items-center gap-3">
                                            <img src="img/popcorn.png" class="w-7"> </img>
                                            <span class="">100% Rotten Popcorn</span>
                                        </div>
                                    </div>
                                    <div class="tags max-[600px]:hidden flex flex-row w-full gap-4 items-center">
                                        <span class="bg-white text-red-900 font-semibold text-md px-2 py-1 rounded-lg hover:bg-red-900 hover:text-white duration-300 cursor-pointer">
                                            Action
                                        </span>
                                        <span class="bg-white text-red-900 font-semibold text-md px-2 py-1 rounded-lg hover:bg-red-900 hover:text-white duration-300 cursor-pointer">
                                            Kids
                                        </span>
                                        <span class="bg-white text-red-900 font-semibold text-md px-2 py-1 rounded-lg hover:bg-red-900 hover:text-white duration-300 cursor-pointer">
                                            Educational
                                        </span>
                                    </div>
                                    <div class="flex flex-row flex-wrap w-full gap-x-8 justify-between max-[600px]:hidden">
                                        <div class="text-md text-white flex flex-row gap-2">
                                            <h1 class="font-semibold uppercase">Director:</h1>
                                            <span>Larry Charles</span>
                                        </div>
                                        <div class="text-md text-white flex flex-row gap-2">
                                            <h1 class="font-semibold uppercase">Writers:</h1>
                                            <span>Sacha Baron, Cohen Anthony Hines, Peter Baynham</span>
                                        </div>
                                        <div class="text-md text-white flex flex-row gap-2">
                                            <h1 class="font-semibold uppercase">Cast:</h1>
                                            <span>Sacha Baron Cohen as Borat</span>
                                        </div>
                                    </div>
                                    <div class="w-full text-md text-white flex flex-col">
                                        <h1 class="font-semibold uppercase">Synopsis:</h1>
                                        <p>Kazakh TV talking head Borat is dispatched to the United States to report on the greatest country in the world. With a documentary crew in tow, Borat becomes more interested in locating and marrying Pamela Anderson.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 5 -->
                            <div class="hidden duration-200 ease-linear group cursor-pointer" data-carousel-item>
                                <img src="https://scontent.fmnl32-1.fna.fbcdn.net/v/t39.30808-6/392890870_306161958946511_1010502907836114553_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGCUYjcdkmyNJr777T2d433wXnfPiWVOrDBed8-JZU6sFGlOK0TkSvhe20xYnzfA267q0Voekt7aLGRuexjf3qF&_nc_ohc=jVxHWytTffMAX8vc7h_&_nc_ht=scontent.fmnl32-1.fna&oh=00_AfAgOClxDG6-RYUz67GKpOOV2qPoCL4ZdxvuK_fjWzu4MQ&oe=65422D4D" class="absolute group-hover:scale-75 duration-300 block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                                <div class="absolute bg-[#ff1621bb] shadow-lg px-10 py-4 -bottom-[45%] max-[600px]:-bottom-[70%] group-hover:bottom-0 duration-300 w-full flex flex-col gap-y-4">
                                    <div class="flex flex-row max-[600px]:flex-col border-b-2 border-b-white justify-between items-center">
                                        <h1 class="text-white font-bold text-3xl max-[600px]:text-lg pb-2 uppercase opacity-100">The Shooting</h1>
                                        <div class="pb-2 text-lg text-white font-semibold uppercase flex flex-row items-center gap-3">
                                            <img src="img/popcorn.png" class="w-7"> </img>
                                            <span class="">100% Rotten Popcorn</span>
                                        </div>
                                    </div>
                                    <div class="tags max-[600px]:hidden flex flex-row w-full gap-4 items-center">
                                        <span class="bg-white text-red-900 font-semibold text-md px-2 py-1 rounded-lg hover:bg-red-900 hover:text-white duration-300 cursor-pointer">
                                            Drama
                                        </span>
                                        <span class="bg-white text-red-900 font-semibold text-md px-2 py-1 rounded-lg hover:bg-red-900 hover:text-white duration-300 cursor-pointer">
                                            Political
                                        </span>
                                        <span class="bg-white text-red-900 font-semibold text-md px-2 py-1 rounded-lg hover:bg-red-900 hover:text-white duration-300 cursor-pointer">
                                            Action
                                        </span>
                                    </div>
                                    <div class="flex flex-row flex-wrap w-full gap-x-8 justify-between max-[600px]:hidden">
                                        <div class="text-md text-white flex flex-row gap-2">
                                            <h1 class="font-semibold uppercase">Director:</h1>
                                            <span>Larry Charles</span>
                                        </div>
                                        <div class="text-md text-white flex flex-row gap-2">
                                            <h1 class="font-semibold uppercase">Writers:</h1>
                                            <span>Sacha Baron, Cohen Anthony Hines, Peter Baynham</span>
                                        </div>
                                        <div class="text-md text-white flex flex-row gap-2">
                                            <h1 class="font-semibold uppercase">Cast:</h1>
                                            <span>Sacha Baron Cohen as Borat</span>
                                        </div>
                                    </div>
                                    <div class="w-full text-md text-white flex flex-col">
                                        <h1 class="font-semibold uppercase">Synopsis:</h1>
                                        <p>Kazakh TV talking head Borat is dispatched to the United States to report on the greatest country in the world. With a documentary crew in tow, Borat becomes more interested in locating and marrying Pamela Anderson.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- Slider controls -->
                    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
            </div>

            <div class="col-span-1 relative w-full max-[1200px]:h-[400px]">
                <a href="" class="w-full">
                    <h1 class="text-white font-bold text-xl uppercase">Top 1 Rotten Popcorn</h1>
                    <div class="card">
                        <div class="content">
                            <div class="back">
                                <div class="back-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="200px" width="200px" version="1.1" id="Capa_1" viewBox="0 0 263.998 263.998" xml:space="preserve">
                                        <g>
                                            <path style="fill:#FF5733;" d="M244.472,84.316L244.472,84.316c-12.522-14.685-26.504-20.729-41.951-19.668   c-11.182,0.77-21.592,5.316-31.201,13.537c-9.808-6.025-20.419-9.515-31.826-10.69c0.537-3.298,1.507-6.502,2.94-9.655   c3.565-7.258,9.185-13.139,16.841-17.836c-5.785-3.49-11.577-7.011-17.379-10.602c-16.767,8.358-25.845,21.246-27.292,39.619   c-7.837,1.759-15.143,4.626-21.911,8.7c-9.45-7.917-19.589-12.288-30.418-13.026C46.994,63.666,32.92,69.632,20.059,84.11   C6.648,99.188,0,118.456,0,140.501c-0.007,6.57,0.696,13.041,2.116,19.323c4.736,23.497,15.879,42.66,33.576,57.073   c15.912,13.173,30.835,18.587,44.716,17.512c7.294-0.578,14.049-4.101,20.3-10.511c10.864,5.661,21.027,8.473,30.484,8.459   c10.165-0.012,20.868-3.045,32.098-9.176c6.422,6.901,13.37,10.669,20.842,11.274c14.226,1.108,29.509-4.239,45.764-17.366   c18.037-14.544,28.919-33.815,32.789-57.219c0.863-5.8,1.313-11.646,1.313-17.497C264,119.432,257.511,99.618,244.472,84.316z    M56.51,100.753l41.931,14.948c-4.54,9.086-11.102,13.631-19.656,13.631c-2.622,0-5.069-0.431-7.344-1.313   C59.921,122.079,54.931,112.996,56.51,100.753z M155.321,191.19L155.321,191.19l-9.442-8.653l-7.857,13.358   c-3.497,0.35-6.822,0.529-9.967,0.529c-4.538,0-8.904-0.272-13.106-0.803l-8.904-15.439L96.609,190.4   c-5.063-2.8-9.436-6.038-13.105-9.708c-9.085-8.553-13.802-18.52-14.154-29.874c2.966,1.745,7.658,3.568,14.101,5.473   l10.969,14.055l9.735-10.16c4.883,0.724,9.522,1.155,13.887,1.315l11.023,11.857l9.973-12.322c3.669-0.177,7.512-0.53,11.531-1.041   l10.234,10.476l11.274-14.672c6.117-1.392,11.544-2.885,16.264-4.459C185.367,168.649,174.354,181.927,155.321,191.19z    M180.737,128.809L180.737,128.809c-2.277,0.876-4.806,1.313-7.599,1.313c-8.388,0-14.942-4.553-19.648-13.637l42.183-14.929   C197.08,113.778,192.097,122.863,180.737,128.809z" />
                                        </g>
                                    </svg>
                                    <strong class="text-xl uppercase">Hover me to reveal!</strong>
                                </div>
                            </div>
                            <div class="front">

                                <div class="img">
                                    <img src="https://m.media-amazon.com/images/I/51CiKgJ0OWL._AC_UF894,1000_QL80_.jpg">
                                </div>

                                <div class="front-content">
                                    <small class="badge">Horror</small>
                                    <div class="description">
                                        <div class="title">
                                            <p class="title">
                                                <strong>Barbie</strong>
                                            </p>
                                            <img src="img/popcorn.png" class="w-5">
                                        </div>
                                        <p class="card-footer">
                                            <span class="font-bold uppercase">Director: </span> Keenen Ivory Wayanss &nbsp; | &nbsp; 69% Rotten Popcorn
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-span-1 relative w-full max-[1200px]:h-[400px]">
                <a href="">
                    <h1 class="text-white font-bold text-xl uppercase">Halloween Special</h1>
                    <div class="card">
                        <div class="content">
                            <div class="back">
                                <div class="back-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="200px" width="200px" version="1.1" id="Capa_1" viewBox="0 0 263.998 263.998" xml:space="preserve">
                                        <g>
                                            <path style="fill:#FF5733;" d="M244.472,84.316L244.472,84.316c-12.522-14.685-26.504-20.729-41.951-19.668   c-11.182,0.77-21.592,5.316-31.201,13.537c-9.808-6.025-20.419-9.515-31.826-10.69c0.537-3.298,1.507-6.502,2.94-9.655   c3.565-7.258,9.185-13.139,16.841-17.836c-5.785-3.49-11.577-7.011-17.379-10.602c-16.767,8.358-25.845,21.246-27.292,39.619   c-7.837,1.759-15.143,4.626-21.911,8.7c-9.45-7.917-19.589-12.288-30.418-13.026C46.994,63.666,32.92,69.632,20.059,84.11   C6.648,99.188,0,118.456,0,140.501c-0.007,6.57,0.696,13.041,2.116,19.323c4.736,23.497,15.879,42.66,33.576,57.073   c15.912,13.173,30.835,18.587,44.716,17.512c7.294-0.578,14.049-4.101,20.3-10.511c10.864,5.661,21.027,8.473,30.484,8.459   c10.165-0.012,20.868-3.045,32.098-9.176c6.422,6.901,13.37,10.669,20.842,11.274c14.226,1.108,29.509-4.239,45.764-17.366   c18.037-14.544,28.919-33.815,32.789-57.219c0.863-5.8,1.313-11.646,1.313-17.497C264,119.432,257.511,99.618,244.472,84.316z    M56.51,100.753l41.931,14.948c-4.54,9.086-11.102,13.631-19.656,13.631c-2.622,0-5.069-0.431-7.344-1.313   C59.921,122.079,54.931,112.996,56.51,100.753z M155.321,191.19L155.321,191.19l-9.442-8.653l-7.857,13.358   c-3.497,0.35-6.822,0.529-9.967,0.529c-4.538,0-8.904-0.272-13.106-0.803l-8.904-15.439L96.609,190.4   c-5.063-2.8-9.436-6.038-13.105-9.708c-9.085-8.553-13.802-18.52-14.154-29.874c2.966,1.745,7.658,3.568,14.101,5.473   l10.969,14.055l9.735-10.16c4.883,0.724,9.522,1.155,13.887,1.315l11.023,11.857l9.973-12.322c3.669-0.177,7.512-0.53,11.531-1.041   l10.234,10.476l11.274-14.672c6.117-1.392,11.544-2.885,16.264-4.459C185.367,168.649,174.354,181.927,155.321,191.19z    M180.737,128.809L180.737,128.809c-2.277,0.876-4.806,1.313-7.599,1.313c-8.388,0-14.942-4.553-19.648-13.637l42.183-14.929   C197.08,113.778,192.097,122.863,180.737,128.809z" />
                                        </g>
                                    </svg>
                                    <strong class="text-xl uppercase">Hover me to reveal!</strong>
                                </div>
                            </div>
                            <div class="front">

                                <div class="img">
                                    <img src="https://m.media-amazon.com/images/M/MV5BMGEzZjdjMGQtZmYzZC00N2I4LThiY2QtNWY5ZmQ3M2ExZmM4XkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_.jpg">
                                </div>

                                <div class="front-content">
                                    <small class="badge">Horror</small>
                                    <div class="description">
                                        <div class="title">
                                            <p class="title">
                                                <strong>Scary Movie</strong>
                                            </p>
                                            <img src="img/popcorn.png" class="w-5">
                                        </div>
                                        <p class="card-footer">
                                            <span class="font-bold uppercase">Director: </span> Keenen Ivory Wayanss &nbsp; | &nbsp; 69% Rotten Popcorn
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</body>

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
</script>

</html>
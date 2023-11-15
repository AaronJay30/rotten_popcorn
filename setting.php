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

    .form-control {
        position: relative;
        margin: 20px 0 30px;
    }

    .form-control input {
        background-color: transparent;
        border: 0;
        border-bottom: 2px #fff solid;
        display: block;
        width: 100%;
        padding: 15px 0;
        font-size: 18px;
        color: #fff;
    }

    .form-control input:focus,
    .form-control input:valid {
        outline: 0;
        border-bottom-color: red;
    }

    .form-control label {
        position: absolute;
        top: 15px;
        left: 0;
        pointer-events: none;
    }

    .form-control .birthdate {
        position: absolute;
        top: -20px;
        font-size: 18px;
        min-width: 5px;
        color: #fff;
        left: 0;
        pointer-events: none;
    }

    .form-control label span {
        display: inline-block;
        font-size: 18px;
        min-width: 5px;
        color: #fff;
        transition: 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    .form-control input:focus+label span,
    .form-control input:valid+label span {
        color: lightblue;
        transform: translateY(-30px);
    }
</style>

<body>
    <!-- <?php include 'config/loader.php'; ?> -->

    <?php include 'config/navbar.php'; ?>

    <div class="container relative flex flex-col mx-auto mt-24 rounded-lg overflow-auto border-4 border-white w-full py-10">
        <h1 class="w-full text-center uppercase font-bold text-5xl text-white border-b-2 border-white pb-4">PROFILE SETTINGS</h1>

        <div class="mx-auto py-10">
            <img class="w-1/4 max-[800px]:w-2/4 mx-auto rounded-2xl mb-4" src="img/profile/sample.webp" alt="Extra large avatar">

            <label for="profile" class="flex flex-col gap-y-4 justify-center items-center">
                <h1 class="px-4 text-center py-2.5 rounded-xl bg-blue-700 cursor-pointer text-white hover:bg-blue-900 duration-200 w-1/4">Change Photo</h1>
            </label>
            <input type="file" id="profile" class="hidden">
            <hr class="mt-4">

        </div>

        <form class="grid grid-cols-2 max-[800px]:grid-cols-1 max-[800px]:px-10 px-32 gap-x-4">
            <div class="col-span-1">
                <div class="form-control w-full">
                    <input type="text" class="focus:ring-0" required="">
                    <label>
                        <span style="transition-delay:0ms">F</span><span style="transition-delay:50ms">u</span><span style="transition-delay:100ms">l</span><span style="transition-delay:150ms">l</span><span style="transition-delay:200ms">n</span><span style="transition-delay:250ms">a</span><span style="transition-delay:300ms">m</span><span style="transition-delay:350ms">e</span>
                    </label>
                </div>
            </div>
            <div class="col-span-1">
                <div class="form-control w-full flex flex-col">
                    <label for="" class="birthdate">Birthdate</label>
                    <input type="date" class="focus:ring-0" required="">
                </div>
            </div>

            <div class="col-span-1">
                <div class="form-control w-full">
                    <input type="text" class="focus:ring-0" required="">
                    <label>
                        <span style="transition-delay:0ms">E</span><span style="transition-delay:50ms">m</span><span style="transition-delay:100ms">a</span><span style="transition-delay:150ms">i</span><span style="transition-delay:200ms">l</span>
                    </label>
                </div>
            </div>

            <div class="col-span-1">
                <div class="form-control w-full">
                    <input type="text" class="focus:ring-0" required="">
                    <label>
                        <span style="transition-delay:0ms">P</span><span style="transition-delay:50ms">a</span><span style="transition-delay:100ms">s</span><span style="transition-delay:150ms">s</span><span style="transition-delay:200ms">w</span><span style="transition-delay:250ms">o</span><span style="transition-delay:300ms">r</span><span style="transition-delay:350ms">d</span>
                    </label>
                </div>
            </div>

            <div class="col-span-2 flex justify-end">
                <button class="bg-red-600 text-white uppercase text-xl font-bold px-4 py-2.5 w-1/2 rounded-2xl">Update</button>
            </div>
        </form>

    </div>

</body>
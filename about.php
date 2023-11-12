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

    .card {
        width: 400px;
        height: 350px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        gap: 10px;
        background-color: #fffffe;
        border-radius: 15px;
        position: relative;
        overflow: hidden;
        transition: all 0.5s ease;
    }

    .card::before {
        content: "";
        width: 400px;
        height: 150px;
        position: absolute;
        top: 0;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        border-bottom: 3px solid #fefefe;
        background: linear-gradient(40deg, rgba(255, 193, 0) 0%, rgba(255, 154, 0) 25%, rgba(255, 116, 0) 50%, rgba(255, 77, 0) 75%, rgba(255, 0, 0) 100%);

        transition: all 0.3s ease;
    }

    .card * {
        z-index: 1;
    }

    .image {
        width: 120px;
        height: 120px;
        background-color: #aa0000;
        border-radius: 50%;
        border: 4px solid #fefefe;
        margin-top: 30px;
        transition: all 0.5s ease;
    }

    .card-info {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 15px;
        transition: all 0.5s ease;
    }

    .card-info span {
        font-weight: 600;
        font-size: 24px;
        color: #161A42;
        margin-top: 15px;
        line-height: 5px;
    }

    .card-info p {
        color: rgba(0, 0, 0, 0.5);
    }

    .button {
        text-decoration: none;
        background-color: #990000;
        color: white;
        padding: 5px 20px;
        border-radius: 5px;
        border: 1px solid white;
        transition: all 0.5s ease;
    }

    .card:hover {
        width: 350px;
        border-radius: 250px;
    }

    .card:hover::before {
        width: 350px;
        height: 350px;
        border-radius: 50%;
        border-bottom: none;
        transform: scale(0.95);
    }

    .card:hover .card-info {
        transform: translate(0%, -15%);
    }

    .button:hover {
        background-color: #cc0000;
        transform: scale(1.1);
    }
</style>

<body>
    <!-- <?php include 'config/loader.php'; ?> -->
    <?php include 'config/navbar.php'; ?>


    <div class="container relative flex flex-col mx-auto mt-24 rounded-lg overflow-auto border-4 border-white w-full py-10">
        <h1 class="w-full text-center uppercase font-bold text-5xl text-white mb-6">ABOUT US</h1>

        <div class="flex flex-row flex-wrap justify-evenly items-center w-full border-y-2 py-8 gap-y-8">
            <div class="card group">
                <div class="image"></div>
                <div class="card-info">
                    <span class="group-hover:text-white duration-100">George Johnson</span>
                    <p class="group-hover:text-white duration-100">Support Specialist</p>
                </div>
                <a class="button group-hover:text-white" href="#">Folow</a>

                <div class="flex flex-row flex-wrap z-10 gap-4">
                    <i class='bx bxl-facebook text-3xl group-hover:text-white duration-100 hover:scale-110 cursor-pointer'></i>
                    <i class='bx bxl-discord-alt text-3xl group-hover:text-white duration-100 hover:scale-110 cursor-pointer'></i>
                    <i class='bx bxl-github text-3xl group-hover:text-white duration-100 hover:scale-110 cursor-pointer'></i>
                </div>

            </div>
            <div class="card group">
                <div class="image"></div>
                <div class="card-info">
                    <span class="group-hover:text-white duration-100">George Johnson</span>
                    <p class="group-hover:text-white duration-100">Support Specialist</p>
                </div>
                <a class="button group-hover:text-white" href="#">Folow</a>

                <div class="flex flex-row flex-wrap z-10 gap-4">
                    <i class='bx bxl-facebook text-3xl group-hover:text-white duration-100 hover:scale-110 cursor-pointer'></i>
                    <i class='bx bxl-discord-alt text-3xl group-hover:text-white duration-100 hover:scale-110 cursor-pointer'></i>
                    <i class='bx bxl-github text-3xl group-hover:text-white duration-100 hover:scale-110 cursor-pointer'></i>
                </div>

            </div>
            <div class="card group">
                <div class="image"></div>
                <div class="card-info">
                    <span class="group-hover:text-white duration-100">George Johnson</span>
                    <p class="group-hover:text-white duration-100">Support Specialist</p>
                </div>
                <a class="button group-hover:text-white" href="#">Folow</a>

                <div class="flex flex-row flex-wrap z-10 gap-4">
                    <i class='bx bxl-facebook text-3xl group-hover:text-white duration-100 hover:scale-110 cursor-pointer'></i>
                    <i class='bx bxl-discord-alt text-3xl group-hover:text-white duration-100 hover:scale-110 cursor-pointer'></i>
                    <i class='bx bxl-github text-3xl group-hover:text-white duration-100 hover:scale-110 cursor-pointer'></i>
                </div>

            </div>
        </div>

        <div class="flex flex-col gap-y-4 w-full px-20 py-10">
            <p class="text-md text-white w-full text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lorem magna, tempus eu eros a, mollis commodo odio. Morbi tincidunt lacinia tristique. Nam hendrerit vel lacus eget lobortis. Proin et risus sed magna imperdiet eleifend in vel metus. Ut malesuada pellentesque nunc a sodales. In egestas mi ac urna condimentum, sit amet iaculis dui dictum. Nam ipsum odio, pharetra nec odio pulvinar, interdum commodo eros. Fusce facilisis, tellus id mattis ornare, felis est interdum metus, ut ullamcorper nisl erat vel augue. In nisi lorem, gravida quis velit eget, porta pharetra dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>

            <p class="text-md text-white w-full text-justify">Nulla facilisi. Aliquam varius aliquet elit eget molestie. Fusce non molestie enim. Aliquam erat volutpat. Nulla ac orci ligula. Nulla tempor, felis nec egestas euismod, eros nibh condimentum nulla, nec consectetur augue magna a felis. Suspendisse pretium neque at ullamcorper vestibulum. Nam malesuada cursus enim vel sagittis. Nunc nisi orci, luctus sed leo eu, faucibus tristique lacus. Nunc et dignissim velit. Ut neque eros, molestie non molestie at, efficitur ut metus. Suspendisse odio nisi, pellentesque id molestie ac, blandit ut tortor. Nulla in ligula et felis feugiat vulputate. Duis sed volutpat mi. Nulla auctor ex odio. Mauris aliquam libero lacus, a condimentum orci tempor ut. </p>

            <p class="text-md text-white w-full text-justify">Aliquam tincidunt orci at tellus tristique, et bibendum tellus iaculis. Sed convallis sem ac elit venenatis, sagittis sodales massa posuere. Etiam nulla tellus, bibendum vitae risus vitae, ullamcorper ultricies erat. In ac accumsan lectus, et laoreet quam. Nulla non purus et leo dictum laoreet quis sit amet nibh. Nunc at odio nec dui suscipit pulvinar. Ut justo enim, blandit id maximus eget, elementum a urna. In ut enim sed diam tempor fermentum. Praesent arcu ante, pellentesque quis est nec, auctor tincidunt ligula. </p>

            <p class="text-md text-white w-full text-justify">Pellentesque sollicitudin libero nisl, a rhoncus sapien elementum non. Nam tristique est et pellentesque sollicitudin. Vestibulum mi eros, venenatis ac volutpat eu, congue efficitur lorem. Maecenas ac sapien tincidunt, facilisis nisi vitae, accumsan purus. Etiam accumsan, lacus vitae scelerisque elementum, felis purus gravida dui, in tempus quam turpis non turpis. Cras iaculis sed enim consectetur vestibulum. Aenean et mollis est, nec facilisis enim. Maecenas feugiat est vehicula consequat fermentum. Sed in sem porta quam gravida ullamcorper vel at dolor. Integer suscipit scelerisque leo sed maximus. Fusce efficitur eros mi, eget iaculis arcu rutrum et.</p>
        </div>


    </div>

</body>
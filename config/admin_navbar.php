<?php

if (isset($_COOKIE['userID'])) {
    $profileDB = new myDB();

    $userID = $_COOKIE['userID'];
    $profileDB->select('user', '*', " userID = $userID");

    $profile = $profileDB->res;

    $picture = $profile[0]['profile_picture'];
    $email = $profile[0]['email'];
    $username = $profile[0]['username'];
}

?>
<!-- BURGER MENU -->
<div class="absolute left-[-3000px] z-10 h-full w-full duration-500 ease-in-out flex flex-col items-center" id='sidebar'>

    <div class="w-full flex justify-end border-b-4 border-b-white px-10 pt-4 ">
        <img src="img/RottenPopCorn(Text).png" alt="Rotten Popcorn" class="h-20 hover:scale-110 duration-300">
    </div>

    <div class="flex flex-col justify-between w-full h-full">
        <ul class="flex flex-col justify-center items-center text-white mt-10 w-full">
            <li class="text-3xl uppercase duration-300 font-bold hover:text-red-500 hover:bg-white py-10 w-full text-center">
                <a href="setting.php" class="">
                    <h1>Settings</h1>
                </a>
            </li>
            <li class="text-3xl uppercase duration-300 font-bold hover:text-red-500 hover:bg-white py-10 w-full text-center">
                <a href="" class="">
                    <h1>Log Out</h1>
                </a>
            </li>

        </ul>

        <?php
        if (isset($_COOKIE['userID'])) {
            echo '
                <div class="w-full bg-red-900 py-4 px-8 gap-10 flex flex-row items-center">
                <div class="w-auto">
                    <img src="img/profile/' . $picture . '" alt="" class="h-24 rounded-full">
                </div>
                <div class="flex flex-col text-white gap-1 w-full">
                    <h1 class="text-2xl font-bold uppercase border-b-2 border-b-white w-full">' . $username . '</h1>
                    <span>' . $email . '</span>
                </div>
    
    
            </div>
                ';
        }
        ?>
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
        <?php
        if (isset($_COOKIE['userID'])) {
            echo '
                <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="left-start" class="max-[600px]:hidden w-10 h-10 rounded-full cursor-pointer" src="img/profile/' . $picture . '" alt="User dropdown">
            ';
        }

        ?>

        <!-- Dropdown menu -->
        <div id="userDropdown" class="relative hidden bg-white divide-y divide-red-300 rounded-lg shadow w-44">
            <div class="px-4 py-3 text-sm text-red-900 ">
                <div class="font-bold"><?php echo $username ? $username : '' ?></div>
                <div class="font-medium truncate"><?php echo $email ? $email : '' ?></div>
            </div>

            <div class="py-1">
                <a href="setting.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-500 hover:text-white duration-300">Settings</a>
            </div>
            <div class="py-1">
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-500 hover:text-white duration-300" onclick="logout()">Sign out</a>

            </div>
        </div>
    </div>
</nav>

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

    function logout() {
        // Set the cookie expiration time to a past date to delete the cookie
        document.cookie = 'userID=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
        document.cookie = 'role=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';

        // Redirect to the sign-in page or any other appropriate page
        window.location.href = 'index.php'; // Change 'signin.php' to your actual sign-in page
    }
</script>
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
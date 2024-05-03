<?php

$current_page = basename($_SERVER['PHP_SELF']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo isset ($pageTitle) ? $pageTitle : 'Job_Sphere'; ?>
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Toggle mobile menu
            document.querySelector('[data-collapse-toggle="mobile-menu-2"]').addEventListener('click', function () {
                const menu = document.getElementById('mobile-menu-2');
                const isOpen = menu.classList.contains('hidden');

                // Toggle menu visibility
                if (isOpen) {
                    menu.classList.remove('hidden');
                    this.setAttribute('aria-expanded', 'true');
                } else {
                    menu.classList.add('hidden');
                    this.setAttribute('aria-expanded', 'false');
                }

                // Toggle button icon (hamburger and close)
                this.querySelector('svg:first-of-type').classList.toggle('hidden');
                this.querySelector('svg:last-of-type').classList.toggle('hidden');
            });
        });
    </script>

</head>

<body>
<nav class="border border-gray-200 py-2.5 dark:bg-zinc-500" style="background-color: rgba(255, 255, 255, 0);">



        <div class="flex flex-wrap items-center justify-between max-w-screen-2xl px-6 mx-auto">

            <!-- Mobile -->

            <div class="flex items-center justify-between w-full block lg:hidden">
                <a href="/CareerLife" class="flex items-center hidden md:block ">
                    <img src="img/career_logo.png" class="h-6 mr-3 sm:h-12" alt="Workiee Logo">
                </a>
                <div>
                    <?php
                    if (isset ($_SESSION['user_id'])) {
                        // User is logged in, show the logout button
                        echo '<a href="/CareerLife/account/logout.php" class="text-white bg-zinc-500 hover:bg-zinc-600 focus:ring-4 focus:ring-zinc-300 font-medium rounded-md text-sm px-4 lg:px-8 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-zinc-600 dark:hover:bg-zinc-500 focus:outline-none dark:focus:ring-zinc-800">Logout</a>';
                    } else {
                        // User is not logged in, show the login button
                        echo '<a href="/CareerLife/account/login" class="text-white bg-zinc-500 hover:bg-zinc-600 focus:ring-4 focus:ring-zinc-300 font-medium rounded-md text-sm px-4 lg:px-8 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-zinc-600 dark:hover:bg-zinc-500 focus:outline-none dark:focus:ring-zinc-800">Login</a>';
                    }
                    ?>
                    <a href="/CareerLife/dashboard"
                        class="text-white bg-zinc-500 hover:bg-zinc-600 mx-2 focus:ring-4 focus:ring-zinc-300 font-medium rounded-md text-sm px-4 lg:px-6 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-zinc-600 dark:hover:bg-zinc-500 focus:outline-none dark:focus:ring-zinc-800">Account</a>
                </div>
                <div>
                    <button data-collapse-toggle="mobile-menu-2" type="button"
                        class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-300 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="mobile-menu-2" aria-expanded="true">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div id="mobile-menu-2" class="hidden w-full">
                <ul class="flex flex-col mt-4 font-medium ">
                    <li>
                        <a href="/CareerLife/"
                            class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:text-white hover:bg-gray-100 lg:bg-transparent lg:text-zinc-600 lg:p-0 dark:text-white border-b border-gray-300"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="/CareerLife/companies"
                            class="<?php echo ($current_page == 'companies.php') ? 'dark:text-black dark:border-white' : 'dark:text-gray-300 ' ?>w-full block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-300 lg:hover:bg-transparent lg:border-0 hover:text-zinc-500 lg:hover:text-zinc-600 lg:p-0 lg:dark:hover:text-black dark:hover:bg-gray-700 dark:hover:text-black lg:dark:hover:bg-transparent dark:border-gray-700">Companies</a>
                    </li>
                    <li>
                        <a href="/CareerLife/jobs"
                            class="<?php echo ($current_page == 'jobs.php') ? 'dark:text-black dark:border-white' : 'dark:text-gray-300 ' ?>w-full block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-300 hover:text-zinc-500 lg:hover:bg-transparent lg:border-0 lg:hover:text-zinc-600 lg:p-0  lg:dark:hover:text-black dark:hover:bg-gray-700 dark:hover:text-black lg:dark:hover:bg-transparent dark:border-gray-700">Jobs</a>
                    </li>
                    <li>
                        <a href="/CareerLife/about"
                            class="<?php echo ($current_page == 'about.php') ? 'dark:text-black dark:border-white' : 'dark:text-gray-300 ' ?>w-full block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-300  hover:text-zinc-500 lg:hover:bg-transparent lg:border-0 lg:hover:text-zinc-600 lg:p-0  lg:dark:h over:text-black dark:hover:bg-gray-700 dark:hover:text-black lg:dark:hover:bg-transparent dark:border-gray-700">About</a>
                    </li>
                    <li>
                        <a href="/CareerLife/contact"
                            class="<?php echo ($current_page == 'contact.php') ? 'dark:text-black ' : 'dark:text-gray-300 ' ?>w-full block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-300  hover:text-zinc-500 lg:hover:bg-transparent lg:border-0 lg:hover:text-zinc-600 lg:p-0 lg:dark:hover:text-black dark:hover:bg-gray-700 dark:hover:text-black lg:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- laptop -->

            <div class="items-center justify-between w-full lg:flex lg:order-1 hidden lg:block">
            <a href="https://imgbb.com/"><img src="https://i.ibb.co/YDyR3Yb/career-logo.png" alt="career-logo" border="0" class="h-6 mr-3 sm:h-12"></a>

                <ul class="flex font-medium flex-row space-x-4 ">
                    <li>
                        <a href="/CareerLife/"
                            class="block p-2 text-gray-700 hover:text-white hover:bg-gray-600 lg:bg-transparent lg:text-zinc-600  dark:text-white"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="/CareerLife/companies"
                            class="<?php echo ($current_page == 'companies.php') ? 'dark:text-black dark:border-white' : 'dark:text-gray-300 ' ?>block p-2 text-gray-700 hover:text-white hover:bg-gray-600 lg:bg-transparent lg:text-zinc-600  dark:text-white">Companies</a>
                    </li>
                    <li>
                        <a href="/CareerLife/jobs"
                            class="<?php echo ($current_page == 'jobs.php') ? 'dark:text-black dark:border-white' : 'dark:text-gray-600 ' ?>block p-2 text-gray-700 hover:text-white hover:bg-gray-600 lg:bg-transparent lg:text-zinc-600  dark:text-white">Jobs</a>
                    </li>
                    <li>
                        <a href="/CareerLife/about"
                            class="<?php echo ($current_page == 'about.php') ? 'dark:text-black dark:border-white' : 'dark:text-gray-300 ' ?>block p-2 text-gray-700 hover:text-white hover:bg-gray-600 lg:bg-transparent lg:text-zinc-600  dark:text-white">About</a>
                    </li>
                    <li>
                        <a href="/CareerLife/contact"
                            class="<?php echo ($current_page == 'contact.php') ? 'dark:text-black ' : 'dark:text-gray-300 ' ?>block p-2 text-gray-700 hover:text-white hover:bg-gray-600 lg:bg-transparent lg:text-zinc-600  dark:text-white">Contact</a>
                    </li>
                </ul>
                <div>
                    <?php
                    if (isset ($_SESSION['user_id'])) {
                        // User is logged in, show the logout button
                        echo '<a href="/CareerLife/account/logout.php" class="text-white bg-zinc-500 hover:bg-zinc-600 focus:ring-4 focus:ring-zinc-300 font-medium rounded-md text-sm px-4 lg:px-8 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-zinc-600 dark:hover:bg-zinc-500 focus:outline-none dark:focus:ring-zinc-800">Logout</a>';
                    } else {
                        // User is not logged in, show the login button
                        echo '<a href="/CareerLife/account/login" class="text-white bg-zinc-500 hover:bg-zinc-600 focus:ring-4 focus:ring-zinc-300 font-medium rounded-md text-sm px-4 lg:px-8 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-zinc-600 dark:hover:bg-zinc-500 focus:outline-none dark:focus:ring-zinc-800">Login</a>';
                    }
                    ?>
                    <a href="/CareerLife/dashboard"
                        class="text-white bg-zinc-500 hover:bg-zinc-600 mx-2 focus:ring-4 focus:ring-zinc-300 font-medium rounded-md text-sm px-4 lg:px-6 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-zinc-600 dark:hover:bg-zinc-500 focus:outline-none dark:focus:ring-zinc-800">Account</a>
                </div>
            </div>

        </div>
    </nav>
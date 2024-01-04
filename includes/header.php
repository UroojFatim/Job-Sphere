<?php
$current_page = basename($_SERVER['PHP_SELF']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/jobline-fav.jpg" type="image/x-icon">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Jobline'; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<nav class="bg-white border-gray-200 py-2.5 dark:bg-gray-900">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
        <a href="/jobline" class="flex items-center">
            <img src="https://www.svgrepo.com/show/281766/job-search.svg" class="h-6 mr-3 sm:h-9" alt="Jobline Logo">
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">JobLine</span>
        </a>
        <div class="flex items-center lg:order-2">
            <div class="hidden mt-2 mr-4 sm:inline-block">
                <span></span>
            </div>

            <a href="/jobline/account/login"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-4 lg:px-8 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Login</a>
            <a href="/jobline/dashboard"
                class="text-white bg-blue-700 hover:bg-blue-800 mx-2 focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-4 lg:px-6 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Account</a>
            <button data-collapse-toggle="mobile-menu-2" type="button"
				class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-300 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
				aria-controls="mobile-menu-2" aria-expanded="true">
				<span class="sr-only">Open main menu</span>
				<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd"
						d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
						clip-rule="evenodd"></path>
				</svg>
				<svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd"
						d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
						clip-rule="evenodd"></path>
				</svg>
			</button>
        </div>
        <div class="items-center justify-between w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
            <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                <li>
                    <a href="/jobline/"
                        class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded lg:bg-transparent lg:text-blue-700 lg:p-0 dark:text-white"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="/jobline/companies"
                        class="<?php echo ($current_page == 'companies.php') ? 'dark:text-white dark:border-white' : 'dark:text-gray-300 ' ?>block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0  lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Companies</a>
                </li>
                <li>
                    <a href="/jobline/jobs"
                        class="<?php echo ($current_page == 'jobs.php') ? 'dark:text-white dark:border-white' : 'dark:text-gray-300 ' ?>block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0  lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Jobs</a>
                </li>
                <li>
                    <a href="/jobline/about"
                        class="<?php echo ($current_page == 'about.php') ? 'dark:text-white dark:border-white' : 'dark:text-gray-300 ' ?>block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0  lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">About</a>
                </li>
                <li>
                    <a href="/jobline/contact"
                        class="<?php echo ($current_page == 'contact.php') ? 'dark:text-white ' : 'dark:text-gray-300 ' ?>block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0  lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
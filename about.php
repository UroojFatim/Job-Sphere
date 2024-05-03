<?php
session_start();
$pageTitle = 'About us - Job_Sphere';
include('includes/header.php')
?>

<section class="bg-gradient-to-r from-amber-950 via-amber-900 to-sky-500">
    <div class="mx-auto max-w-screen-xl px-4 py-28 lg:flex lg:h-1/2 lg:items-center">
        <div class="mx-auto max-w-3xl text-center">
            <h1 class="bg-white bg-clip-text text-3xl font-extrabold text-transparent sm:text-5xl">
                About Us.

                <!-- <span class="sm:block"> posted by companies </span> -->
            </h1>
        </div>
    </div>
</section>

<style>
    /* Additional styling */
    .dropdown-content {
        display: none;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown-arrow-up::before {
        content: "";
        border-style: solid;
        border-width: 0.375rem 0.375rem 0; /* Increased size */
        border-color: #470909a5 transparent transparent; /* Black color */
        position: absolute;
        top: calc(50%); /* Fix position at the bottom of the dropdown */
        left: calc(90% - 1rem); /* Adjust the position */
        transform: rotate(0deg); /* Initially rotate the arrow */
        transition: transform 0.3s ease; 
    }

    .dropdown:hover .dropdown-arrow-up::before {
        transform: rotate(180deg);
        top: calc(10%);
    }
</style>

<div class="py-20 mx-auto p-6 bg-sky-50">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <!-- Left side with grid -->
        <div class="col-span-1 md:col-span-1 p-4 items-center">
            <h1 class="bg-gradient-to-r from-sky-800 to-sky-400 hover:bg-gray-600 bg-clip-text px-4 md:px-0 text-3xl font-extrabold text-transparent sm:text-5xl">We’ve been helping customers globally.</h1>
        </div>
        <!-- Right side with three text items -->
        <div>
            <div class="dropdown mb-4 relative p-4">
                <a href="#" class="font-bold flex items-center text-2xl text-sky-700">Who we are? <span class="ml-1 dropdown-arrow-up"></span></a>
                <div class="dropdown-content p-4 mt-2 text-amber-950 font-semibold">
                    <p>Our founders Dustin Moskovitz and Justin lorem Rosenstein met while leading Engineering teams at Facebook quesi. Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
            </div>
            <hr>
            <div class="dropdown mb-4 relative p-4">
                <a href="#" class="font-bold flex items-center text-2xl text-sky-700">What’s our goal <span class="ml-1 dropdown-arrow-up"></span></a>
                <div class="dropdown-content p-4 mt-2  text-amber-950 font-semibold">
                    <p>Our founders Dustin Moskovitz and Justin lorem Rosenstein met while leading Engineering teams at Facebook quesi. Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
            </div>
            <hr>
            <div class="dropdown mb-4 relative p-4">
                <a href="#" class="font-bold flex items-center text-2xl text-sky-700">Our vision <span class="ml-1 dropdown-arrow-up"></span></a>
                <div class="dropdown-content p-4 mt-2  text-amber-950 font-semibold">
                    <p>Our founders Dustin Moskovitz and Justin lorem Rosenstein met while leading Engineering teams at Facebook quesi. Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
            </div>
            <hr>
        </div>
    </div>
</div>

<!-- JavaScript to toggle dropdown on click -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const dropdowns = document.querySelectorAll(".dropdown");

        dropdowns.forEach(dropdown => {
            dropdown.addEventListener("click", function(event) {
                event.stopPropagation();
                dropdown.classList.toggle("dropdown-open");
                const content = dropdown.querySelector(".dropdown-content");
                content.style.display = content.style.display === "block" ? "none" : "block";
            });
        });

        document.addEventListener("click", function(event) {
            dropdowns.forEach(dropdown => {
                dropdown.classList.remove("dropdown-open");
                dropdown.querySelector(".dropdown-content").style.display = "none";
            });
        });
    });
</script>


<section>
    <div class="mx-auto max-w-screen-2xl px-4 py-8 sm:px-6 sm:py-12 lg:px-12 lg:py-16">
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-12">
            <div class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:order-last lg:h-full">
                <img alt="Party" src="https://images.unsplash.com/photo-1516321497487-e288fb19713f?q=80&w=1447&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="absolute inset-0 h-full w-full object-cover" />
            </div>

            <div class="lg:py-24">
                <h2 class="text-3xl font-bold sm:text-4xl">About <img src="img/Logo.PNG" alt="" srcset="">
                </h2>

                <p class="mt-4 text-gray-600">
                    Welcome to Workiee, the leading platform for career growth and job opportunities. Workiee is a modern job portal crafted to bridge the gap between driven professionals and a wide array of job openings. Our platform features an easy-to-navigate interface, simplifying the job search for both job seekers and employers. Whether you're an experienced professional in pursuit of new ventures or a company in search of exceptional talent, Workiee offers a vibrant arena for matching expertise with potential roles. Committed to enhancing career development, Workiee aims to support both individuals and organizations. Sign up with Workiee today to explore a universe of opportunities and advance your professional journey.
                </p>
            </div>
        </div>
    </div>
</section>

<?php include('includes/footer.php') ?>
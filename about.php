<?php
session_start();
$pageTitle = 'About us - Workiee';
include('includes/header.php')
    ?>
<section>
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
            <div class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:order-last lg:h-full">
                <img alt="Party"
                    src="https://images.unsplash.com/photo-1516321497487-e288fb19713f?q=80&w=1447&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="absolute inset-0 h-full w-full object-cover" />
            </div>

            <div class="lg:py-24">
                <h2 class="text-3xl font-bold sm:text-4xl">About <span
                        class="bg-orange-500 bg-clip-text font-extrabold text-transparent sm:text-5xl">Workiee</span>
                </h2>

                <p class="mt-4 text-gray-600">
                Welcome to Workiee, the leading platform for career growth and job opportunities. Workiee is a modern job portal crafted to bridge the gap between driven professionals and a wide array of job openings. Our platform features an easy-to-navigate interface, simplifying the job search for both job seekers and employers. Whether you're an experienced professional in pursuit of new ventures or a company in search of exceptional talent, Workiee offers a vibrant arena for matching expertise with potential roles. Committed to enhancing career development, Workiee aims to support both individuals and organizations. Sign up with Workiee today to explore a universe of opportunities and advance your professional journey.
                </p>
            </div>
        </div>
    </div>
</section>

<?php include('includes/footer.php') ?>
<?php
session_start();
include('includes/header.php');
?>
<html>

<head>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link rel="stylesheet" type="text/css" href="map/map.css" />
    <script type="module" src="map/map.js"></script>
</head>

<body>
    <!-- Google Map Section -->
    <div class="flex h-full w-full border border-4 border-gray-400  ">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3620.082101572202!2d67.06789367401184!3d24.861045345236708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f24452b63bd%3A0x6541078cce9d7da4!2sMAJU%20-%20Computing%20and%20Engg.%20Block%20(Block%20D)!5e0!3m2!1sen!2s!4v1711995098727!5m2!1sen!2s" style="width: 100vw; height: 100vh; max-width: 100%; max-height: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>


    <!-- Contact Section -->
    <section class="pt-14 bg-sky-50" id="contact">
        <div class="mx-auto max-w-8xl px-6 py-10 sm:px-6 lg:px-10 lg:py-12">
            <div class="md:mb-4 lg:mb-12">
                <div class="md:mb-6 max-w-3xl text-center sm:text-center md:mx-auto md:mb-14">
                    <h6 class="text-sky-500 font-bold md:mb-1">CONTACT</h6>
                    <h2 class="font-heading md:mb-4 font-bold tracking-tight text-gray-900 text-3xl sm:text-5xl">
                        Get in Touch
                    </h2>
                    <p class="text-center md:text-start md:mt-3 mb-12 text-lg text-gray-600">
                        Just send us a message our team will be ready to help you in
                        any case related to Workiee!
                    </p>

                </div>
            </div>
            <div class="flex flex-col items-center justify-center md:justify-between">
                <!-- Contact Information -->
                <div class="container mx-auto px-4 py-8">
                    <ul class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <li class="flex flex-col items-center justify-center bg-white rounded-lg shadow-lg p-6">
                            <div class="rounded-full bg-sky-600 text-white p-3 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                    <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-medium mb-2">Our Address</h3>
                            <p class="text-gray-600">NASTP, Main Shahrah-e-Faisal</p>
                            <p class="text-gray-600">Karachi, Sindh</p>
                        </li>
                        <li class="flex flex-col items-center justify-center bg-white rounded-lg shadow-lg p-6">
                            <div class="rounded-full bg-sky-600 text-white p-3 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2"></path>
                                    <path d="M15 7a2 2 0 0 1 2 2"></path>
                                    <path d="M15 3a6 6 0 0 1 6 6"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-medium mb-2">Contact</h3>
                            <p class="text-gray-600">Mobile: +92 344-8302253</p>
                            <p class="text-gray-600">Mail: eshalmerab1@gamil.com</p>
                        </li>
                        <li class="flex flex-col items-center justify-center bg-white rounded-lg shadow-lg p-6">
                            <div class="rounded-full bg-sky-600 text-white p-3 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                                    <path d="M12 7v5l3 3"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-medium mb-2">Working Hours</h3>
                            <p class="text-gray-600">Monday - Friday: 08:00 - 17:00</p>
                            <p class="text-gray-600">Saturday &amp; Sunday: 08:00 - 12:00</p>
                        </li>
                    </ul>
                </div>


                <!-- Contact Form -->
                <div class="mt-24 md:w-1/2 md:pl-6">
                    <h2 class="mb-8 text-2xl font-bold">Ready to Get Started?</h2>
                    <form id="contactForm" action="submit_contact.php" method="post">
                        <div class="mb-8">
                            <div class="mx-0 mb-1 sm:mb-4">
                                <div class="mx-0 mb-1 sm:mb-4">
                                    <label for="name" class="pb-1 text-xs uppercase tracking-wider"></label>
                                    <input type="text" id="name" autocomplete="given-name" placeholder="Your name" class="mb-2 w-full rounded-md border border-gray-400 py-2 pl-2 pr-4 shadow-md dark:text-gray-300 sm:mb-0" name="name">
                                </div>
                                <div class="mx-0 mb-1 sm:mb-4">
                                    <label for="email" class="pb-1 text-xs uppercase tracking-wider"></label>
                                    <input type="email" id="email" autocomplete="email" placeholder="Your email address" class="mb-2 w-full rounded-md border border-gray-400 py-2 pl-2 pr-4 shadow-md dark:text-gray-300 sm:mb-0" name="email">
                                </div>
                                <div class="mx-0 mb-1 sm:mb-4">
                                    <label for="subject" class="pb-1 text-xs uppercase tracking-wider"></label>
                                    <input type="text" id="subject" placeholder="Subject (Optional)" class="mb-2 w-full rounded-md border border-gray-400 py-2 pl-2 pr-4 shadow-md dark:text-gray-300 sm:mb-0" name="subject">
                                </div>
                            </div>
                            <div class="mx-0 mb-1 sm:mb-4">
                                <label for="textarea" class="pb-1 text-xs uppercase tracking-wider"></label>
                                <textarea id="textarea" name="textarea" cols="30" rows="5" placeholder="Write your message..." class="mb-2 w-full rounded-md border border-gray-400 py-2 pl-2 pr-4 shadow-md dark:text-gray-300 sm:mb-0"></textarea>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class=" bg-sky-500 text-white hover:bg-transparent hover:text-black hover:border-black border border-sky-500 hover:border-sky-500 px-6 py-3 font-xl rounded-md sm:mb-0">Send
                                Message</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>


</body>

<?php
include './includes/footer.php';
?>

</html>
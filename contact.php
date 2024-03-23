<?php
session_start();
include ('includes/header.php');
?>
<html>

<head>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link rel="stylesheet" type="text/css" href="map/map.css" />
    <script type="module" src="map/map.js"></script>
</head>

<body>
    <section class="bg-orange-50" id="contact">
        <div class="mx-auto max-w-8xl px-6 py-10 sm:px-6 lg:px-10 lg:py-12">
            <div class="md:mb-4 lg:mb-12">
                <div class="md:mb-6 max-w-3xl text-center sm:text-center md:mx-auto md:mb-14">
                    <h6 class="text-orange-500 font-bold md:mb-1">CONTACT</h6>
                    <h2 class="font-heading md:mb-4 font-bold tracking-tight text-gray-900 text-3xl sm:text-5xl">
                        Get in Touch
                    </h2>
                    <!-- <p class="mx-auto mt-4 max-w-3xl text-xl text-gray-600">Need Any Help Regarding to Workiee!
                    </p> -->
                </div>
            </div>
            <div class="flex items-stretch justify-center mt-2 md:mt-4">
                <div class="grid md:grid-cols-2">
                    <div class="h-full md:pr-6">
                        <p class="text-center md:text-start md:mt-3 mb-12 text-lg text-gray-600">
                            Just send us a message our team will be ready to help you in
                            any case related to Workiee!
                        </p>
                        <ul class="mb-6 md:mb-0">
                            <li class="flex">
                                <div
                                    class="flex h-10 w-10 items-center justify-center rounded bg-orange-600 text-gray-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="h-6 w-6">
                                        <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                        <path
                                            d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="ml-6 mb-6 -mt-1">
                                    <h3 class="mb-1 text-lg font-medium leading-6 text-gray-900 ">Our Address
                                    </h3>
                                    <p class="text-gray-600 ">NASTP, Main Shahrah-e-Faisal</p>
                                    <p class="text-gray-600 ">Karachi, Sindh</p>
                                </div>
                            </li>
                            <li class="flex">
                                <div
                                    class="flex h-10 w-10 items-center justify-center rounded bg-orange-600 text-gray-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="h-6 w-6">
                                        <path
                                            d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2">
                                        </path>
                                        <path d="M15 7a2 2 0 0 1 2 2"></path>
                                        <path d="M15 3a6 6 0 0 1 6 6"></path>
                                    </svg>
                                </div>
                                <div class="ml-6 mb-6 -mt-1">
                                    <h3 class="mb-1 text-lg font-medium leading-6 text-gray-900 ">Contact
                                    </h3>
                                    <p class="text-gray-600">Mobile: +92 312-2386670</p>
                                    <p class="text-gray-600">Mail: adnasir607@gmail.com</p>
                                </div>
                            </li>
                            <li class="flex">
                                <div
                                    class="flex h-10 w-10 items-center justify-center rounded bg-orange-600 text-gray-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="h-6 w-6">
                                        <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                                        <path d="M12 7v5l3 3"></path>
                                    </svg>
                                </div>
                                <div class="ml-6 mb-6 -mt-1">
                                    <h3 class="mb-1 text-lg font-medium leading-6 text-gray-900 ">Working
                                        hours</h3>
                                    <p class="text-gray-600">Monday - Friday: 08:00 - 17:00</p>
                                    <p class="text-gray-600">Saturday &amp; Sunday: 08:00 - 12:00</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="border-2 border-gray-400 flex justify-center items-center hidden md:block">
                        <div id="map"></div>
                        <!-- prettier-ignore -->
                        <script>(g => { var h, a, k, p = "The Google Maps JavaScript API", c = "google", l = "importLibrary", q = "__ib__", m = document, b = window; b = b[c] || (b[c] = {}); var d = b.maps || (b.maps = {}), r = new Set, e = new URLSearchParams, u = () => h || (h = new Promise(async (f, n) => { await (a = m.createElement("script")); e.set("libraries", [...r] + ""); for (k in g) e.set(k.replace(/[A-Z]/g, t => "_" + t[0].toLowerCase()), g[k]); e.set("callback", c + ".maps." + q); a.src = `https://maps.${c}apis.com/maps/api/js?` + e; d[q] = f; a.onerror = () => h = n(Error(p + " could not load.")); a.nonce = m.querySelector("script[nonce]")?.nonce || ""; m.head.append(a) })); d[l] ? console.warn(p + " only loads once. Ignoring:", g) : d[l] = (f, ...n) => r.add(f) && u().then(() => d[l](f, ...n)) })
                                ({ key: "AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg", v: "weekly" });</script>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="flex lg:py-12 max-w-screen-2xl mx-auto xl:px-6">
        <div class="flex-1 hidden md:block">
            <img alt="Student"
                src="https://images.unsplash.com/photo-1523580846011-d3a5bc25702b?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                class="h-56 w-full object-cover sm:h-full" />
        </div>
        <div class="flex-1 card h-fit max-w-xl p-5 md:px-8 lg:px-16 md:py-12 w-full text-center" id="form">
            <h2 class="mb-8 text-2xl font-bold">Ready to Get Started?</h2>
            <form id="contactForm" action="submit_contact.php" method="post">
                <div class="mb-8">
                    <div class="mx-0 mb-1 sm:mb-4">
                        <div class="mx-0 mb-1 sm:mb-4">
                            <label for="name" class="pb-1 text-xs uppercase tracking-wider"></label><input type="text"
                                id="name" autocomplete="given-name" placeholder="Your name"
                                class="mb-2 w-full rounded-md border border-gray-400 py-2 pl-2 pr-4 shadow-md dark:text-gray-300 sm:mb-0"
                                name="name">
                        </div>
                        <div class="mx-0 mb-1 sm:mb-4">
                            <label for="email" class="pb-1 text-xs uppercase tracking-wider"></label><input type="email"
                                id="email" autocomplete="email" placeholder="Your email address"
                                class="mb-2 w-full rounded-md border border-gray-400 py-2 pl-2 pr-4 shadow-md dark:text-gray-300 sm:mb-0"
                                name="email">
                        </div>
                    </div>
                    <div class="mx-0 mb-1 sm:mb-4">
                        <label for="textarea" class="pb-1 text-xs uppercase tracking-wider"></label><textarea
                            id="textarea" name="textarea" cols="30" rows="5" placeholder="Write your message..."
                            class="mb-2 w-full rounded-md border border-gray-400 py-2 pl-2 pr-4 shadow-md dark:text-gray-300 sm:mb-0"></textarea>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit"
                        class=" bg-orange-500 text-white hover:bg-transparent hover:text-black hover:border-black border border-orange-500 hover:border-orange-500 px-6 py-3 font-xl rounded-md sm:mb-0">Send
                        Message</button>
                </div>
            </form>
        </div>
    </section>
</body>

</html>
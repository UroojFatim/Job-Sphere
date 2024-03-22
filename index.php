<?php
session_start();
$pageTitle = 'Workiee - Your Job Home';
include './includes/header.php';

?>
<!-- bg-orange-100 -->
<section class="bg-orange-50 text-black">
  <div class="mx-auto max-w-screen-2xl px-8 py-12 lg:flex lg:h-1/2 lg:items-start">
    <div class="flex-1 my-auto h-full">
      <h1
        class="bg-gradient-to-r from-blue-800 to-orange-500 bg-clip-text text-3xl font-extrabold text-transparent sm:text-5xl">
        Chart Your Journey with

        <span class="sm:block"> with Workiee </span>
      </h1>

      <p class=" mt-6 max-w-xl sm:text-xl/relaxed">
        Explore exciting job prospects and find your path to success. Join us to connect with opportunities
        tailored just for you.
      </p>

      <div class="mt-8 flex flex-wrap justify-start gap-4">
        <a class="block w-full rounded border border-orange-600 bg-orange-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-black focus:outline-none focus:ring active:text-opacity-75 sm:w-auto"
          href="account/register.php">
          Register Now
        </a>

        <a class="block w-full rounded border border-orange-600 px-12 py-3 text-sm font-medium text-black hover:bg-orange-600 hover:text-white focus:outline-none focus:ring active:bg-orange-500 sm:w-auto"
          href="jobs">
          Latest Jobs
        </a>
      </div>
    </div>
    <div class="flex-1 flex items-center justify-center">
      <style>
        .rotating-world img {
          animation: rotateWorld 20s linear infinite;
          display: block;
          max-width: 100%;
          height: auto;
        }

        @keyframes rotateWorld {
          from {
            transform: rotate(0deg);
          }

          to {
            transform: rotate(360deg);
          }
        }
      </style>
      <div class="rotating-world">
        <img src="./img/earth.png" alt="World Map" style="width: 500px; height: 500px;" />
      </div>
    </div>
  </div>
</section>

<section>
  <div class="mx-auto max-w-screen-2xl px-4 py-8 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
      <div class=" p-8 md:p-12 ">
        <div class="mx-auto max-w-xl text-center  lg:flex lg:flex-col lg:h-full lg:justify-center lg:items-center">
          <h2 class="text-2xl font-bold text-black md:text-2xl">
            Begin Your Career Adventure: The Doorway to Endless Possibilities with Workiee
          </h2>

          <p class="hidden text-black/90 sm:mt-6 sm:block">
            Set forth on an enriching path to career success through our extensive job portal. Dive into a vast sea of
            unique opportunities, crafted to empower you in forging and enhancing your career trajectory with absolute
            certainty. Your ideal job is out there – initiate your quest now!
          </p>

          <div class="mt-4 md:mt-10">
            <a href="#"
              class="inline-block rounded border border-white hover:border-orange-600 bg-orange-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-black focus:outline-none focus:ring focus:ring-yellow-400">
              Embrack Now
            </a>
          </div>
        </div>
      </div>

      <div class="grid grid-cols-2 gap-4 md:grid-cols-1 lg:grid-cols-2">

        <img alt="Student"
          src="https://images.unsplash.com/photo-1567168539593-59673ababaae?auto=format&fit=crop&w=774&q=80&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
          class="h-40 w-full object-cover sm:h-56 md:h-full" />

        <img alt="Student"
          src="https://images.unsplash.com/photo-1618355776464-8666794d2520?auto=format&fit=crop&w=654&q=80&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
          class="h-40 w-full object-cover sm:h-56 md:h-full" />

      </div>
    </div>
  </div>
</section>


<section class="overflow-hidden bg-gray-100 sm:grid sm:grid-cols-2">

  <img alt="Student"
    src="https://plus.unsplash.com/premium_photo-1663051241451-709fa4de55bc?auto=format&fit=crop&w=1770&q=80&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
    class="h-56 w-full object-cover sm:h-full" />

  <div class="p-8 md:p-12 lg:px-16 lg:py-24">
    <div class="mx-auto max-w-xl text-center">
      <h2 class="text-2xl font-bold text-gray-900 md:text-3xl">
        Boost Your Team's Potential: Secure Top-Notch Talent with Workiee!
      </h2>

      <p class="hidden text-gray-500 md:mt-4 md:block">
        Advance your organization's achievements by tapping into premier talent via our all-encompassing job portal.
        Gain entry to an extensive array of proficient individuals, enabling your enterprise to excel with an adept
        crew. Your future standout employee awaits – refine your hiring approach with assurance and accuracy.
      </p>

      <div class="mt-4 md:mt-8">
        <a href="#"
          class="inline-block border border-white bg-orange-600 hover:bg-transparent hover:text-black rounded px-12 py-3 text-sm hover:border-orange-600 font-medium text-white transition hover:bg-orange-600 focus:outline-none focus:ring focus:ring-yellow-400">
          List a Position
        </a>
      </div>
    </div>
  </div>

</section>
<?php
include './includes/footer.php';
?>
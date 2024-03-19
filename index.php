<?php

$pageTitle = 'Workiee - Your Job Home';
include './includes/header.php';

?>

<section class="bg-gray-900 text-white">
    <div class="mx-auto max-w-screen-xl px-4 py-32 lg:flex lg:h-1/2 lg:items-center">
        <div class="mx-auto max-w-3xl text-center">
            <h1
                class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 bg-clip-text text-3xl font-extrabold text-transparent sm:text-5xl">
                Elevate Your Career with

                <span class="sm:block"> with JobLine </span>
            </h1>

            <p class="mx-auto mt-4 max-w-xl sm:text-xl/relaxed">
                Explore exciting job prospects and find your path to success. Join us to connect with opportunities
                tailored just for you.
            </p>

            <div class="mt-8 flex flex-wrap justify-center gap-4">
                <a class="block w-full rounded border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-opacity-75 sm:w-auto"
                    href="account/register.php">
                    Register Now
                </a>

                <a class="block w-full rounded border border-blue-600 px-12 py-3 text-sm font-medium text-white hover:bg-blue-600 focus:outline-none focus:ring active:bg-blue-500 sm:w-auto"
                    href="jobs">
                    Latest Jobs
                </a>
            </div>
        </div>
    </div>
</section>

<section>
  <div class="mx-auto max-w-screen-2xl px-4 py-8 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
      <div class="bg-blue-600 p-8 md:p-12 lg:px-16 lg:py-24">
        <div class="mx-auto max-w-xl text-center">
          <h2 class="text-2xl font-bold text-white md:text-3xl">
          Discover Your Career Odyssey: Your Gateway to a World of Opportunities
          </h2>

          <p class="hidden text-white/90 sm:mt-4 sm:block">
          Embark on an inspiring journey towards professional fulfillment with our comprehensive job portal. Explore a myriad of diverse opportunities, empowering you to shape and elevate your career with unwavering confidence. Your dream job awaits – start your exploration today!
          </p>

          <div class="mt-4 md:mt-8">
            <a
              href="#"
              class="inline-block rounded border border-white bg-white px-12 py-3 text-sm font-medium text-blue-500 transition hover:bg-transparent hover:text-white focus:outline-none focus:ring focus:ring-yellow-400"
            >
              Get Started Today
            </a>
          </div>
        </div>
      </div>

      <div class="grid grid-cols-2 gap-4 md:grid-cols-1 lg:grid-cols-2">
        <img
          alt="Student"
          src="https://images.unsplash.com/photo-1621274790572-7c32596bc67f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=654&q=80"
          class="h-40 w-full object-cover sm:h-56 md:h-full"
        />

        <img
          alt="Student"
          src="https://images.unsplash.com/photo-1567168544813-cc03465b4fa8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
          class="h-40 w-full object-cover sm:h-56 md:h-full"
        />
      </div>
    </div>
  </div>
</section>


<section class="overflow-hidden bg-gray-50 sm:grid sm:grid-cols-2">
  <div class="p-8 md:p-12 lg:px-16 lg:py-24">
    <div class="mx-auto max-w-xl text-center">
      <h2 class="text-2xl font-bold text-gray-900 md:text-3xl">
      Power Up Your Workforce: Find Exceptional Talent with JobLine!
      </h2>

      <p class="hidden text-gray-500 md:mt-4 md:block">
      Elevate your company's success by discovering top-tier talent through our comprehensive job portal. Unlock access to a diverse pool of skilled professionals, empowering your business to thrive with the right team. Your next exceptional hire is just a click away – streamline your recruitment process with confidence and precision.
      </p>

      <div class="mt-4 md:mt-8">
        <a
          href="#"
          class="inline-block rounded bg-blue-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-blue-800 focus:outline-none focus:ring focus:ring-yellow-400"
        >
          Post Job
        </a>
      </div>
    </div>
  </div>

  <img
    alt="Student"
    src="https://images.unsplash.com/photo-1464582883107-8adf2dca8a9f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
    class="h-56 w-full object-cover sm:h-full"
  />
</section>
<?php
include './includes/footer.php';
?>
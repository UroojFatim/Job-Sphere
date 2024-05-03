<?php
session_start();
$pageTitle = 'Job_Sphere - Your Job Home';
include './includes/header.php';

?>
<!-- Hero Section -->
<section class="mb-8 text-[#451a03] bg-cover bg-center min-h-screen flex items-center justify-center" style="background-image: url('https://jobi-nextjs.vercel.app/_next/static/media/img_27.26aeb87c.jpg');">
  <div class="mx-auto max-w-screen-2xl space-y-6 px-8 py-12 lg:py-18">
    <div class="text-center">
      <h1 class="text-4xl font-extrabold text-amber-900">
        Explore Exciting Opportunities with
        <span class="block text-amber-900">Jobi</span>
      </h1>

      <p class="mt-6 max-w-xl text-lg text-neutral-900" style="max-width: 50rem;">
        Embark on a journey of growth and fulfillment. Jobi offers tailored career paths and connects you with opportunities that match your aspirations.
      </p>

      <div class="mt-8 flex flex-wrap justify-center gap-4">
        <a class="block rounded border border-sky-500 bg-sky-500 px-6 lg:px-8 py-3 text-xs lg:text-sm font-medium text-white hover:bg-transparent hover:text-black focus:outline-none focus:ring active:text-opacity-75 sm:w-auto" href="account/register.php">
          Get Started
        </a>

        <a class="block rounded border border-sky-500 bg-neutral-100 sm:bg-transparent px-4 lg:px-8 py-3 text-xs lg:text-sm font-medium text-black hover:bg-sky-500 hover:text-white focus:outline-none focus:ring active:bg-sky-600 sm:w-auto" href="jobs">
          Browse Jobs
        </a>
      </div>
    </div>
  </div>
</section>


<div class="mt-10 bg-wrapper position-relative wow fadeInUp" style="visibility: visible;">
  <div class="container mx-auto lg:max-w-screen-xl bg-gradient-to-r to-gradient-r from-sky-500 via-amber-900 to-amber-950 rounded-lg p-8 lg:p-12 flex flex-col lg:flex-row items-center">
    <div class="lg:w-1/2 lg:order-last flex justify-center lg:justify-end">
      <div class="img-meta me-xl-4 position-relative rounded-full overflow-hidden">
        <img alt="Job Image" loading="lazy" width="380" height="250" decoding="async" data-nimg="1" class="lazy-img shapes screen_01" style="color:transparent; border-radius: 20px;" src="https://jobi-nextjs.vercel.app/_next/static/media/img_28.4c49b680.jpg" srcset="https://jobi-nextjs.vercel.app/_next/static/media/img_28.4c49b680.jpg 1x, https://jobi-nextjs.vercel.app/_next/static/media/img_28.4c49b680.jpg 2x" />
      </div>
    </div>
    <div class="lg:w-1/2 lg:order-first text-center lg:text-left">
      <div class="text-wrapper wow fadeInRight" style="visibility: visible;">
        <div class="title-one mb-6 lg:mb-8">
          <h2 class="text-white text-2xl lg:text-3xl font-bold">Get the job of your dreams quickly.</h2>
        </div>
        <p class="text-white text-md lg:text-lg mb-6 lg:mb-8">Commonly used in the graphic and print publishing industries for previewing visual mockups. Limited social discrimination.</p>
        <a class="border border-white rounded-full hover:bg-white hover:text-black py-3 px-20 inline-flex items-center text-white" href="jobs.php">
          <span class="font-medium">Find your dream job.</span>
          <span class="ml-2 underline">Explore all</span>
          <span class="ml-auto"><i class="bi bi-chevron-right"></i></span>
        </a>

      </div>
    </div>
  </div>
</div>

<section class="mt-10 py-16 bg-white text-black relative">
  <hr class="absolute top-0 w-full border-t border-black">
  <hr class="absolute bottom-0 w-full border-t border-black">
  <div class="container mx-auto max-w-screen-xl px-4 flex flex-col md:flex-row items-center justify-between gap-8">
    <div class="text-center md:text-left">
      <h2 class="text-3xl md:text-4xl font-bold mb-4">Most Complete Job Portal</h2>
      <p class="text-lg mb-6">Signup and start finding your dream job or talented individuals.</p>
    </div>
    <div class="flex flex-col md:flex-row gap-4">
    <a class="block rounded border border-sky-500 bg-sky-500 px-6 lg:px-8 py-3 text-xs lg:text-sm font-medium text-white hover:bg-transparent hover:text-black focus:outline-none focus:ring active:text-opacity-75 sm:w-auto" href="jobs.php">
          Looking for a Job?
        </a>

        <a class="block rounded border border-sky-500 bg-neutral-100 sm:bg-transparent px-4 lg:px-8 py-3 text-xs lg:text-sm font-medium text-black hover:bg-sky-500 hover:text-white focus:outline-none focus:ring active:bg-sky-600 sm:w-auto" href="dashboard/recruiter/postjob.php">
         Post a Job
        </a>
    </div>
  </div>
</section>

<?php
include './includes/footer.php';
?>
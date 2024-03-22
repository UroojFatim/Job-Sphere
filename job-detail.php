<?php
include 'config.php';
$popup = '';
// Check if a job ID is provided in the URL
if (isset ($_GET['job_id'])) {
  $jobId = $_GET['job_id'];

  // Retrieve job details from the 'jobs' table based on the job ID
  $sql = "SELECT * FROM jobs WHERE id = $jobId";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $job = $result->fetch_assoc();
  } else {
    // Redirect to the jobs page if the job ID is not found
    header("Location: jobs.php");
    exit();
  }
} else {
  // Redirect to the jobs page if no job ID is provided
  header("Location: jobs.php");
}
$pageTitle = $job['title'] . '- Workiee';

include ('includes/header.php')
  ?>
<?php

echo '
    <section class="relative bg-[url(https://source.unsplash.com/700x300/?' . $job['job_category'] . ')] bg-cover bg-center bg-no-repeat">
    <div class="absolute inset-0 bg-white/75 bg-transparent from-white/95 to-white/25"></div>
  
    <div class="relative mx-auto max-w-screen-xl px-4 py-48 sm:px-6 lg:flex lg:items-center lg:px-8">
      <div class="max-w-xl text-left rtl:sm:text-right">
        <h1 class="text-3xl font-extrabold sm:text-5xl">
          Apply Now For
          <strong class="block font-extrabold text-orange-500"> ' . $job['title'] . ' </strong>
        </h1>
  
        <p class="mt-4 max-w-lg capitalize sm:text-xl/relaxed">
          Posted By ' . $job['company'] . '
        </p>
  
        <div class="mt-8 flex flex-wrap gap-4 text-center">
          <a
            href="apply-job?job_id=' . $job['id'] . '"
            class="block w-full rounded bg-orange-600 px-12 py-3 text-sm font-medium text-white hover:text-black shadow hover:bg-transparent hover:border-orange-500 border border-orange-500 focus:outline-none focus:ring active:bg-orange-500 sm:w-auto"
          >
            Apply Now
          </a>
        </div>
      </div>
    </div>
  </section>
  
  <div class="flex flex-col bg-orange-50 w-full mx-auto mt-12 px-16 py-12">
    <h5 class="text-2xl text-black font-semibold mb-4">Job Description</h5>
    <div class="text-lg mb-4">' . $job['description'] . ' </div>
    <h5 class="block mb-4 mt-2 font-sans text-2xl antialiased font-semibold leading-snug tracking-normal text-orange-gray-900">
      Job Details
    </h5>
    <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
      <ul class="text-lg space-y-2">
        <li>Category: ' . $job['job_category'] . '  </li>
        <li>Job type: ' . $job['jobType'] . '</li>
        <li>Location: ' . $job['location'] . '</li>
        <li>Date: ' . substr($job['created_at'], 0, 10) . '</li>
      </ul>
    </p>
  <a href=apply-job?job_id=' . $job['id'] . '>
  <button class="mt-4 align-middle font-sans font-semibold text-center uppercase transition-all text-sm py-3 px-6 rounded-lg hover:bg-white hover:text-orange-500 shadow-md shadow-gray-900/10 hover:shadow-lg bg-orange-500 text-white hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none" type="button">
  Apply Now
</button></a>
  </div>
  ';

<?php
include 'config.php';
$popup = '';
// Check if a job ID is provided in the URL
if (isset($_GET['job_id'])) {
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
$pageTitle = $job['title'] . '- JobLine';

include('includes/header.php')
  ?>
<?php

echo '
    <section class="relative bg-[url(https://source.unsplash.com/700x300/?' . $job['job_category'] . ')] bg-cover bg-center bg-no-repeat">
    <div class="absolute inset-0 bg-white/75 bg-transparent from-white/95 to-white/25"></div>
  
    <div class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:items-center lg:px-8">
      <div class="max-w-xl text-left rtl:sm:text-right">
        <h1 class="text-3xl font-extrabold sm:text-5xl">
          Apply Now For
  
          <strong class="block font-extrabold text-blue-700"> ' . $job['title'] . ' </strong>
        </h1>
  
        <p class="mt-4 max-w-lg sm:text-xl/relaxed">
          Posted By ' . $job['company'] . '
        </p>
  
        <div class="mt-8 flex flex-wrap gap-4 text-center">
          <a
            href="apply-job?job_id=' . $job['id'] . '"
            class="block w-full rounded bg-blue-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-blue-700 focus:outline-none focus:ring active:bg-blue-500 sm:w-auto"
          >
            Apply Now
          </a>
        </div>
      </div>
    </div>
  </section>
  
  <div class="flex">
    <div class="w-4/5 p-10 mx-5 bg-gray-50">
    <h3 class="text-2xl text-blue-600 font-semibold">Job Description</h3>
    ' . $job['description'] . ' </div>
    <div class="w-1/5 rounded-md bg-blue-700 text-white relative flex flex-col mt-6  shadow-md bg-clip-border rounded-xl h-min mr-3">
  <div class="p-6">
    <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900 text-center">
      Job Details
    </h5>
    <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
      <ul>
        <li>Category: ' . $job['job_category'] . '  </li>
        <li>Job type: ' . $job['jobType'] . '</li>
        <li>Location: ' . $job['location'] . '</li>
        <li>Date: ' . substr($job['created_at'], 0, 10) . '</li>
      </ul>
    </p>
  </div>
  <div class="p-6 ml-10 pt-0">
  <a href=apply-job?job_id=' . $job['id'] . '>
  <button class="align-middle font-sans font-bold text-center uppercase transition-all  text-xs py-3 px-6 rounded-lg bg-white text-blue-600 shadow-md shadow-gray-900/10 hover:shadow-lg hover:bg-blue-900 hover:text-white hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none" type="button">
  Apply Now
</button></a>
  </div>
    </div>
  </div>
  ';

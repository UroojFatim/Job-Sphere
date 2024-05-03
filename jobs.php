<?php
session_start();
// Include the configuration file and any necessary functions
include 'config.php';
$pageTitle = 'Jobs - Job_Sphere';
include 'includes/header.php';

// Retrieve all jobs from the 'jobs' table, ordered by the most recent first
$sql = "SELECT * FROM jobs ORDER BY created_at DESC";
$result = $conn->query($sql); ?>


<section class="min-h-screen flex justify-center items-center relative" style="background-image: url(https://img.freepik.com/free-photo/cut-out-young-adult-workplace-pretty-skyscraper_1134-1027.jpg?w=1060&t=st=1711886052~exp=1711886652~hmac=012e2e021d0161923b12a1a1f3a88056161764546023c3e5ce2d7888bb93bd20); background-repeat: no-repeat; background-size: cover; background-position: center;">
  <div class="absolute inset-0 bg-black opacity-50"></div>
  <div class="max-w-screen-xl px-4 py-28 text-center relative z-10">
    <h1 class="bg-white hover:bg-gray-600 bg-clip-text px-4 md:px-0 text-3xl font-extrabold text-transparent sm:text-5xl">
    Explore all jobs <span class="sm:block">posted by companies</span>
    </h1>
    <!-- <p class="mt-4 text-lg text-sky-500 hover:text-sky-600">Take part with us</p>
    <a href="#">
      <button class="mt-8 bg-amber-900 hover:bg-amber-950 border border-amber-950 text-white font-bold py-2 px-6 rounded-full shadow-lg transition duration-300 ease-in-out">Register Now</button>
    </a> -->
  </div>
</section>


<div class="mx-auto gap-4 w-full p-8 md:p-10 lg:py-10 lg:px-12 max-w-screen-2xl flex flex-col md:flex-row md:grid md:grid-cols-2 xl:grid-cols-2">
  <?php
  // Check if there are jobs to display
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

      echo '<article class="rounded-xl bg-white p-4 border border-gray-300 sm:p-6 lg:p-8">
        <div class="flex items-start sm:gap-8">
          <div
            class="hidden sm:grid sm:h-20 sm:w-20 sm:shrink-0 sm:place-content-center sm:rounded-full sm:border-2 sm:border-sky-500"
            aria-hidden="true"
          >
            <div class="flex items-center gap-1">
              <span class="h-8 w-0.5 rounded-full bg-sky-500"></span>
              <span class="h-6 w-0.5 rounded-full bg-sky-500"></span>
              <span class="h-4 w-0.5 rounded-full bg-sky-500"></span>
              <span class="h-6 w-0.5 rounded-full bg-sky-500"></span>
              <span class="h-8 w-0.5 rounded-full bg-sky-500"></span>
            </div>
          </div>
      
          <div>
            <strong
              class="rounded border border-sky-500 bg-sky-500 px-3 py-1.5 text-[12px] capitalize font-medium text-white"
            >
           ' . $row['job_category'] . '
            </strong>
      
            <h3 class="mt-4 text-lg font-medium sm:text-xl">
              <a href=job-detail?job_id=' . $row['id'] . ' class="hover:underline">  ' . $row['title'] . ' </a>
            </h3>
            <p class="mt-1 text-sm text-gray-700">
            ' . substr($row['description'], 0, 150) . ' ...
            </p>
      
            <div class="mt-4 sm:flex sm:items-center sm:gap-2">
              <div class="flex items-center gap-1 text-gray-500">
                <p class="text-xs font-medium"> ' . $row['company'] . '</p>
              </div>
      
              <span class="hidden sm:block" aria-hidden="true">&middot;</span>
      
              <p class="mt-2 text-xs font-medium text-gray-500 sm:mt-0">
              ' . substr($row['created_at'], 0, 10) . '
              </p>
            </div>
          </div>
        </div>
      </article>';
    }

  } else {
    echo "<p class='p-10 text-center text-primary-600 font-semibold text-2xl'>No Jobs found.<p>";
  }
  ?>
</div>

<section class="flex flex-col items-center justify-center bg-gray-100 py-20 rounded-lg text-center">
  <h1 class="bg-gradient-to-r from-amber-950 to-sky-500 hover:bg-950 bg-clip-text px-4 md:px-0 text-3xl font-extrabold text-transparent sm:text-5xl">
    Looking for Talent? <span class="sm:block"></span>
  </h1>
  <p class="mt-4 text-lg text-amber-900 hover:text-amber-950">Post job and hire people</p>
  <a href="dashboard/recruiter/postjob.php" class="mt-8">
    <button class="bg-amber-900 hover:bg-amber-950 border border-amber-950 text-white font-bold py-2 px-6 rounded-full shadow-lg transition duration-300 ease-in-out">Post a Job</button>
  </a>
</section>
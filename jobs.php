<?php
// Include the configuration file and any necessary functions
include 'config.php';
$pageTitle = 'Jobs - Jobline';
include 'includes/header.php';

// Retrieve all jobs from the 'jobs' table, ordered by the most recent first
$sql = "SELECT * FROM jobs ORDER BY created_at DESC";
$result = $conn->query($sql); ?>
<section class="bg-gray-900 text-white">
  <div class="mx-auto max-w-screen-xl px-4 py-32 lg:flex lg:h-1/2 lg:items-center">
    <div class="mx-auto max-w-3xl text-center">
      <h1
        class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 bg-clip-text text-3xl font-extrabold text-transparent sm:text-5xl">
        Explore all jobs

        <span class="sm:block"> posted by companies </span>
      </h1>
    </div>
  </div>
</section>
<div class="w-[90%] mx-auto p-10 flex">
  <?php
  // Check if there are jobs to display
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

      echo '<article class="rounded-xl bg-white w-1/2 p-4 ring ring-indigo-50 sm:p-6 lg:p-8">
        <div class="flex items-start sm:gap-8">
          <div
            class="hidden sm:grid sm:h-20 sm:w-20 sm:shrink-0 sm:place-content-center sm:rounded-full sm:border-2 sm:border-indigo-500"
            aria-hidden="true"
          >
            <div class="flex items-center gap-1">
              <span class="h-8 w-0.5 rounded-full bg-indigo-500"></span>
              <span class="h-6 w-0.5 rounded-full bg-indigo-500"></span>
              <span class="h-4 w-0.5 rounded-full bg-indigo-500"></span>
              <span class="h-6 w-0.5 rounded-full bg-indigo-500"></span>
              <span class="h-8 w-0.5 rounded-full bg-indigo-500"></span>
            </div>
          </div>
      
          <div>
            <strong
              class="rounded border border-indigo-500 bg-indigo-500 px-3 py-1.5 text-[10px] font-medium text-white"
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
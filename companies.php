<?php
session_start();
// Include the configuration file and any necessary functions
include 'config.php';
$pageTitle = 'Companies - Job_Sphere';
include 'includes/header.php';
// Retrieve all companies from the 'companies' table
$sql = "SELECT * FROM companies";
$result = $conn->query($sql);
?>
<section class="min-h-screen flex justify-center items-center relative" style="background-image: url(https://img.freepik.com/free-photo/city-lights-urban-scenic-view-buildings-concept_53876-139782.jpg?w=900&t=st=1711886258~exp=1711886858~hmac=970ff8f5bb8a8b827cf8ab3bbe434ce6eeda3ea7f0782016b41cd6c131b6ef16); background-repeat: no-repeat; background-size: cover; background-position: center;">
  <div class="absolute inset-0 bg-black opacity-50"></div>
  <div class="max-w-screen-xl px-4 py-28 text-center relative z-10">
    <h1 class="bg-white hover:bg-gray-600 bg-clip-text px-4 md:px-0 text-3xl font-extrabold text-transparent sm:text-5xl">
      Find the Best Company <span class="sm:block">For Your Career!</span>
    </h1>
    <!-- <p class="mt-4 text-lg text-sky-500 hover:text-sky-600">Take part with us</p>
    <a href="#">
      <button class="mt-8 bg-amber-900 hover:bg-amber-950 border border-amber-950 text-white font-bold py-2 px-6 rounded-full shadow-lg transition duration-300 ease-in-out">Register Now</button>
    </a> -->
  </div>
</section>

<div class="mx-auto gap-4 w-full p-8 md:p-10 lg:py-10 lg:px-12 max-w-screen-2xl flex flex-col md:flex-row md:grid md:grid-cols-2 lg:grid-cols-3">
  <?php
  // Check if there are companies to display
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      // Output each company's details
      echo '<article
            class="rounded-lg border border-gray-400 bg-white p-4 w-full shadow-lg transition hover:shadow-xl sm:p-6"
          >
          <div class="flex gap-x-3">
            <span class="inline-block rounded bg-sky-600 p-2 text-white">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path d="M12 14l9-5-9-5-9 5 9 5z" />
                <path
                  d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"
                />
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
                />
              </svg>
            </span>
          
            <a href="#">
              <h3 class="mt-1 text-lg font-medium text-vlack">
                ' . $row['name'] . '
              </h3>
            </a>
            </div>
            <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
            ' . $row['description'] . '
            </p>
          
            <a href="#" class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-amber-900">
            ' . $row['industry'] . '
          
              <span aria-hidden="true" class="block transition-all group-hover:ms-0.5 rtl:rotate-180">
                &rarr;
              </span>
            </a>
          </article>
          ';
    }
  } else {
    echo "<p class='w-full text-center py-10 text-2xl text-gray-600'>No companies found.</p>";
  }
  ?>
</div>


<section class="flex flex-col items-center justify-center bg-gray-100 py-20 rounded-lg text-center">
  <h1 class="bg-gradient-to-r from-amber-950 to-sky-500 hover:bg-amber-950 bg-clip-text px-4 md:px-0 text-3xl font-extrabold text-transparent sm:text-5xl">
    Wanna Join us?? <span class="sm:block">For the best result!</span>
  </h1>
  <p class="mt-4 text-lg text-amber-900 hover:text-amber-950">Register your Comapny</p>
  <a href="account/register.php" class="mt-8">
    <button class="bg-amber-900 hover:bg-amber-950 border border-amber-950 text-white font-bold py-2 px-6 rounded-full shadow-lg transition duration-300 ease-in-out">Register Now</button>
  </a>
</section>


</body>



</html>
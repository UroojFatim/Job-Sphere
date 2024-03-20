<?php

include '../../config.php';

session_start();
$message = '';

if (!isset($_SESSION['user_id'])) {
  header("Location: /account/login.php");
  exit();

} else if (($_SESSION['account_type'] !== 'jobseeker')) {
  header('Location: /workiee_jobportal');
  exit();
}
// Get the current user's ID from the session
$user_id = $_SESSION['user_id'];

// Check if the jobseeker profile exists for the current user
$sql = "SELECT * FROM jobseekers WHERE user_id = $user_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Jobseeker profile exists, display the profile details
  $profile = $result->fetch_assoc();
} else {
  // Jobseeker profile doesn't exist, show the profile form
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process the form submission and insert data into the jobseekers table
    $full_name = $_POST['full_name'];
    $resume_path = $_POST['resume_path'];
    $skills = $_POST['skills'];
    $education = $_POST['education'];
    $experience = $_POST['experience'];

    $insertSql = "INSERT INTO jobseekers (user_id, full_name, resume_path, skills, education, experience)
                      VALUES ($user_id, '$full_name', '$resume_path', '$skills', '$education', '$experience')";

    if ($conn->query($insertSql) === TRUE) {
      // Profile created successfully, you can redirect to another page or display a success message
      $message = "Profile created successfully!";
    } else {
      // Handle the error, you can redirect to an error page or display an error message
      echo "Error: " . $insertSql . "<br>" . $conn->error;
    }
  }
}
$pageTitle = 'Jobseeker - Dashboard';
include('../../includes/header.php')
  ?>


<?php
if (!isset($profile)) {
  ?>

  <main class="main bg-white px-6 md:px-16 py-6">
    <div class="w-full max-w-xl mx-auto">
      <form method="post">
        <h1 class="text-2xl mb-2 font-bold text-center">Create Profile</h1>
        <p class="text-gray-600 font-semibold text-center py-2">
          <?php echo $message ?>
        </p>
        <div class="job-info border-b-2 py-2 mb-5">
          <div class="mb-4">
            <label class="block text-gray-700 text-sm mb-2" for="name">Full Name</label>
            <input
              class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-gray-500"
              type="text" id="full_name" name="full_name" placeholder="Sarfaraz U" autofocus>
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 text-sm mb-2" for="resume">Resume Path</label>
            <input
              class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-gray-500"
              type="url" id="resume_path" name="resume_path" placeholder="https://linkedin.com/in/..." autofocus>
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 text-sm mb-2" for="skills">Skills</label>
            <input
              class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-gray-500"
              type="text" id="skills" name="skills" placeholder="JavaScript, PHP, MongoDB" autofocus>
          </div>


          <div>
            <label for="education" class="block text-gray-700 text-sm mb-2">Education</label>
            <textarea name="education" id="education"
              class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-gray-500"
              cols="" rows="10"></textarea>
          </div>
          <div>
            <label for="experience" class="block text-gray-700 text-sm mb-2">Experience</label>
            <textarea name="experience" id="experience"
              class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-gray-500"
              cols="" rows="10"></textarea>
          </div>
          <div>
            <button class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-3 rounded" type="submit">Create
              Profile</button>
          </div>
      </form>
    </div>
  </main>

  <?php
} else {
  ?>
  <h1 class="text-4xl text-center py-5 text-gray-800 font-semibold">Hi
    <?php echo $profile['full_name'] ?>, Welcome Back!
  </h1>
  <main class="flex mx-10 p-10 rounded-md">
    <div class="w-1/2">
      <h3 class="text-2xl font-semibold py-5 text-blue-950">Profile Details</h3>
      <ul>
        <li>Full Name:
          <span class="font-semibold text-black">
            <?php echo $profile['full_name'] ?>
          </span>
        </li>
        <li>Resume Link:
          <span class="font-semibold text-black">
            <?php echo $profile['resume_path'] ?>
          </span>
        </li>
        <li>Skills:
          <span class="font-semibold text-black">
            <?php echo $profile['skills'] ?>
          </span>
        </li>
        <li>Education:
          <span class="font-semibold text-black">
            <?php echo $profile['education'] ?>
          </span>
        </li>
        <li>Experience:
          <span class="font-semibold text-black">
            <?php echo $profile['experience'] ?>
          </span>
        </li>
      </ul>
    </div>
  </main>
  <h2 class="text-2xl text-center py-5 text-gray-800 font-semibold uppercase">Job Applications
  </h2>

  <?php

  $sql_applications = "
    SELECT 
    job_applications.id,
    jobs.title AS job_title,
    companies.name AS company_name,
    job_applications.cover_letter,
    job_applications.applied_at,
    job_applications.status
FROM 
    job_applications
JOIN 
    jobs ON job_applications.job_id = jobs.id
JOIN 
    jobseekers ON job_applications.jobseeker_id = jobseekers.user_id
JOIN 
    companies ON jobs.id = companies.id
WHERE 
    jobseekers.user_id = $user_id;


";

  $result = $conn->query($sql_applications);
  if (!$result) {
    die("Error: " . $conn->error);
  }
  if ($result->num_rows > 0) {
    echo '<div class="relative mx-16 mb-16 overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-white uppercase bg-blue-800">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Job Title
                </th>
                <th scope="col" class="px-6 py-3">
                   Company Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Cover Letter
                </th>
                <th scope="col" class="px-6 py-3">
                    Apply Date
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">View</span>
                </th>
            </tr>
        </thead>
        <tbody>';

    while ($row = $result->fetch_assoc()) {
      echo ' <tr class="bg-white border-b hover:bg-gray-50">
        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
        ' . $row["job_title"] . '
        </th>
        <td class="px-6 py-4">
        ' . $row["company_name"] . '
        </td>
        <td class="px-6 py-4">
        ' . substr($row["cover_letter"], 0, 15) . ' ...
        </td>
        <td class="px-6 py-4">
        ' . substr($row["applied_at"], 0, 10) . '
        </td>
        <td class="px-6 py-4">
        ' . $row["status"] . '
        </td>
        <td class="px-6 py-4 text-right">
            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
        </td>
    </tr>';
    }

    echo '       
    </tbody>
</table>
</div>';
  } else {
    echo 'No job applications found.';
  }
}
?>
<?php

include '../../config.php';

$message = '';
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['account_type'] !== 'recruiter') {
  header('Location: /Job_Portal/account/login.php');
  exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve form data
  $jobTitle = $_POST['title'];
  $jobDescription = $_POST['description'];
  $jobLocation = $_POST['location'];
  $jobType = $_POST['jobType'];
  $jobCate = $_POST['job_category'];

  // Insert job details into the 'jobs' table
  $company = $_SESSION['username'];
  $recruitorId = $_SESSION['user_id'];

  $sql = "INSERT INTO jobs (id, title, description, job_category, company,  location, jobType) VALUES ('$recruitorId','$jobTitle', '$jobDescription', '$jobCate',  '$company', '$jobLocation',  '$jobType')";

  if ($conn->query($sql) === TRUE) {
    // Job posted successfully
    $message =  "Job posted successfully!";
  } else {
    // Error in posting job
    echo "Error: " . $conn->error;
  }
}
?>
<?php $pageTitle = 'Post Job - Workiee'; include('../../includes/header.php') ?>

<main class="main bg-sky-50 px-6 md:px-16 py-6">
  <div class="w-full max-w-xl mx-auto">
    <form action="" method="post">
      <h1 class="text-2xl mb-2 font-bold text-center">Post new job</h1>
      <p class="text-gray-600 font-semibold text-center py-2"><?php echo $message ?></p>
      <div class="job-info border-b-2 py-2 mb-5">
        <!--    Title      -->
        <div class="mb-4">
          <label class="block text-gray-700 text-md mb-2" for="job-title">Title</label>
          <input
            class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-gray-500 shadow-md"
            type="text" id="job-title" name="title" placeholder="Frontend Developer" autofocus>
        </div>

        <div class="md:flex md:justify-between">
          <div class="w-full md:w-3/12 mb-4 md:mb-0">
            <label class="block text-gray-700 text-md mb-2" for="job-type">
              Job Type
            </label>
            <div class="relative">
              <select
                class="block appearance-none w-full bg-white border border-gray-400 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:border-gray-500 shadow-md"
                id="job-type" name="jobType">
                <option>Full-time</option>
                <option>Part-time</option>
                <option>Freelance</option>
                <option>Contract</option>
              </select>

              <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
              </div>
            </div>
          </div>

          <!--     Location       -->
          <div class="w-full md:w-8/12 mb-4 md:mb-0">
            <label for="location" class="block text-gray-700 text-md mb-2">Location</label>
            <input type="text"
              class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-gray-500 shadow-md"
              id="location" name="location" placeholder="Schwerin">
          </div>
        </div>
        <div class="md:flex md:justify-between">
          <div class="w-full mb-4">
            <label class="block text-gray-700 text-md mb-2" for="job-type">
              Job Category
            </label>
            <div class="relative">
              <select
                class="block appearance-none w-full bg-white border border-gray-400 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:border-gray-500 shadow-md"
                id="job-category" name="job_category">
                <option value="web-developer">Web Developer</option>
                <option value="software-engineer">Software Engineer</option>
                <option value="data-analyst">Data Analyst</option>
                <option value="network-administrator">Network Administrator</option>
                <option value="marketing-specialist">Marketing Specialist</option>
                <option value="customer-service-representative">Customer Service Representative</option>
                <option value="project-manager">Project Manager</option>
                <option value="accountant">Accountant</option>
                <option value="human-resources">Human Resources</option>
                <option value="sales-representative">Sales Representative</option>
                <option value="graphic-designer">Graphic Designer</option>
                <option value="content-writer">Content Writer</option>
                <option value="digital-marketer">Digital Marketer</option>
                <option value="business-analyst">Business Analyst</option>
                <option value="UX/UI-designer">UX/UI Designer</option>
                <option value="cybersecurity-analyst">Cybersecurity Analyst</option>
                <option value="healthcare-professional">Healthcare Professional</option>
                <option value="teacher">Teacher</option>
                <option value="mechanical-engineer">Mechanical Engineer</option>
                <option value="electrician">Electrician</option>

              </select>

              <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
              </div>
            </div>
          </div>
        </div>
        <div>
          <label for="description" class="block text-gray-700 text-md mb-2">Description</label>
          <textarea name="description" id="description"
            class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-gray-500 shadow-md"
            cols="" rows="10"></textarea>
        </div>
        <div class="flex justify-center w-full">
          <button class="border border-amber-900 hover:border-amber-950 bg-amber-900 hover:bg-transparent hover:text-black text-white py-3 px-5 rounded-md w-full" type="submit">Create job</button>
        </div>
    </form>
  </div>
</main>
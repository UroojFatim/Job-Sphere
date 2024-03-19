<?php
// Include the configuration file and any necessary functions
include 'config.php';

// Check if the user is logged in
session_start();

if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page if the user is not logged in
    header("Location: /account/login.php");
    exit();
}

// Get the user's account type
$userType = $_SESSION['account_type'];
$message = '';
include('includes/header.php');
// Check if the user is a recruiter
if ($userType === 'recruiter') {
    ?>
    <div class="relative ml-96 my-20 -mr-5 p-4 w-full max-w-md max-h-full">
        <div class="relative rounded-lg shadow bg-blue-950">

            <div class="p-4 md:p-5 text-center">
                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <h3 href="/" class="mb-5 text-lg font-normal text-white">Recruiters Can't Apply
                    For Job!</h3>
                <a href="">
                    <button data-modal-hide="popup-modal" type="button"
                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                        Go Back
                    </button></a>
            </div>
        </div>
    </div>

    <?php
    exit();
}

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
    exit();
}

// Process job application form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $coverLetter = $_POST['cover_letter'];
    
    // Get jobseeker ID from the session
    $user_id = $_SESSION['user_id'];
    $sqlcheck = "SELECT * FROM jobseekers WHERE user_id = $user_id";
    $results = $conn->query($sqlcheck);

    if ($results->num_rows > 0) {
        $jobseekerData = $results->fetch_assoc();
        
        $jobseekerId = $jobseekerData['user_id'];
        
        // Now $jobseekerId contains the jobseeker's ID
    } else {
        // Handle the case where no jobseeker data is found
        $message = 'Create Jobseeker Profile First!';
    }

    // Insert job application data into the 'job_applications' table
    $insertSql = "INSERT INTO job_applications (job_id, jobseeker_id, cover_letter) VALUES ($jobId, $jobseekerId, '$coverLetter')";

    if ($conn->query($insertSql) === TRUE) {
        $message = "Job application submitted successfully!";
        // Optionally, you can redirect the user to a confirmation page or perform additional actions
    } else {
        echo "Error: " . $insertSql . "<br>" . $conn->error;
    }
}

?>

<main class="main bg-white px-6 md:px-16 py-6">
    <div class="w-full max-w-xl mx-auto">
        <form method="post">
            <h1 class="text-2xl mb-2 font-bold text-center">Apply For
                <?php echo $job['title'] ?>
            </h1>
            <p class="text-gray-600 font-semibold text-center py-2">
                <?php echo $message ?>
            </p>
            <p class="text-gray-600 font-semibold text-center py-2">Your Profile Details will be sent to the recruiter!
            </p>
            <div>
                <label for="description" class="block text-gray-700 text-sm mb-2">Cover Letter</label>
                <textarea name="cover_letter" id="cover_letter"
                    class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-gray-500"
                    cols="" rows="10"></textarea>
            </div>
            <div>
                <button class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-3 rounded" type="submit">Apply
                    Now</button>
            </div>
        </form>
    </div>
</main>
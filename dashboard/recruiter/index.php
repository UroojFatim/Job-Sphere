<?php
// Include the configuration file and any necessary functions
include '../../config.php';

session_start();
// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page if the user is not logged in
    header("Location: /account/login.php");
    exit();
} else if (($_SESSION['account_type'] !== 'recruiter')) {
    header('Location: /workiee_jobportal');
    exit();
}
// Get the current user's ID from the session
$user_id = $_SESSION['user_id'];
$message = '';
// Check if the company profile exists for the current user
$sql = "SELECT * FROM companies WHERE id = $user_id";
$result = $conn->query($sql);

if (!$result) {
    // Handle the error, you can redirect to an error page or display an error message
    echo "Error: " . $sql . "<br>" . $conn->error;
} elseif ($result->num_rows > 0) {
    // Jobseeker profile exists, display the profile details
    $profile = $result->fetch_assoc();
} else {
    // Company profile doesn't exist, show the profile form
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Process the form submission and insert data into the companies table
        $name = $_POST['name'];
        $industry = $_POST['industry'];
        $description = $_POST['description'];
        $website = $_POST['website'];

        $insertSql = "INSERT INTO companies (id, name, industry, description, website)
                      VALUES ($user_id, '$name', '$industry', '$description', '$website')";

        if ($conn->query($insertSql) === TRUE) {
            // Profile created successfully, you can redirect to another page or display a success message
            $message = "Company profile created successfully!";
        } else {
            // Handle the error, you can redirect to an error page or display an error message
            echo "Error: " . $insertSql . "<br>" . $conn->error;
        }
    }
}
$pageTitle = 'Recruiter Dashboard';
include('../../includes/header.php')
    ?>
<?php
if (!isset($profile)) {
    // Display the company profile form
    ?>
    <main class="main bg-white px-6 md:px-16 py-6">
        <div class="w-full max-w-xl mx-auto">
            <form method="post">
                <h1 class="text-2xl mb-2 font-bold text-center">Company Profile</h1>
                <p class="text-gray-600 font-semibold text-center py-2">
                    <?php echo $message ?>
                </p>
                <div class="job-info border-b-2 py-2 mb-5">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm mb-2" for="name">Company Name</label>
                        <input
                            class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-gray-500"
                            type="text" id="name" name="name" placeholder="Faraz Web Link.." autofocus>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm mb-2" for="resume">Company Website</label>
                        <input
                            class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-gray-500"
                            type="url" id="website" name="website" placeholder="https://www.business.com.." autofocus>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm mb-2" for="industry">Industry</label>
                        <input
                            class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-gray-500"
                            type="text" id="industry" name="industry" placeholder="Technology" autofocus>
                    </div>


                    <div>
                        <label for="description" class="block text-gray-700 text-sm mb-2">Description</label>
                        <textarea name="description" id="description"
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
} else { ?>
    <h1 class="text-4xl text-center py-5 text-gray-800 font-semibold">Hi
        <?php echo $profile['name'] ?>, Welcome Back!
    </h1>
    <main class="flex mx-10 p-10 rounded-md">
        <div class="w-1/2">
            <h3 class="text-2xl font-semibold py-5 text-blue-950">Profile Details</h3>
            <ul>
                <li>Company:
                    <span class="font-semibold text-black">
                        <?php echo $profile['name'] ?>
                    </span>
                </li>
                <li>Industry:
                    <span class="font-semibold text-black">
                        <?php echo $profile['industry'] ?>
                    </span>
                </li>
                <li>Description
                    <span class="font-semibold text-black">
                        <?php echo $profile['description'] ?>
                    </span>
                </li>
                <li>Website:
                    <span class="font-semibold text-black">
                        <?php echo $profile['website'] ?>
                    </span>
                </li>
            </ul>
        </div>
        <div class="w-1/2 bg-blue-950 rounded-md p-5 m-4">
            <h3 class="text-2xl font-semibold text-white">Jobs By You!</h3>
            <div class="flex my-3">
                <?php
                $sqlforjob = "SELECT * FROM jobs WHERE id = $user_id ORDER BY created_at DESC";

                $jobs = $conn->query($sqlforjob);

                // Check if there are rows in the result set
                if ($jobs->num_rows > 0) {
                    while ($row = $jobs->fetch_assoc()) {
                        echo '<div class="bg-blue-800 p-2 rounded-md mx-2">
                                        <h3 class="text-white text-xl px-2 font-semibold">' . $row["title"] . '</h3>
                    <div class="flex py-3">
                        <a href="/workiee_jobportal/job-detail?job_id=' . $row['id'] . '"
                        <button
                            class="px-3 text-xs py-2 mx-2 bg-transparent border border-white text-white hover:bg-white hover:text-blue-950 rounded-md transition-all duration-200">View
                            Job Link</button></a>
                    </div>
                </div>';
                    }
                } else {
                    echo '<p class="text-center text-white">No jobs found.</p>';
                }
                ; ?>
            </div>
            <a href="postjob"><button
                    class="px-3 text-xs py-2 bg-white border border-white text-blue-750 font-semibold hover:bg-transparent hover:text-white rounded-md transition-all duration-200">Post
                    a Job</button></a>
        </div>
    </main>


    <h2 class="text-2xl text-center py-5 text-gray-800 font-semibold uppercase">Job Applications
    </h2>

    <?php

    $sql_applications = "
    SELECT 
    job_applications.id,
    jobs.title AS job_title,
    jobseekers.full_name,
    job_applications.cover_letter,
    job_applications.applied_at,
    job_applications.status
FROM 
    job_applications
JOIN 
    jobs ON job_applications.job_id = jobs.id
JOIN 
    jobseekers ON job_applications.jobseeker_id = jobseekers.user_id
WHERE 
    jobs.id = $user_id;

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
                   Applicant Name
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
        ' . $row["full_name"] . '
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
            <a href="view_application.php?application_id=' . $row["id"] . '" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
        </td>
    </tr>';
        }

        echo '       
    </tbody>
</table>
</div>';
    } else {
        echo '<p class="text-center py-4 text-2xl text-gray-600 font-semibold">No job applications found.</p>';
    }
}
?>
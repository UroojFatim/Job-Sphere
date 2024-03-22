<?php
// Assuming you have established a database connection
include('../../config.php');
$pageTitle = 'View Application - Workiee';
include('../../includes/header.php');
// Get the job application ID from the URL
$job_application_id = $_GET['application_id'];

// Query to retrieve job application details along with job seeker's profile
$sql = "
    SELECT 
        job_applications.id AS application_id,
        jobseekers.full_name AS job_seeker_name,
        jobseekers.resume_path AS job_seeker_resume,
        jobseekers.skills AS job_seeker_skills,
        jobseekers.education AS job_seeker_education,
        jobseekers.experience AS job_seeker_experience,
        job_applications.cover_letter,
        job_applications.applied_at,
        job_applications.status
    FROM 
        job_applications
    JOIN 
        jobseekers ON job_applications.jobseeker_id = jobseekers.user_id
    WHERE 
        job_applications.id = $job_application_id;
";

$result = $conn->query($sql);
if (!$result) {
    // Display SQL error if the query fails
    die("Error: " . $conn->error);
}

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Display the job application details
    echo '<div class="bg-white w-2/5 mx-auto my-10 overflow-hidden shadow rounded-lg border">
    <div class="px-4 py-6 sm:px-6">
        <h3 class="text-xl leading-6 font-medium text-gray-900">
            Job Application Details
        </h3>
        <p class="mt-1 max-w-2xl text-sm text-gray-500">
            Here is the information about applicant!
        </p>
    </div>
    <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
        <dl class="sm:divide-y sm:divide-gray-200">
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Full name
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                ' . $row['job_seeker_name'] . '
                </dd>
            </div>
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Resume Path
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <a href=' . $row['job_seeker_resume'] . '>' . $row['job_seeker_resume'] . '</a>
                </dd>
            </div>
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Skills 
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                ' . $row['job_seeker_skills'] . '
                </dd>
            </div>
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Education 
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                ' . $row['job_seeker_education'] . '
                </dd>
            </div>
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Experience
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                ' . $row['job_seeker_experience'] . '
                </dd>
            </div>
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Cover Letter
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                ' . $row['cover_letter'] . '
                </dd>
            </div>
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Applied on
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                ' . substr($row['applied_at'], 0, 10) . '
                </dd>
            </div>
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Status
                </dt>
                <dd class="mt-1 capitalize text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                ' . $row['status'] . '
                </dd>
            </div>
        </dl>
    </div>
    <div class="flex justify-center items-center">
        <a href="/workiee_jobportal/dashboard/recruiter/application/approve?application_id=' . $row['application_id'] . '" class="bg-green-700 text-center py-2 px-5 rounded-md text-white m-2 hover:bg-green-800">Approve</a>
        <a href="/workiee_jobportal/dashboard/recruiter/application/reject?application_id=' . $row['application_id'] . '" class="bg-red-700 text-center py-2 px-5 rounded-md text-white m-2 hover:bg-red-800">Reject</a>
    </div>
</div>';
} else {
    echo '<div class="bg-white overflow-hidden shadow rounded-lg border">
    <div class="px-4 py-5 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            No Details Found!
        </h3>
    </div>
</div>';
}
?>

<?php
include 'config.php';

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

$pageTitle = $job['title'] . '- Job_Sphere';
include ('includes/header.php');
?>

<section class="relative bg-cover bg-center bg-no-repeat" style="background-image: url('https://source.unsplash.com/700x300/?<?php echo $job['job_category']; ?>');">
    <div class="absolute inset-0 bg-gradient-to-b from-white/95 to-white/25"></div>

    <div class="relative mx-auto max-w-screen-xl px-6 py-16 md:py-24 lg:flex lg:items-center lg:px-8">
        <div class="max-w-xl mx-auto text-center lg:text-left">
            <h1 class="text-3xl font-extrabold sm:text-5xl text-amber-900"><?php echo $job['title']; ?></h1>
            <p class="mt-4 max-w-lg capitalize sm:text-xl/relaxed">Posted By <?php echo $job['company']; ?></p>
            <div class="mt-8">
                <a href="apply-job?job_id=<?php echo $job['id']; ?>" class="inline-block bg-sky-500 text-white px-8 py-3 text-sm font-semibold uppercase rounded-lg shadow-md hover:bg-white hover:text-sky-500 hover:shadow-lg transition-all">Apply Now</a>
            </div>
        </div>
    </div>
</section>

<div class="bg-sky-50">
    <div class="w-1/20.055a11 mx-auto p-8 md:p-12">
    <div style = "padding-left:15%; padding-right:15%; ">
        <h2 class="text-2xl md:text-3xl text-black font-semibold mb-6 italic text-center">Job Description</h2>
        <div class="text-lg text-gray-800 mb-6"><?php echo $job['description']; ?></div>
        
        <h3 class="text-xl md:text-2xl text-black font-semibold mb-4 italic text-center">Job Details</h3>
        <ul class="text-lg text-gray-800 font-light">
            <li class="flex justify-between items-center py-2">
                <span class="font-semibold">Category:</span>
                <span><?php echo $job['job_category']; ?></span>
            </li>
            <li class="flex justify-between items-center py-2">
                <span class="font-semibold">Job Type:</span>
                <span><?php echo $job['jobType']; ?></span>
            </li>
            <li class="flex justify-between items-center py-2">
                <span class="font-semibold">Location:</span>
                <span><?php echo $job['location']; ?></span>
            </li>
            <li class="flex justify-between items-center py-2">
                <span class="font-semibold">Date:</span>
                <span><?php echo substr($job['created_at'], 0, 10); ?></span>
            </li>
        </ul>
        <div class="text-center mt-8">
            <a href="apply-job?job_id=<?php echo $job['id']; ?>" class="inline-block bg-sky-500 text-white px-8 py-3 text-sm font-semibold uppercase rounded-lg shadow-md hover:bg-white hover:text-sky-500 hover:shadow-lg transition-all">Apply Now</a>
        </div></div>
    </div>

<?php include ('includes/footer.php'); ?>

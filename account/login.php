<?php

include '../config.php';

$message = '';
$delay = 3;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Retrieve user data from the 'users' table
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verify password
        if (password_verify($password, $row['password'])) {
            // Start a session and store user data
            session_start();
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['account_type'] = $row['account_type'];

            // Redirect the user to the dashboard or another page after successful login
            if ($_SESSION['account_type'] === 'jobseeker') {
                $message = 'Logged in Successfully! Redirecting...';
                header("Refresh: $delay; URL=/Job_Portal/dashboard/jobseeker");
            } else if ($_SESSION['account_type'] === 'recruiter') {
                $message = 'Logged in Successfully! Redirecting...';
                header("Refresh: $delay; URL=/Job_Portal/dashboard/recruiter");
            } else {
                header('Location: /');
            }
        } else {
            $message = 'Invalid Password';
        }
    } else {
        $message = 'User not Found!';
    }
}

$pageTitle = 'Login - Job_Sphere';
include '../includes/header.php';

?>
<section class="relative flex flex-wrap items-center justify-center lg:h-screen lg:items-center max-w-screen-2xl mx-auto" style="background-image: url(https://media.istockphoto.com/id/1292991881/photo/the-more-you-know-the-more-your-business-grows.jpg?s=1024x1024&w=is&k=20&c=JrmTG1vixmUZqUTBeZucxTo7mJ_iNP7PSdKUkOH6vWI=); background-color: rgba(0, 0, 0, 0.6); background-blend-mode: multiply; background-repeat: no-repeat; background-size: cover;">
    <div class="w-full  lg:w-1/2 lg:px-2 lg:py-12 bg-sky-50 rounded-2xl shadow-md ">
        <div class="mx-auto max-w-lg text-center">
            <h1 class="text-3xl font-bold sm:text-4xl mb-4">Welcome Back!</h1>
            <p class="text-gray-800 text-center py-2"><?php echo $message; ?></p>
            <p class="mt-4 text-gray-500">
                Login Now and Start Visiting your dashboard!
            </p>
        </div>

        <form method="post" class="mx-auto mb-0 mt-8 max-w-md space-y-4">
            <div class="shadow-md rounded-2xl">
                <label for="email" class="sr-only">Email</label>
                <input type="email" class="w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm" name="email" placeholder="Enter Email" required />
            </div>

            <div class="shadow-md rounded-2xl">
                <label for="password" class="sr-only">Password</label>
                <input type="password" class="w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm" name="password" placeholder="Enter Password" required />
            </div>

            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input type="checkbox" id="remember" class="text-sky-500 border-gray-300 rounded focus:ring-sky-500" />
                    <label for="remember" class="ml-2 text-sm text-gray-600">Remember Me</label>
                </div>

                <a href="/Job_Portal/account/forgot-password" class="text-sm text-sky-500 hover:underline">Forgot Password?</a>
            </div>

            <button type="submit" class="w-full rounded-lg bg-sky-500 px-6 py-3 text-sm font-medium text-white hover:bg-sky-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">Login</button>
        </form>

        <p class="mt-4 text-sm text-gray-600 text-center">
            New Here? <a href="/Job_Portal/account/register" class="text-sky-500 hover:underline">Sign Up</a>
        </p>
    </div>
</section>
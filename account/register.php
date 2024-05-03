<?php

include '../config.php';
$pageTitle = 'Register - Workiee';
include '../includes/header.php';
$message = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $accountType = $_POST['accountType'];

    // Check if the email already exists
    $checkEmailSql = "SELECT * FROM users WHERE email = '$email'";
    $checkEmailResult = $conn->query($checkEmailSql);

    if ($checkEmailResult->num_rows > 0) {
        $message = "This email is already registered. Please use a different email.";
    } else {
        // Insert user data into the 'users' table
        $insertSql = "INSERT INTO users (username, email, password, account_type) VALUES ('$username', '$email', '$password', '$accountType')";

        if ($conn->query($insertSql) === TRUE) {
            $message = 'Registered Successfully! <a href="/Job_Portal/account/login">Login Now</a>';
        } else {
            echo "Error: " . $insertSql . "<br>" . $conn->error;
        }
    }
}
?>
<section class="relative flex flex-wrap justify-center lg:h-screen lg:items-center max-w-screen-2xl mx-auto"  style="background-image: url(https://media.istockphoto.com/id/1292991881/photo/the-more-you-know-the-more-your-business-grows.jpg?s=1024x1024&w=is&k=20&c=JrmTG1vixmUZqUTBeZucxTo7mJ_iNP7PSdKUkOH6vWI=); background-color: rgba(0, 0, 0, 0.6); background-blend-mode: multiply; background-repeat: no-repeat; background-size: cover;">
    <div class="w-fulllg:w-1/2 lg:px-8 py-9 bg-sky-50 rounded-2xl">
        <div class="mx-auto max-w-lg text-center">
            <h1 class="text-2xl font-bold sm:text-3xl">Get started today!</h1>
            <p class="text-gray-800 text-center py-4"><?php echo $message; ?></p>
            <p class="mt-4 text-gray-500">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Et libero nulla eaque error neque
                ipsa culpa autem, at itaque nostrum!
            </p>
        </div>

        <form action="#" method="post" class="mx-auto mb-0 mt-8 max-w-md space-y-4">
            <div class="shadow-md rounded-2xl">
                <label for="username" class="sr-only">Username</label>

                <div class="relative">
                    <input type="text" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                        name="username" placeholder="Username" />
                </div>
            </div>
            <div class="shadow-md rounded-2xl">
                <label for="email" class="sr-only">Email</label>

                <div class="relative">
                    <input type="email" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm" name="email" placeholder="Enter email" />

                    <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                        </svg>
                    </span>
                </div>
            </div>

            <div class="shadow-md rounded-2xl">
                <label for="password" class="sr-only">Password</label>

                <div class="relative">
                    <input type="password" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm" name="password" placeholder="Enter password" />

                    <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </span>
                </div>
            </div>
            <div class="shadow-md rounded-2xl">
                <label for="account_type" class="sr-only">Account Type</label>

                <div class="relative">
                    <select name="accountType" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm">
                        <option value="recruiter">Recruiter</option>
                        <option value="jobseeker">Jobseeker</option>
                    </select>
                </div>
            </div>

            <div class="flex items-center justify-between">
                <p class="text-sm text-gray-500">
                    Have Account?
                    <a class="underline" href="/Job_Portal/account/login">Login</a>
                </p>

                <button type="submit"
                    class="inline-block rounded-lg bg-sky-500 px-7 py-3 text-sm font-medium text-white">
                    Register
                </button>
            </div>
        </form>
    </div>

    <!-- <div class="relative h-64 w-full sm:h-96 lg:h-full lg:w-1/2">
        <img alt="Welcome"
            src="https://images.unsplash.com/photo-1583674767461-99d1a9850069?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            class="absolute inset-0 h-full w-full object-cover" />
    </div> -->
</section>

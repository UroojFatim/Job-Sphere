<?php
// Include the configuration file and any necessary functions
include '../../config.php';

// Start or resume the session
session_start();
$pageTitle = 'Update Profile - Jobline';
include('../../includes/header.php');
// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
  // Redirect to the login page if the user is not logged in
  header("Location: /account/login.php");
  exit();
} else if (($_SESSION['account_type'] !== 'jobseeker')) {
  header('Location: /jobline');
  exit();
}
// Get the current user's ID from the session
$user_id = $_SESSION['user_id'];
$profileId = 0;
$message = '';
// Check if the jobseeker profile exists for the current user
$sql = "SELECT * FROM jobseekers WHERE user_id = $user_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $profile = $result->fetch_assoc();
  $profileId = $profile['id'];
} else {
  // Jobseeker profile doesn't exist, show the profile form
  if (isset($_POST['submit'])) {

      $full_name = $_POST['full_name'];
      $resume_path = $_POST['resume_path'];
      $skills = $_POST['skills'];
      $education = $_POST['education'];
      $experience = $_POST['experience'];

      $updateSql = "UPDATE `jobseekers` SET `full_name` = '$full_name', `resume_path` = '$resume_path', `education` = '$education', `experience` = '$experience' WHERE `jobseekers`.`id` = $profileId";

      if ($conn->query($updateSql) === TRUE) {
        $message = "Profile updated successfully!";
    } else {
      // Handle the error, you can redirect to an error page or display an error message
      echo "Error: " . $updateSql . "<br>" . $conn->error;
    }
  }

}
?>

<main class="main bg-white px-6 md:px-16 py-6">
  <div class="w-full max-w-xl mx-auto">
    <h1 class="text-2xl mb-2 font-bold text-center">Update Profile</h1>
    <p class="text-gray-600 font-semibold text-center py-2">
      <?php echo $message ?>
    </p>
    <form method="post">
      <div class="job-info border-b-2 py-2 mb-5">
        <div class="mb-4">
          <label class="block text-gray-700 text-sm mb-2" for="name">Full Name</label>
          <input
            class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-gray-500"
            type="text" id="full_name" name="full_name" value="<?php echo $profile['full_name'] ?>"
            placeholder="Sarfaraz U" autofocus>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm mb-2" for="resume">Resume Path</label>
          <input
            class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-gray-500"
            type="url" id="resume_path" name="resume_path" placeholder="https://linkedin.com/in/..."
            value="<?php echo $profile['resume_path'] ?>" autofocus>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm mb-2" for="skills">Skills</label>
          <input
            class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-gray-500"
            type="text" id="skills" name="skills" value="<?php echo $profile['skills'] ?>"
            placeholder="JavaScript, PHP, MongoDB" autofocus>
        </div>


        <div>
          <label for="education" class="block text-gray-700 text-sm mb-2">Education</label>
          <textarea name="education" id="education"
            class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-gray-500"
            cols="" rows="10"><?php echo $profile['education'] ?></textarea>
        </div>
        <div>
          <label for="experience" class="block text-gray-700 text-sm mb-2">Experience</label>
          <textarea name="experience" id="experience"
            class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-gray-500"
            cols="" rows="10"><?php echo $profile['experience'] ?></textarea>
        </div>
        <div>
          <button name="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-3 rounded" type="submit">Update Profile</button>
        </div>
    </form>
  </div>
</main>
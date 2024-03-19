<?php
include('../../../config.php');

$applicationId = $_GET['application_id'];
    // Update the status in the database
    $updateSql = "UPDATE job_applications SET status = 'rejected' WHERE id = $applicationId";

    if ($conn->query($updateSql)) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        header("Location: ../index");
        exit(); 
    } else {
        die("Error updating status: " . $conn->error);
    }
?>

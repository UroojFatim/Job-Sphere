<?php
include('../../../config.php');

$applicationId = $_GET['application_id'];
    // Update the status in the database
    $updateSql = "UPDATE job_applications SET status = 'accepted' WHERE id = $applicationId";

    if ($conn->query($updateSql)) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {
        die("Error updating status: " . $conn->error);
    }
?>

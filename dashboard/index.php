<?php
    session_start();
    if($_SESSION['account_type'] === 'recruiter'){
        header('Location: /Job_Portal/dashboard/recruiter');
    }
    else if($_SESSION['account_type'] === 'jobseeker'){
        header('Location: /Job_Portal/dashboard/jobseeker');
    }
    else{
        header('Location: /Job_Portal/account/register');
    }
?>
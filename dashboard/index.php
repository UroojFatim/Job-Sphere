<?php
    session_start();
    if($_SESSION['account_type'] === 'recruiter'){
        header('Location: /jobline/dashboard/recruiter');
    }
    else if($_SESSION['account_type'] === 'jobseeker'){
        header('Location: /jobline/dashboard/jobseeker');
    }
    else{
        header('Location: /jobline/account/register');
    }
?>
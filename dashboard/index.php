<?php
    session_start();
    if($_SESSION['account_type'] === 'recruiter'){
        header('Location: /workiee_jobportal/dashboard/recruiter');
    }
    else if($_SESSION['account_type'] === 'jobseeker'){
        header('Location: /workiee_jobportal/dashboard/jobseeker');
    }
    else{
        header('Location: /workiee_jobportal/account/register');
    }
?>
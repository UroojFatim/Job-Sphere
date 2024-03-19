<?php
session_start();
session_destroy();
header('location: /workiee_jobportal/account/login');
?>
<?php
session_start();
session_destroy();
header('location: /Job_Portal/account/login');
?>
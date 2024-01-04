<?php
session_start();
session_destroy();
header('location: /jobline/account/login');
?>
<?php
include '../config.php';

// Create jobs table
$sql_jobs = "CREATE TABLE IF NOT EXISTS jobs (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    company VARCHAR(255) NOT NULL,
    location VARCHAR(100) NOT NULL,
    jobType VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
if ($conn->query($sql_jobs) === TRUE) {
    echo "Table 'jobs' created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}
// Create users table
$sql_users = "CREATE TABLE IF NOT EXISTS users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,  -- Add UNIQUE constraint to email
    password VARCHAR(255) NOT NULL,
    account_type ENUM('recruiter', 'jobseeker') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
if ($conn->query($sql_users) === TRUE) {
    echo "Table 'users' created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}


$sql_companies = "CREATE TABLE IF NOT EXISTS companies (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    industry VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    website VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
if ($conn->query($sql_companies) === TRUE) {
    echo "Table 'companies' created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}
$sql_jobseekers = "CREATE TABLE IF NOT EXISTS jobseekers (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id INT(6) UNSIGNED,
    full_name VARCHAR(255) NOT NULL,
    resume_path VARCHAR(255),
    skills TEXT,
    education VARCHAR(255),
    experience TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)
)";
if ($conn->query($sql_jobseekers) === TRUE) {
    echo "Table 'jobseekers' created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

$sql_applications = "CREATE TABLE IF NOT EXISTS job_applications (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    job_id INT(6) UNSIGNED,
    jobseeker_id INT(6) UNSIGNED,
    cover_letter TEXT,
    applied_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status ENUM('pending', 'accepted', 'rejected') DEFAULT 'pending',
    FOREIGN KEY (job_id) REFERENCES jobs(id),
    FOREIGN KEY (jobseeker_id) REFERENCES jobseekers(user_id)
)";
if ($conn->query($sql_applications) === TRUE) {
    echo "Table 'applications' created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}
$sql_contacts = "CREATE TABLE IF NOT EXISTS contact_messages (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
if ($conn->query($sql_contacts) === TRUE) {
    echo "Table 'contacts' created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

$conn->close();
?>
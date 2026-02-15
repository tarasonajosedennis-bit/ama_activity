<?php
session_start();

$students = [
    'dennis' => 'dennis1998',
    'jose'  => 'tarasona09'
];

$input_username = $_POST['username'];
$input_password = $_POST['password'];

if (isset($students[$input_username]) && $students[$input_username] === $input_password) {
    
    $_SESSION['username'] = $input_username;
    header("Location: dashboard.php");
    exit();
} else {
    $_SESSION['error'] = "Invalid username or password!";
    header("Location: login.php");
    exit();
}
?>
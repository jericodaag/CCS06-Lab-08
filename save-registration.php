<?php

require "config.php";

use App\User;

// Save the user information, and automatically login the user

try {
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $birthdate = $_POST['birthdate'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $contact_number = $_POST['contact_number'];


    // Validate inputs
    if (empty($first_name) || empty($last_name) || empty($email) || empty($password) || empty($confirm_password) || empty($birthdate) || empty($gender) || empty($address) || empty($contact_number)) {
        throw new Exception("All fields are required.");
    }

    if ($password !== $confirm_password) {
        throw new Exception("Passwords do not match.");
    }

    $result = User::register($first_name, $middle_name, $last_name, $email, $password, $birthdate, $gender, $address, $contact_number);

    if ($result) {

        // Set the logged in session variable and redirect user to index page

        $_SESSION['is_logged_in'] = true;
        $_SESSION['user'] = [
            'id' => $result,
            'fullname' => $first_name . ' ' . $last_name,
            'email' => $email
        ];
        header('Location: index.php');
    }

} catch (PDOException $e) {
    error_log($e->getMessage());
    echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
} catch (Exception $e) {
    error_log($e->getMessage());
    echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

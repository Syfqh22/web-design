<?php
// Include the database connection file
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $username = $_POST['new-username']; // Adjusted to match form input name
    $email = $_POST['email'];
    $password = password_hash($_POST['new-password'], PASSWORD_DEFAULT); // Adjusted to match form input name

    // Check if the username or email already exists
    $checkQuery = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
    $checkResult = mysqli_query($conn, $checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        echo "Username or email already exists. Please try again.";
    } else {
        // Insert the new user into the database
        $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        if (mysqli_query($conn, $query)) {
            // Redirect to the login page after successful signup
            header("Location: login.html");
            exit(); // Stop further execution
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    }
}
?>

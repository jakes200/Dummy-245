<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name     = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name     = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email    = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Check if user already exists
    $check = "SELECT id FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $check);

    if (mysqli_num_rows($result) > 0) {
        echo "Email already registered. <a href='register.php'>Try again</a>";
    } else {
        $sql = "INSERT INTO users (first_name, last_name, email, password) VALUES ('$first_name', 'last_name', '$email', '$password')";
        if (mysqli_query($conn, $sql)) {
            echo "Registration successful. <a href='login.php'>Login here</a>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
}
?>

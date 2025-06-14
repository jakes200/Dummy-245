<?php
include 'connect.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email    = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    $sql = "SELECT id, first_name, password FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if ($row = mysqli_fetch_assoc($result)) {
        if (password_verify($password, $row['password'])) {
            // Store user info in session
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['first_name'];
            echo "Login successful. <a href='index.php'>Go to homepage</a>";
        } else {
            echo "Invalid password. <a href='login.php'>Try again</a>";
        }
    } else {
        echo "No account found with that email. <a href='login.php'>Try again</a>";
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-container">
    <h2>Register</h2>
    <form action="register_process.php" method="post">
        <label for="name">First Name:</label>
        <input type="text" name="first_name" required>

        <label for="name">Last Name:</label>
        <input type="text" name="last_name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <button type="submit">Register</button>
    </form>
    <p>Already have an account? <a href="login.php">Login here</a></p>
</div>

</body>
</html>

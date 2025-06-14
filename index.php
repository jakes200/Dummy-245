<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Link to external CSS -->
    <style>
        .nav-links {
            text-align: right;
            margin: 15px;
        }

        .nav-links a {
            margin-left: 15px;
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
        }

        .nav-links a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>

<!-- ✅ Navigation Bar -->
<div class="nav-links">
    <a href="login.php">Login</a>
    <a href="register.php">Register</a>
</div>

<!-- ✅ Welcome Messages -->
<?php
echo '<h3 class="welcome-message">Welcome to AlgoSpace!</h3>';
echo '<h3 class="tagline-message">A company for developing a culture of coding!</h3>';
?>

<h4 class="user-list">User List:</h4>

<!-- ✅ User Table -->
<?php
// Query to select all users
$sql = "SELECT id, first_name, email FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1' cellpadding='10'>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th></tr>";
    
    // Output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row["id"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["first_name"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["email"]) . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No users found.";
}

// Close the connection
mysqli_close($conn);
?>

</body>
</html>

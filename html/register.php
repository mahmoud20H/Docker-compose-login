<?php
// MariaDB database connection settings
$servername = "mariadb"; // Change this to MariaDB server name in docker compose
$username = ""; // Change this to your MariaDB username
$password = ""; // Change this to your MariaDB password
$database = "demo"; // Change this to your MariaDB database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $category = $_POST["category"];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT); // Hash the password

    // Prepare the SQL statement to avoid SQL injection
    $query = $conn->prepare("INSERT INTO users (username, password, category) VALUES (?, ?, ?)");
    $query->bind_param("sss", $username, $hashedPassword, $category);

    if ($query->execute()) {
        header("Location: login.html"); // Redirect to the login page
        exit();
    } else {
        echo "Registration failed.";
    }

    $query->close();
}

$conn->close();
?>

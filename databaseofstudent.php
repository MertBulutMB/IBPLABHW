<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentdb";

// Create a new MySQLi object and establish the database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Read the SQL file content
$sql = file_get_contents('path/to/sql-dump-file.sql');

// Execute the SQL queries
if ($conn->multi_query($sql) === TRUE) {
    echo "SQL queries executed successfully.";
} else {
    echo "Error executing SQL queries: " . $conn->error;
}

// Close the database connection
$conn->close();
?>

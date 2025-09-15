<?php
$host = 'localhost';
$db = 'product_db';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = mysqli_real_escape_string($conn, $_POST['name']);
$buying = (float) $_POST['buying_price'];
$selling = (float) $_POST['selling_price'];
$display = isset($_POST['display']) ? 1 : 0;

// Calculate profit
$profit = $selling - $buying;

// Insert query without prepared statement
$sql = "INSERT INTO products (name, buying_price, selling_price, profit, display) 
        VALUES ('$name', $buying, $selling, $profit, $display)";

if ($conn->query($sql) === TRUE) {
    echo "Product saved successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>

<?php

$servername = "localhost";
$username = "root"; 
$dbname = "url_shortener";

$conn = new mysqli($servername, $username, '', $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$shortCode = $_GET['code'];

$sql = "SELECT long_url FROM urls WHERE short_code = '$shortCode'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $longUrl = $row['long_url'];
    header("Location: $longUrl");
    exit;
} 
else {
    echo "URL not found";
}

$conn->close();

?>

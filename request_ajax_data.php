<?php

$servername = "localhost";
$username = "root"; 
$dbname = "url_shortener";

$conn = new mysqli($servername, $username, '', $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function generateShortCode($length = 6) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $shortCode = '';
    for ($i = 0; $i < $length; $i++) {
        $shortCode .= $characters[rand(0, $charactersLength - 1)];
    }
    return $shortCode;
}

$longUrl = $_POST['url'];

$shortCode = generateShortCode();

$sql = "INSERT INTO urls (long_url, short_code) VALUES ('$longUrl', '$shortCode')";

if ($conn->query($sql) === TRUE) {
    echo 'shorturl/'.$shortCode;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

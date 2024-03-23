<?php

$conn = mysqli_connect("localhost", 'root', '', 'short_url') or die("Ошибка подключения");
$url = htmlspecialchars($_GET['key']);
@$newSelect = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `urls` WHERE `short` = '".$url."'"));
if ($newSelect) {
    $result = [
        "url"=> $newSelect["url"],
        'short' => $newSelect['short']
    ];
    header('location: '.$result['url']);
}
echo "hello";

?>
<?php
$url = htmlspecialchars($_POST['url']);
$conn = mysqli_connect("localhost", 'root', '', 'short_url') or die("Ошибка подключения");
@$select = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `urls` WHERE `url` = '".$url."'"));
if ($select) {
    $result = [
        'url' => $select['url'],
    'short' => $select['short'],
    'link' => 'http://'.$_SERVER['HTTP_HOST'].'/'.$select['short']
    ];
}
else {
    $letters='qwertyuiopasdfghjklzxcvbnm1234567890';
    $count=strlen($letters);
    $intval=time();
    $result='';
    for($i = 0; $i < 4; $i++) {
        $last = $intval % $count;
        $intval = ($intval - $last) / $count;
        $result.= $letters[$last];
    }

    mysqli_query($conn, "INSERT INTO `urls` (`url`, `short`) VALUES ('".$url."', '".$result.$intval."') ");
    @$select = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `urls` WHERE `url` = '".$url."'"));
    $result = [
        'url'  => $select['url'],
        'short'  => $select['short'],
        'link' => 'http://'.$_SERVER['HTTP_HOST'].'/URLShort/A'.$select['short']
    ];
}


echo $result['link'];
?>
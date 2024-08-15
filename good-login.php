<?php
require_once('./config.php');

$sql="SELECT * FROM users WHERE username = ? AND password = ?;";
$sth = $db->prepare($sql);

$sth->execute([$_POST['username'], $_POST['password']]);
$row = $sth->fetch(PDO::FETCH_ASSOC);
if($row and $row['username']){
    echo "登入成功";
    print_r($row);
}
else{
    echo "登入失敗";
}
<?php
// admin'; #
require_once('./config.php');

$sql="SELECT * FROM users WHERE username = '" . $_POST['username'] . "' AND password = '" . $_POST['password'] . "';";
$sth = $db->query($sql);

if (!$sth) {
    die("SQL Error: " . $db->errorInfo()[2]);
}

$row = $sth->fetch(PDO::FETCH_ASSOC);

if($row and $row['username']){
    echo "登入成功";
    print_r($row);
}
else{
    echo "登入失敗";
}
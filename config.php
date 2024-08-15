<?php
try{
    $dsn="mysql:dbname=cybersqli;host=127.0.0.1;port=3306;charset=utf8mb4";
    $db= new PDO($dsn, 'root','');
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
}
catch(PDOException $e){
        exit('Connect to MySQL was failed.'. $e->getMessage());
}
<?php
// 連接到 MySQL 資料庫
$dsn = 'mysql:host=localhost;dbname=test';
$username = 'root';
$password = '';
echo "Hello from Prevent-SQL-injection!";
try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // 從用戶輸入取得資料
    $user_input = $_GET['username'];

    // 使用參數化查詢防止 SQL 注入
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->bindParam(':username', $user_input, PDO::PARAM_STR);
    $stmt->execute();

    // 輸出查詢結果
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "id: " . $row["id"] . " - Name: " . $row["username"] . "<br>";
    }
} catch (PDOException $e) {
    echo "錯誤: " . $e->getMessage();
}

$pdo = null;
?>
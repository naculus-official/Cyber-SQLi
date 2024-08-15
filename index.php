<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CyberSQLi</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
    <div class="login-container">
        <h2>Login - Bad</h2>
        <form method="POST" action="bad-login.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <input type="submit" value="Login">
        </form>
    </div>

    <div class="login-container">
        <h2>Login - Good</h2>
        <form method="POST" action="good-login.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <input type="submit" value="Login">
        </form>
    </div>
    <!-- footer at bottom-->
    <footer>
        <div>
            <p>Created by Naculus</p>
            <!-- copyright and auto get year -->
            <p>&copy; <?php echo date("Y"); ?></p>
            <!-- have link to refer to this github repo at naculus-official/CyberSQLi -->
            <p><a href="https://www.github.com/naculus-official/Cyber-SQLi">Cyber SQLi</a></p>
        </div>
        <div>
            <!-- have link to refer to my github profile -->
            <p><a href="https://www.github.com/naculus-official">Github: Naculus</a></p>
        </div>
    </footer>
</body>
</html>
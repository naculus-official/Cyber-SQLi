<?php
$currentTheme = 'light'; // 默認主題
if (isset($_COOKIE['theme'])) {
    $currentTheme = $_COOKIE['theme'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CyberSQLi</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            let currentTheme = document.body.getAttribute('data-theme') || 'light';
            let button = document.querySelector('.theme-toggle');
            button.setAttribute('data-theme', currentTheme);
            button.textContent = (currentTheme === 'dark') ? '🌞' : '🌙';

            window.toggleTheme = function() {
                let newTheme = (currentTheme === 'dark') ? 'light' : 'dark';
                document.body.setAttribute('data-theme', newTheme);
                button.setAttribute('data-theme', newTheme);
                button.textContent = (newTheme === 'dark') ? '🌞' : '🌙';
                document.cookie = `theme=${newTheme}; path=/; SameSite=Lax`;
                currentTheme = newTheme;
            }
        });
    </script>
</head>
<body data-theme="<?php echo $currentTheme; ?>">
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
            <!-- <p>Created by Naculus</p> -->
            <!-- copyright and auto get year -->
            <p>copyright &copy; <?php echo date("Y"); ?> <a href="https://www.naculus.com/">Naculus</a></p>
            <!-- have link to refer to this github repo at naculus-official/CyberSQLi -->
            <p><a href="https://www.github.com/naculus-official/Cyber-SQLi">Naculus-Official/Cyber-SQLi</a></p>
        </div>
        <div>
            <!-- have link to refer to my github profile -->
            <p><a href="https://www.github.com/naculus-official">Github: Naculus</a></p>
            <button class="theme-toggle" onclick="toggleTheme()">切換主題</button>
        </div>
    </footer>
    <script>
        function toggleTheme() {
            const currentTheme = document.body.getAttribute('data-theme');
            const newTheme = (currentTheme === 'dark') ? 'light' : 'dark';
            document.body.setAttribute('data-theme', newTheme);
        }
    </script>
</body>
</html>
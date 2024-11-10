<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

<h2>Login</h2>

<form id="loginForm" action="/login" method="POST">
    <div class="bungkus">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username" required><br><br>
    
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" required><br><br>
    
    <button type="submit">Login</button>
    </div>
</form>
<script src="index.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Login</title>
    <link rel="stylesheet" href="../frontend/login.css">
</head>
<body>
    <div class="kotak_login">
        <p class="tulisan_login"> Login </p>
        <form action="ceklogin.php" method="post" role="form"> 
            <label>username</label>
            <input type="text" name="username" class="form_login" placeholder="Username" autocomplete="off" > 
            <label>NPM</label>
            <input type="text" name="npm" class="form_login" placeholder="npm" autocomplete="off" > 
            <label>Password</label>
            <input type="text" name="password" class="form_login" placeholder="password" autocomplete="off" > 
            <input type="submit" class="Tombol_login" value="login" > 
    </div>
    
</body>
</html>
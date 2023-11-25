<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="container">
        <form action="controller/register.php" method="post" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800; text-align: center;">Register</p> <br>
            <div class="input-group">
                <input type="text" placeholder="Nama" name="nama" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confrimasi Password" name="cpassword" required>
            </div>
            <div class="input-group">
                <select name="role" class="role" required>
                    <option value="" disabled selected>Pilih Role dari User</option>
                    <option value="admin">Admin</option>
                    <option value="operator">Operator</option>
                </select>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Register</button>
            </div>
            <p class="login-register-text">Anda sudah punya akun?<a href="index.php">Login</a></p>
        </form>
    </div>
</body>
</html>
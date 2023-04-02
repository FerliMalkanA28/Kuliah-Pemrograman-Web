<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="stylesheet.css">
        <title>Login</title>
    </head>
    <body>
        <div class="login">
            <img src="Logo_UnivLampung.png" width="120px" height="120px" class="logo">
            <h1>Login</h1>
            <h3>Sistem Interaksi Database Mahasiswa</h3>
            <form action="login.php" method="post">
                <label>Username : </label>
                <input type="text" name="user"><br><br>
                <label>Password : </label>
                <input type="password" name="pass"><br>
                <input type="submit" value="Login">
            </form>
        </div>
    </body>
</html>
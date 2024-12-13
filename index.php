<?php
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Login Page</title>
    <link rel="stylesheet" href="./style.css"/>
</head>
<body>
    <div class="container">
        <form action="login.php" method="POST">
            <h1>Login</h1>
            <div class="input-box">
                <input 
                type="text"
                name="username"
                class="form-control"
                placeholder="nombre de usuario"
                required/> <br />
            </div>
            <div class="input-box">
                <input 
                type="password"
                name="password"
                class="form-control"
                placeholder="contraseña"
                required/> <br />
            </div>
            <button class="btn">iniciar sesion</button>
        </form>
    </div>
</body>
</html>

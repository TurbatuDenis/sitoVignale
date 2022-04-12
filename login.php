<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/CSS/StyleLogin.css">
    <link rel="shortcut icon" type="image/x-icon" href="Assets/Img/logo/favicon.ico" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <title>Area Privata |
        <?php

        session_start();

        $titoloSito = $_SESSION['nomeSito'];

        echo $titoloSito;
        
        ?>
    </title>
</head>

<body>
    <div class="login">
        <h1>Login</h1>
        <form action="authenticate.php" method="post">
            <label for="username">
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="username" placeholder="Username" id="username" required>
            <label for="password">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <script src="./Assets/JS/Script.js"></script>
            <button onclick="showPass()" type="button">
                <i class="fa fa-eye" aria-hidden="true"></i>
            </button>
            <input type="submit" value="Login">
        </form>
    </div>

</body>

</html>
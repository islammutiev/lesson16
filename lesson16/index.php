<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        header {
            display: flex;
            background-color: blue;
            color: white;
        }
    </style>
</head>
<body>
    <header>
        <h1>Logotype</h1>
        <h2> 
        <?php if(!isset($_SESSION['login'], $_SESSION['password'])){
                echo "Sign in";
            } else{
                echo "Menu";
            } ?>
         </h2>
    </header>
    <?php if(!isset($_SESSION['login'], $_SESSION['password'])){ ?>
    <form method="post" action="auth.php">
        <label> Login
            <input type="text" name="login">
        </label>
        <label> Password
            <input type="password" name="password">
        </label>
        <button type="submit">Sign in</button>
    </form>
    <?php } 
    else{
        echo "Signed in succesfully!"; 
    } ?>
</body>
</html>
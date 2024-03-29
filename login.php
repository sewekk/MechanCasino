<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href='login.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/76f54232be.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
        include_once('includes/errors.inc.php');
        error();
    ?>
    <section>
        <a href="index.html">
            <h1>Mechan<span> Casino</span></h1>
        </a>
        <h3>Zaloguj się do swojego konta</h3>
        <form action="includes/login.inc.php" method="POST">
            <input type="text" placeholder="Username" name="username">
            <input type="password" placeholder="Password" name="password">
            <button type="submit" name="submit">Log In</button>
        </form>
        <h3>Nie masz konta?</h3>
        <a href="register.php"><button>Załóż konto</button></a>
    </section>
</body>

</html>
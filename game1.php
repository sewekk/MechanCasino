<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="game/gamestyle.css">
    <script src="https://kit.fontawesome.com/76f54232be.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="game/game1.css">
</head>

<body>
    <header>
        <div class="logo"> 
            <img src="img/logo.php">
            <a href="index.html">
                <h1>MechanCasino</h1>
            </a>

            <h1 class="wallet"><span class="money">
                <?php
                    include_once('includes/errors.inc.php');
                    money();
                ?>
                </span>
            </h1>
        </div>
    </header>
    <main>
        <section class="game">
            <article></article>
            <article></article>
            <article></article>
        </section>
        <section class="input">
            <input type="text" placeholder="Stawka">
            <span class="button"><i class="fas fa-gamepad"></i></span>
        </section>
        <section class="history">
            <p>Historia gier:</p>
            <span>
                <ul>
                    <li></li>
                </ul>
            </span>
        </section>
    </main>
    <footer>SF</footer>
    <script src="js/wallet.js"></script>
    <script src="js/statistic.js"></script>
    <script src="js/draw.js"></script>
    <script src="js/Result.js"></script>
    <script src="js/game.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="game/gamestyle.css">
    <link rel="stylesheet" href="game/game3.css">
    <script src="https://kit.fontawesome.com/76f54232be.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="logo">

            <img src="img/logo.png">
            <a href="index.php">
                <h1>MechanCasino</h1>
            </a>

            <h1>
            <span class="money">
                <?php
                    include_once('includes/errors.inc.php');
                    money();
                ?>
                </span>
            </h1>
        </div>
    </header>
    <main>
        <div class='container'>
            <div id="coin" class=''>
                <div id="heads" class="heads"></div>
                <div id="tails" class="tails"></div>
            </div>
            <div class="chose">
                <div class="wybor1" data-color="heads"></div>
                <div class="wybor2" data-color="tails"></div>
            </div>
            <div class="button">
                <div>
                    <input type="text" placeholder="podaj kwote">
                    <button id="flip"><i class="fas fa-gamepad"></i></button>
                </div>

                <p>Czarne <span id="headsCount">0</span> <span class="red">Czerwone</span> <span
                        id="tailsCount">0</span></p>
            </div>

        </div>

    </main>
    <footer>SF</footer>
    <script src="js2/coinmain.js"></script>
</body>

</html>
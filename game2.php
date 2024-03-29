<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="game/gamestyle.css">
    <link rel="stylesheet" href="game/game2.css">
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
                    include_once('includes/dbh.inc.php');
                    money($conn);
                ?>
                </span>
            </h1>
        </div>
    </header>
    <main>
        <div class="roulette">
            <div class="roulette-container">
                <div class="wrap">
                    <div class="controller"></div>
                </div>
            </div>
        </div>

        <div class="chose">
            <div class="wybor1" data-color="r"></div>
            <div class="wybor2" data-color="g"></div>
            <div class="wybor3" data-color="b"></div>
        </div>
        <div class="play">
            <input type='text'>
            <span class="button"><i class="fas fa-gamepad"></i></span>
        </div>



    </main>
    <footer>SF</footer>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js2/ajaxupdatedata.js"></script>
    <script src="js2/main.js"></script>
</body>

</html>
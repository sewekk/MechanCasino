<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MechanCasino</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper1">
    </div>
    <div class='wrapper2'>
        <header>
            <div class="logo">
                <span>
                        <img src="img/logo.png">
                        MechanCasino
                    </span>
            </div>
            <div class="login">
                  <?php
                        include_once('includes/errors.inc.php');
                        loged();
                  ?>
                
            </div>
        </header>
        <main>
            <section>
                <h2>Jednoręki bandyta</h2>
                <p>
                    Maszyna hazardowa dobierająca losowe konfiguracje różnych symboli. Wygrana następuje w momencie ułożenia się w jednym rzędzie identycznych znaków.
                </p>
                <a href="game1.php">
                    <button>
                            Zagraj!
                        </button>
                </a>
            </section>
            <section>
                <h2>Ruletka</h2>
                <p>
                    Pseudolosowa, często hazardowa gra, grana w większości kasyn. Są dwa systemy ruletki: europejski i amerykański. Suma wszystkich liczb w ruletce daje 666, stąd określenie ''szatańska gra''.
                </p>
                <a href="game2.php">
                    <button>
                            Zagraj!
                        </button>
                </a>
            </section>
            <section>
                <h2>Coin Flip</h2>
                <p>
                    Rzut monetą – popularna metoda rozstrzygania sporów lub wyboru jednej z dwóch możliwości za pomocą monety. Polega na przypisaniu możliwości do dwóch stron monety i rzuceniu monety w powietrze.
                </p>
                <a href="game3.php">
                    <button>
                            Zagraj!
                        </button>
                </a>
            </section>
        </main>
        <footer>
            <p>SF</p>
        </footer>


    </div>

</body>

</html>
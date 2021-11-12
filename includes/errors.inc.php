<?php
            require_once("functions.inc.php");
            require_once("dbh.inc.php");
            session_start();
            function error(){
                if(isset($_GET["error"])){
                    if($_GET["error"]== "emptyinput"){
                        echo "<p>Nie wypełniłeś wszystkich pól</p>";
                    }
                    else if($_GET["error"]== "invalidusername"){
                        echo "<p>Podaj prawidłowy login</p>";
                    }
                    else if($_GET["error"]== "invalidemail"){
                        echo "<p>Podaj prawidłowy email</p>";
                    }
                    else if($_GET["error"]== "passworddontmach"){
                        echo "<p>Podałeś różne hasła</p>";
                    }
                    else if($_GET["error"]== "userexists"){
                        echo "<p>Nazwa użytkownika lub email zostaly już użyte</p>";
                    }
                    else if($_GET["error"]== "emptyinput"){
                        echo "<p>Nie wypełniłeś wszystkich pól</p>";
                    }
                    else if($_GET["error"]== "wronglogin"){
                        echo "<p>Nie ma takiego użytkownika</p>";
                    }
                    else if($_GET["error"]== "wrongpassword"){
                        echo "<p>Podałeś błędne hasło</p>";
                    }
                    
                    
                }
            }
            function loged(){
                    if (isset($_SESSION['userid'])) {
                        echo "<a href='includes/logout.inc.php'><button>Wyloguj się</button></a>";
                    }
                    else {
                        echo "<a href='includes/login.inc.php'><button>Zaloguj się</button></a>";
                    }
                
            }
            function money($conn){
                if (isset($_SESSION['money'])) {
                    getmoney($conn,$_SESSION['username']);
                    echo $_SESSION['money'];
                }
                else{
                    echo "200";
                }
            }
                
            
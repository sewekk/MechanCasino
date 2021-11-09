<?php
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
                }
            ?>
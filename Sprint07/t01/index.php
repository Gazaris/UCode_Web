<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Session for new</title>
        <meta charset="utf-8">
        <meta name="description" content="t01. Session for new">
        <link rel="icon" href="./src/img/shield.png">
        <style>
            form {
                padding: 20px;
            }
            #saved {
                display: none;
            }
            #dataholder {
                margin-left: 55px;
            }
        </style>
    </head>

    <body>
        <h1>Session for new</h1>
        <fieldset id="form">
            <form action="index.php" method="post">
                <fieldset>
                    <legend>About HERO</legend>
                    <p>
                        <span>Real Name</span>
                        <input type="text" name="name" placeholder="Name..." size="18" autofocus>
                        <span>Current Alias</span>
                        <input type="text" name="alias" placeholder="Alias..." size="18">
                        <span>Age</span>
                        <input type="number" name="age" placeholder="0" value="18" min="1" max="999" step="1">
                        <br><br>
                        <span>About</span>
                        <textarea name="about" cols="70" rows="5" maxlength="500" placeholder="Tell about yourself, max 500 symbols."></textarea>
                        <br>
                    </p>
                    <p>
                        <span>Your photo:</span>
                        <input type="file" name="photo">
                    </p>
                </fieldset>
                <fieldset>
                    <legend>Powers</legend>
                    <p>
                        <input type="checkbox" name="strength">
                        <label for="strength">Strength</label>

                        <input type="checkbox" name="speed">
                        <label for="speed">Speed</label>

                        <input type="checkbox" name="intelligence">
                        <label for="intelligence">Intelligence</label>

                        <input type="checkbox" name="teleportation">
                        <label for="teleportation">Teleportation</label>

                        <input type="checkbox" name="immortal">
                        <label for="immortal">Immortal</label>

                        <input type="checkbox" name="another">
                        <label for="another">Another</label>
                        <br>
                    </p>
                    <p>
                        <span>Level of control</span>
                        <input type="range" name="levelControl" min="0" max="10" step="1" value="0" style="outline: none">
                    </p>
                </fieldset>
                <fieldset>
                    <legend>Publicity</legend>
                    <p>
                        <input type="radio" id="unknown" value="unknown" name="publicity">
                        <label for="unknown">UNKNOWN</label>

                        <input type="radio" id="ghost" value="ghost" name="publicity">
                        <label for="ghost">LIKE A GHOST</label>

                        <input type="radio" id="comic" value="in comics" name="publicity">
                        <label for="comic">I AM IN COMICS</label>

                        <input type="radio" id="club" value="fun club" name="publicity">
                        <label for="club">I HAVE AFUN CLUB</label>

                        <input type="radio" id="star" value="superstar" name="publicity">
                        <label for="star">SUPERSTAR</label>
                    </p>
                </fieldset><br> 
                    <input type="reset" name="clear" value="CLEAR">
                    <input type="submit" name="send" value="SEND">
            </form>
        </fieldset>
        <div id="saved">
            <div id="dataholder">
                <?php
                if($_POST) {
                    $_SESSION["data"] = [
                        "name" => $_POST["name"] ? $_POST["name"] : "",
                        "alias" => $_POST["alias"] ? $_POST["alias"] : "",
                        "age" => $_POST["age"] ? $_POST["age"] : "",
                        "description" => $_POST["about"] ? $_POST["about"] : "",
                        "photo" => $_POST["photo"] ? $_POST["photo"] : "",
                        "strength" => $_POST["strength"] ? "has" : "",
                        "speed" => $_POST["speed"] ? "has" : "",
                        "intelligence" => $_POST["intelligence"] ? "has" : "",
                        "teleportation" => $_POST["teleportation"] ? "has" : "",
                        "immortal" => $_POST["immortal"] ? "has" : "",
                        "another" => $_POST["another"] ? "another" : "",
                        "level" => $_POST["levelControl"] ? ($_POST["levelControl"]) : "",
                        "purpose" => $_POST["publicity"] ? $_POST["publicity"] : "",
                    ];
                    if($_SESSION["data"]) {
                        echo("<style>#form { display: none; } #saved { display: block; }</style>");
                        foreach($_SESSION["data"] as $key => $value) {
                            echo("<p>");
                            echo $key." : ".$value."<br>";
                            echo("</p>");
                        }
                    }
                }
                ?>
            </div>
            <fieldset>
                <form action=<?php $_SESSION["data"] = ""; session_destroy(); ?> method="post">
                    <input name="forget" type="submit" value="FORGET">
                </form>
            </fieldset>
        </div>
    </body>
</html>
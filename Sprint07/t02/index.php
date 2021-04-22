<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Hack it!</title>
        <meta charset="utf-8">
        <meta name="description" content="t02. Hack it!">
        <link rel="icon" href="./src/img/hacker.png">
    </head>

    <body>
        <h1>Password</h1>
        <?php
            function showInput(){
                echo("<span>Password not saved at session.</span>
                <form action=\"index.php\" method=\"post\">
                    <span>Password for saving to session </span><input type=\"password\" name=\"submitNew\" placeholder=\"Password to session\" autofocus required><br>
                    <span>Salt for saving to session </span><input type=\"password\" name=\"salt\" placeholder=\"Salt to session\" required><br>
                    <input type=\"submit\" value=\"Save\">
                </form>");
            }
            function showSaved(){
                $hash = $_SESSION['hash'];
                echo("<span>Password saved at session.</span>
                <span>Hash is $hash.</span>
                <form action=\"index.php\" method=\"post\">
                    <span>Try to guess: </span><input type=\"password\" name=\"submitGuess\" placeholder=\"Password to session\">
                    <input type=\"submit\" value=\"Check password\">
                </form>
                <form action=\"index.php\" method=\"post\">
                    <input type=\"text\" name=\"clear\" value=\"true\" style=\"display: none;\">
                    <input type=\"submit\" value=\"Clear\">
                </form>
                ");
            }
            if($_POST) {
                if (isset($_POST['submitNew'])) {
                    $pass = $_POST['submitNew'];
                    $_SESSION['salt'] = $_POST['salt'];
                    $_SESSION['hash'] = crypt($pass, $_SESSION['salt']);
                    showSaved();
                }
                else if(isset($_POST['submitGuess'])) {
                    if($_SESSION['hash'] == crypt($_POST['submitGuess'], $_SESSION['salt'])) {
                        echo("<p style=\"color: green;\">Hacked!</p>");
                        session_destroy();
                        showInput();
                    }
                    else {
                        echo("<p style=\"color: red;\">Access denied!</p>");
                        showSaved($_SESSION['hash']);
                    }
                }
                else if($_POST['clear'] == "true") {
                    unset($_SESSION['hash']);
                    unset($_SESSION['salt']);
                    session_destroy();
                    showInput();
                }
            }
            else {
                if (isset($_SESSION["hash"])) {
                    showSaved($_SESSION["hash"]);
                }
                else {
                    showInput();
                }
            }
        ?>
    </body>
</html>
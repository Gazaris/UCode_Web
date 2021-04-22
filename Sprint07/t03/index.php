<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Charset</title>
        <meta charset="utf-8">
        <meta name="description" content="t03. Charset">
        <link rel="icon" href="./src/img/da.png">
    </head>

    <body>
        <h1>Charset</h1>
        <form action="index.php" method="post">
            <p>Change charset: <input type="text" placeholder="Input string" name="input"></p>
            <p>Select charset or several charsets: 
            <select multiple name="select[]">
                <option>UTF-8</option>
                <option>ISO-8859-1</option>
                <option>Windows-1252</option>
            </select>
            <input type="submit" value="Change charset">
        </form>
        <form>
            <input type="text" name="clear" value="da" style="display:none;">
            <input type="submit" value="Clear" name="clear">
        </form>
        <?php
            if($_POST['input']) {
                if(!isset($_POST['clear'])) {
                    $input = $_POST['input'];
                    echo("Input string: <textarea>$input</textarea><br>");
                    if($_POST['select'][0]){
                        $converted = mb_convert_encoding($input, $_POST['select'][0]);
                        echo("UTF-8 <textarea>$converted</textarea><br>");
                    }
                    if($_POST['select'][1]){
                        $converted = mb_convert_encoding($input, $_POST['select'][1]);
                        echo("ISO-8859-1 <textarea>$converted</textarea><br>");
                    }
                    if($_POST['select'][2]){
                        $converted = mb_convert_encoding($input, $_POST['select'][2]);
                        echo("Windows-1252 <textarea>$converted</textarea><br>");
                    }
                }
            }
        ?>
    </body>
</html>
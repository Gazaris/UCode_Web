<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Show other sites</title>
        <meta charset="utf-8">
        <meta name="description" content="t08. Show other sites">
        <link rel="icon" href="./src/img/b.png">
    </head>

    <body>
        <h1>Show other sites</h1>
        <div style="display: flex; flex-direction: row;">
            <form action="index.php" method="post">
                <input type="url" name="url" placeholder="url">
                <input type="submit" value="Go">
            </form>
            <form action="index.php" method="post" style="margin-left: 0.5%">
                <input type="text" name="back" value="true" style="display: none;">
                <input type="submit" value="BACK">
            </form>
        </div>
        <?php
            if ($_POST['url']) {
                $url = $_POST['url'];
                echo("<hr>url: $url<hr>");
                $data = file_get_contents($_POST['url']);
                echo("<br><code>");
                if(strpos($data, "<body>") !== false) {
                    $data = explode("<body>", $data)[1];
                    $data = explode("</body>", $data)[0];
                    $data = "<body>".$data."</body>";
                }
                else if(strpos($data, "<body") !== false) {
                    $data = explode("<body", $data)[1];
                    $data = explode("</body>", $data)[0];
                    $data = "<body".$data."</body>";
                }
                $data = str_replace("<", "&#60;", $data);
                $data = str_replace(">", "&#62;", $data);
                $data = nl2br($data);
                echo $data."</code></div>";
            }
            else {
                echo("<p>Type an URL...</p>");
            }
        ?>
    </body>
</html>
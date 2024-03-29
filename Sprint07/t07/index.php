<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Data to XML</title>
        <meta charset="utf-8">
        <meta name="description" content="t07. Data to XML">
        <link rel="icon" href="./src/img/xml.png">
    </head>

    <body>
        <h1>Data to XML</h1>
        <table>
            <thead>
                <th>To XML</th>
                <th>From XML</th>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <?php
                            function autoload($pClassName) { include(__DIR__. '/' . $pClassName. '.php'); }
                            spl_autoload_register("autoload");

                            $comment1 = new Comment("15-05-2005", "Its good!");
                            $comment2 = new Comment("10-01-2095", "Its bad!");
                            $quote = new AvengerQuote(5942, "Tony Stark", "I know I said no more surprises", array("https://example.com", "https://example2.com"), "17-09-2020", array($comment1, $comment2));
                            $list = new ListAvengerQuotes(array($quote, $quote));
                            print_r($list);
                            echo("</td><td>");
                            $list->toXML('file.xml');
                            $res = $list->fromXML('file.xml');
                            print_r($res);
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>
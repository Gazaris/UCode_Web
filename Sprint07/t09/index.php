<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Marvel API</title>
        <meta charset="utf-8">
        <meta name="description" content="t09. Marvel API">
        <link rel="stylesheet" href="style.css" type="text/css">
        <link rel="icon" href="./src/img/marvel.png">
    </head>

    <body>
        <h1>Comics from Marvel API</h1>
        <?php
            function parseJSON($json) {
                $output = "<div class=\"block\">";
                foreach ($json as $key => $value) {
                    if (is_array($value)) {
                        $output .= "<span class=\"head noselect\"><br>$key:</span>";
                        $output .= parseJSON($value);
                    } 
                    else {
                        $output .= "
                            <div>
                                <span class=\"key noselect\">$key: </span>
                                <span class=\"value\">$value</span>
                            </div>
                        ";
                    }
                }
                $output .= "</div>";
                return $output;
            }

            $pub_key = "8aae32bb9e038e9ae4a720bcabde8c0d";
            $pr_key = "3f4d5929b11948b184f9b76126822c254f667d40";
            $ts = time();
            $hash = md5($ts . $pr_key . $pub_key);
            $api = "http://gateway.marvel.com/v1/public/comics?ts=" . $ts . "&apikey=" . $pub_key . "&hash=" . $hash;

            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $api);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            $json = curl_exec($curl);
            curl_close($curl);
            $json = json_decode($json, true);
            echo(parseJSON($json));
        ?>
    </body>
</html>
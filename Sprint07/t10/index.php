<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Make square image</title>
        <meta charset="utf-8">
        <meta name="description" content="t10. Make square image">
        <link rel="stylesheet" href="style.css" type="text/css">
        <link rel="icon" href="./src/img/square.png">
    </head>

    <body>
        <h1>Make square image</h1>
        <form action="index.php" method="post">
            <input type="url" name="url" placeholder="Image url (jpg/jpeg)..."><br>
            <input type="submit" value="GO">
        </form>

        <?php
            function SplitRGBChannels($img){
                $width = ImagesX($img);
                $height = ImagesY($img);
                $channel_red = ImageCreateTrueColor($width, $height);
                $channel_green = ImageCreateTrueColor($width, $height);
                $channel_blue = ImageCreateTrueColor($width, $height);

                for($row = 0; $row < $width; $row++){
                    for($col = 0; $col < $height; $col++){             
                        $pixel = ImageColorAt($img, $row, $col);
                        $colors = ImageColorsForIndex($img, $pixel);
                        $red_color = ImageColorAllocate($channel_red, $colors['red'], 0, 0);
                        $green_color = ImageColorAllocate($channel_green, 0, $colors['green'], 0);
                        $blue_color = ImageColorAllocate($channel_blue, 0, 0, $colors['blue']);
                        ImageSetPixel($channel_red, $row, $col, $red_color);
                        ImageSetPixel($channel_green, $row, $col, $green_color);
                        ImageSetPixel($channel_blue, $row, $col, $blue_color);
                    }
                }
                imagejpeg($channel_red, 'src/img/red.jpeg');
                imagejpeg($channel_green, 'src/img/green.jpeg');
                imagejpeg($channel_blue, 'src/img/blue.jpeg');
                imagedestroy($channel_red);
                imagedestroy($channel_green);
                imagedestroy($channel_blue);
            }
            if ($_POST["url"]) {
                $url = $_POST["url"];
                $im = preg_match("/\.png$/", $url) ?imagecreatefrompng($url) : imagecreatefromjpeg($url) ;
                $im = imagescale($im, 325);
                $size = min(imagesx($im), imagesy($im));
                $im2 = imagecrop($im, ['x' => 0, 'y' => 0, 'width' => $size, 'height' => $size]);
                if ($im2 !== FALSE) {
                    imagejpeg($im2, 'src/img/cropped.jpeg');
                    SplitRGBChannels($im2);
                    echo("<div id=\"grid\">");
                    echo("<img src=\"src/img/cropped.jpeg\">");
                    echo("<img src=\"src/img/red.jpeg\">");
                    echo("<img src=\"src/img/green.jpeg\">");
                    echo("<img src=\"src/img/blue.jpeg\">");
                    echo("</div>");
                    imagedestroy($im2);
                }
                imagedestroy($im);
            }
        ?>
    </body>
</html>
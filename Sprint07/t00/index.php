<?php
    if(empty($_COOKIE["refresh"]))
        $counter = 0;
    else
        $counter = $_COOKIE["refresh"];
    setcookie("refresh", ++$counter, time() + 60);
    // unset($_COOKIE["refresh"]); //For checking
    // $counter = 0;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cookie counter</title>
        <meta charset="utf-8">
        <meta name="description" content="t00. Cookie counter">
        <link rel="icon" href="https://lh3.googleusercontent.com/proxy/xgOgwE6ruDhInCoEIC3Z9CBKBJFNKVic2RqTKv_mz3ajirwUUA04qX9gG_wt2commUrl334-yODAmW_Li551jsxwLp_zod9nc5eC8GVOnRuA8-A0eQDVStFeFEsW4K4">
    </head>

    <body>
        <h1>Cookie counter</h1>
        <p>This page was loaded 
            <b><?php echo $counter ?></b>
        time(s) in the last minute</p>
    </body>
</html>
<?php
    $da = 0;
    $yes = "";
    foreach ($_SERVER['argv'] as $value){
        $yes = $yes . $value;
        $da++;
        if($da == 4) {
            $yes = $yes . "\n";
        }
    }
    $html = "<h1>The table of \$_SERVER variables</h1>
    <table>
        <tr>
            <th>Name of the variable</th>
            <th>Contents</th>
        </tr>
        <tr><td>SCRIPT_NAME</td><td>" . $_SERVER['SCRIPT_NAME'] . "</td></tr>
        <tr><td>argv</td><td>" . $yes . "</td></tr>
        <tr><td>SERVER_ADDR</td><td>" . $_SERVER['SERVER_ADDR'] . "</td></tr>
        <tr><td>HTTP_HOST</td><td>" . $_SERVER['HTTP_HOST'] . "</td></tr>
        <tr><td>SERVER_PROTOCOL</td><td>" . $_SERVER['SERVER_PROTOCOL'] . "</td></tr>
        <tr><td>REQUEST_METHOD</td><td>" . $_SERVER['REQUEST_METHOD'] . "</td></tr>
        <tr><td>HTTP_USER_AGENT</td><td>" . $_SERVER['HTTP_USER_AGENT'] . "</td></tr>
        <tr><td>REMOTE_ADDR</td><td>" . $_SERVER['REMOTE_ADDR'] . "</td></tr>
        <tr><td>PATH_INFO</td><td>" . $_SERVER['PATH_INFO'] . "</td></tr>
    </table>\n";
    echo $html;
?>
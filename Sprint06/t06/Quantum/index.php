<?php
namespace Space\Quantum;
use \Datetime;
function calculate_time():array {
    $start = new DateTime("1939-01-01");
    $normal = $start->diff(new DateTime("now"));
    $qY = $normal->format("%Y");
    $qM = $normal->format("%m");
    $qD = $normal->format("%d");
    $totalQD = ($qY * 365) + ($qM * 31) + $qD;
    $totalQD /= 7;
    $qY = floor($totalQD / 365);
    $totalQD %= 365;
    $qM = floor($totalQD / 31);
    $totalQD %= 31;
    $qD = $totalQD;
    return [$qY, $qM, $qD];
}
$timearr = calculate_time();
$Y = $timearr[0];
$M = $timearr[1];
$D = $timearr[2];
$str = "In quantum space you were absent for $Y years, $M months, $D days";
$html = "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <title>Quantum space</title>
</head>

<body>
    <p>$str</p></body>

</html>\n";
echo($html);
?>
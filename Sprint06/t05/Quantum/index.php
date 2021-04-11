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
?>
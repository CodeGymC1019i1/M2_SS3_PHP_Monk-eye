<?php
include "StopWatch.php";
$demo = new StopWatch;
$arr = [];
$demo->start();
//echo $demo->getStartTime()."<br>";
for ($i=0;$i<100000;$i++){
    $arr[$i]=mt_rand(-500,500);
}
sort($arr);
$demo->stop();
//echo $demo->getEndTime();
echo $demo->getElapsedTime();
?>
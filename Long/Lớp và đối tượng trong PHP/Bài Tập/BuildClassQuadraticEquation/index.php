<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    a<input name="a">
    b<input name="b">
    c<input name="c">
    <button type="submit">Result</button>
</form>
</body>
</html>
<?php
include "quadraticEquation.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    $qE = new QuadraticEquation;
    $qE->setA($a);
    $qE->setB($b);
    $qE->setC($c);
    $qE->result();
}
?>
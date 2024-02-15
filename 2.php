<html>
<pre>

<?php
echo "welcome Back to my php learning journey";
echo "<br>";
$a = 25;
$b = 5.0;
$c = 2;
$x = 5085;
var_dump(is_int($x));

$x = 50.85;
var_dump(is_int($x));

$x = 50.85;
var_dump(is_float($x));

$x = 5.4e411;
var_dump($x);

$x = acos(8);
var_dump($x);

$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

$x = "23465.22";
$int_cast = (int)$x;
echo $int_cast;

var_dump($a, $b, $c);

$d = 2123;
$d = (string) $d;

var_dump($d);

echo "<br>" ;

echo "This is a conversion of string into an integer";

echo "<br>";

$e = "200 kilograms if rice";
$e = (int) $e;
var_dump($e);

echo "This is a conversion of string into an float";
echo "<br>";

$e = "200 kilograms if rice";
$e = (float) $e;
var_dump($e);

echo "<br>";

$e = "200 kilograms if rice"; //if the value is 0 ,NULL, False or Empty, it will give False otherwise true. 
$e = (bool) $e; 
var_dump($e);

echo "<br>";

$e = "200 kilograms if rice";
$e = (object) $e;
var_dump($e);






?>

</pre>
</html>
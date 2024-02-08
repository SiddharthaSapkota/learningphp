<pre>

<?php
$text = "php"; 
echo "I love $text";
$y=3;
echo "<br>";
echo $y; 
echo "<br>";
echo $text;
echo "<br>";
var_dump(3); 
echo "<br>";
var_dump("nirdesh");
echo "<br>";
$x = $y = $z= 45;
echo $y;
echo "<br>";
echo "<br>";

//Global variable//
echo "!!This is an example of Global Variable!!";
echo "<br>";
echo "<br>";
$nirdesh = "hosteler";
function place(){
    global $nirdesh;
    echo "<p>nirdesh is a $nirdesh living in baneshower</p>";
}
place();
echo "<br>";
echo "<br>";
echo "!! This is an example of local Variable!!";
echo "<br>";

echo "<br>";


function area(){
    $living = "mid-baneshower";
    echo "<p> i live in $living alone </p>";

}
area();

echo "<br>";echo "<br>";
function age(){
    static $age = 18;
    echo "$age";
    $age++;
}
age();
echo "<br>";
age();
echo "<br>";
age();
echo "<br>";
age();
echo "<br>";
echo "<br>";
var_dump ($text); // length of the string//
echo "<br>";

$cars = array ("BMW", "BYD", "Jaguar", "Limo");
var_dump($cars);



?>

</pre>
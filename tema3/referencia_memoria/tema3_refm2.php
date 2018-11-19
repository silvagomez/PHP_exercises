<?php
$a;
$b;
function &f1(){
    $GLOBALS['a']=10;
    return $GLOBALS['a'];
}
$val1=&f1();
echo $val1;
$a+=10;
echo "<br>";
echo $val1;
echo "<br>";
$a+=10;
echo $val1;
echo "<br>";
echo $a;
echo "<br>";
echo $GLOBALS['a'];

?>
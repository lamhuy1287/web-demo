<?php
$a = (int)readline("a = ");
$b = (int)readline("b = ");
$c = (int)readline("c = ");

$max = $a;
if($b > $max){
    $max = $b;
}
if($c > $max){
    $max = $c;
}
echo "Max number : $max"

?>
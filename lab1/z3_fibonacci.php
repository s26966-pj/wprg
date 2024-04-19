<?php

$num = 10000;
$fib[] = 0;
$fib[1] = 1;

for ($i = 2; $fib[$i-1] < $num; $i++) {
    $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
}

$i = 1;
foreach($fib as $n) { 
    if($n%2 != 0) {
        echo $i++ . ". $n" . "<br>";
    }
}
?>

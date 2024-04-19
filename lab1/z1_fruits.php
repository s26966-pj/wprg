<?php
$fruits = ["jabłko", "banan", "pomarańcza"];
foreach($fruits as $fruit) {
    for($i = strlen($fruit)-1; $i >= 0; $i--) {
        echo $fruit[$i];
    }
    if($fruit[0] == 'p') {
       echo " - ten owoc zaczyna sie na litere p";
    }
    echo "<br>";
}

?>
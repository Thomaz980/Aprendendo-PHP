<?php
    $i = 1;

    for($i = 0; $i < 100; $i++){
        echo "<li>$i</li>"; 
    }

    $array = [12, 89];
    
    foreach($array as $value){
        echo $value;
    }
?>
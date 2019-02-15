<?php
$max=100;
for($i=1;$i<=$max;$i++){
    if($i%15===0){
        echo "fizzbuzz";
    }elseif($i%3===0){
        echo "fizz";
    }elseif($i%5===0){
        echo "buzz";
    }else{
        echo $i;
    }
    echo "<br>";
}

?>
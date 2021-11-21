<?php

function ucgen($satir){
    for ($i=0; $i<$satir;$i++){
        $j=0;
        while ($j<$i+1){
            echo "0";
            $j++;
        }
        echo "<br>";
    }
}
ucgen(5);
?>
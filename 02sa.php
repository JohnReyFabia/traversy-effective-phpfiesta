<?php


function hp_sum($num1, $num2, $num3, $num4, $num5, $num6, $num7, $num8, $num9, $num10){
    echo $num1 + $num2 + $num3 + $num4 + $num5 + $num6 + $num7 + $num8 + $num9 + $num10;
}
echo "HP SUM: ", hp_sum(45, 60, 80, 39, 58, 78, 44, 59, 79, 50), "<br>";


function ave_attack($num1, $num2, $num3, $num4, $num5, $num6, $num7, $num8, $num9, $num10, $num11){
   echo ($num1 + $num2 + $num3 + $num4 + $num5 + $num6 + $num7 + $num8 + $num9 + $num10) / $num11; 
}

echo "AVERAGE ATTACK: " , ave_attack(49, 62, 82, 52, 64, 84, 48, 63, 83, 20, 10);

?>
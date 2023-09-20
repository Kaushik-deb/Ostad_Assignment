<?php
function is_even($start,$end,$step){
   for($i=0;$i<=$end;$i+=$step){
    echo $i;
    echo PHP_EOL;
   }
}
is_even(1,20,2);
?>
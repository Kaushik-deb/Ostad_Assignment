<?php
$very_old=0;
$old=1;
$new=1;
for($i=0;$i<10;$i++){
    if($very_old>100){
        break;
    };
    echo "$very_old";
    echo PHP_EOL;
    $new=$old+$very_old;
    $very_old=$old;
    $old=$new;
}
?>
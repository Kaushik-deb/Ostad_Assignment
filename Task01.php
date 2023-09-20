<?php
// function is_even($start,$end,$step){
//    for($i=0;$i<=$end;$i+=$step){
//     echo $i;
//     echo PHP_EOL;
//    }
// }
// is_even(1,20,2);
// ?>
<?php
// $num = 1;
// while($num++<=20){
//     echo $num;
//     $num++;
//     echo PHP_EOL;
// }
// ?>
<?php
$num = 1;
do{
    echo ++$num;
    echo PHP_EOL;
    $num++;
}
while($num<=20);
?>
<?php 
// Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student.


function avgMarks($array){
    $allAvgMarks=[];
    $a1=array_sum($array[0])/count($array[0]);
    $a2=array_sum($array[1])/count($array[1]);
    $a3=array_sum($array[2])/count($array[2]);
    array_push($allAvgMarks,$a1,$a2,$a3);
    print_r($allAvgMarks);
    
}

$studentGrades=[
    [40,60,70],
    [45,55,65],
    [55,65,75]
];

print_r(avgMarks($studentGrades));

















?>
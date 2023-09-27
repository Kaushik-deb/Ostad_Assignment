<?php

$studentGrades = array(
    'Student 1' => array('Math' => 85, 'English' => 92, 'Science' => 78),
    'Student 2' => array('Math' => 88, 'English' => 95, 'Science' => 90),
    'Student 3' => array('Math' => 75, 'English' => 80, 'Science' => 88)
);
function calculateAndPrintAverages($studentGrades) {
    foreach ($studentGrades as $student => $grades) {
        $totalGrades = array_sum($grades);
        $averageGrade = $totalGrades / count($grades);

        echo "Student: $student" ;
        echo "Average Grade: $averageGrade" . "\n";
    }
}
calculateAndPrintAverages($studentGrades);
?>












?>
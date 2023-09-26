<?php

$studentGrades = [
    'student1' => ['Math' => 58, 'English' => 78, 'Science' => 91],

    'student2' => ['Math' => 82, 'English' => 87, 'Science' => 77],

    'student3' => ['Math' => 68, 'English' => 87, 'Science' => 95]
];

function calculateAverage($avg)
{
    foreach ($avg as $student => $grades) {
        $total = array_sum($grades);
        $count = count($grades);
        $average = $total / $count;

        echo "Average grade for $student: $average\n";
    }
}

calculateAverage($studentGrades);

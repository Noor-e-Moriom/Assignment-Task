<?php


function calculateResult($marks) {
    
    foreach ($marks as $mark) {
        if ($mark < 0 || $mark > 100) {
            echo "Mark range is invalid. Please enter marks between 0 and 100.<br>";
            return;
        }
    }

    // Checking if anyobe fail in any subjct
    foreach ($marks as $mark) {
        if ($mark < 33) {
            echo "The student has failed because a subject mark is below 33.<br>";
            return;
        }
    }

    // total and average marks
    $totalMarks = array_sum($marks);
    $averageMarks = $totalMarks / count($marks);

    // switch-case statement
    $grade = '';
    switch (true) {
        case ($averageMarks >= 80 && $averageMarks <= 100):
            $grade = 'A+';
            break;
        case ($averageMarks >= 70 && $averageMarks < 80):
            $grade = 'A';
            break;
        case ($averageMarks >= 60 && $averageMarks < 70):
            $grade = 'A-';
            break;
        case ($averageMarks >= 50 && $averageMarks < 60):
            $grade = 'B';
            break;
        case ($averageMarks >= 40 && $averageMarks < 50):
            $grade = 'C';
            break;
        case ($averageMarks >= 33 && $averageMarks < 40):
            $grade = 'D';
            break;
        default:
            $grade = 'F';
    }

    // Output
    echo "Total Marks: $totalMarks<br>";
    echo "Average Marks: $averageMarks<br>";
    echo "Grade: $grade<br>";
}


$subjectMarks = [45, 55, 66, 78, 34];

calculateResult($subjectMarks);

?>

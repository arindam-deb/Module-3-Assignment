<?php

function calculate_average_grades($studentGrades) {
    foreach ($studentGrades as $student_name => $student_grades) {
      $average_grade = array_sum($student_grades) / count($student_grades);
      $formatted_number = number_format($average_grade, 2);
      echo "$student_name's average grade is $formatted_number.\n";
    }
  }
  
  $studentGrades = [
    "Alice" => [85, 92, 78],
    "Bob" => [95, 88, 92],
    "Carol" => [78, 85, 95]
  ];
  
  calculate_average_grades($studentGrades);
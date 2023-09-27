<?php

function sort_grades_descending($grades) {
    rsort($grades);
  
    print_r($grades);
  }
  
sort_grades_descending([85, 92, 78, 88, 95]);
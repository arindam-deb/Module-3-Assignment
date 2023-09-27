<?php

function generatePassword($length) {
    $characters = array_merge(range('a', 'z'), range('A', 'Z'), range('0', '9'), array('!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '_'));
  
    shuffle($characters);
  
    $password = '';
    for ($i = 0; $i < $length; $i++) {
      $password .= $characters[rand(0, count($characters) - 1)];
    }
  
    return $password;
  }

  $password = generatePassword(12);

echo $password;
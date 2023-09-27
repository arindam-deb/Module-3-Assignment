<?php

function modify_text($text) {
    $text = strtolower($text);
  
    $text = str_replace("brown", "red", $text);
  
    echo $text;
  }
    modify_text("The quick brown fox jumps over the lazy dog.");
  
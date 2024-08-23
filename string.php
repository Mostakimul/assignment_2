<?php

function findVowel($string)
{
  $vowels = ['a', 'i', 'o', 'e', 'u', 'A', 'E', 'I', 'O', 'U'];
  $vowel_count = 0;
  foreach (str_split($string) as $value) {
    if (in_array($value, $vowels)) {
      $vowel_count++;
    }
  }
  return $vowel_count;
}

function reverse_string($string)
{
  return strrev($string);
}

function iterator($strings)
{
  foreach ($strings as $string) {
    $vowel = findVowel($string);
    $reverse = reverse_string($string);
    echo "Original String: {$string}, Vowel Count: {$vowel},  Reversed String: {$reverse} \n";
  }
}

$strings = ["Hello", "World", "PHP", "Programming"];
iterator($strings);

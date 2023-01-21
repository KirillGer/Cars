<?php
use App/Service/CarService.php; 
 protected function refactoringNameField($string, $capitalizeFirstCharacter = false)
 {
     $str = str_replace('_', '', ucwords($string, '_'));

     if (!$capitalizeFirstCharacter) {
         $str = lcfirst($str);
     }

     return $str;
 }
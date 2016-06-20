<?php
  
  $a = $_GET["a"];
  $b = $_GET["b"];
  $c = $_GET["c"];



  if ($a != "" && $b != "" && $c != ""){
      $d = ($b * $b) - (4 * $a * $c);
      if ($a == 0){
          echo "The first number should not be 0";
      }else{
      if ($d > 0){
          $first  = (-1*$b + sqrt($d))/(2 * $a);
          $second = (-1*$b - sqrt($d))/(2 * $a);
          echo $first . " " . $second;
      }elseif ($d == 0){
          $solution = -1*$b/(2*$a);
          echo $solution;
      }else{
          if($d < 0){
          echo "No Solution";
          }
      }}
  }else{
      echo "Input all numbers";
  }

?>
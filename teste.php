<?php
	
//CRUZ	
for ($i = 3; $i <= 7; $i++) {
  $row = "";
  for ($j = 1; $j <= 7; $j++) {
    if($i === 4){
      if($j === 1 || $j === 7){
        $row .= ".";
      } else {
        $row .= "*";
      }
      
    } else if($j === 4){
      $row .= "*";
    } else{
      $row .= ".";
    }
  }
  echo $row . "\n";
}
echo "\n";


// X 

for ($i = 1; $i <= 5; $i++) {
  $row = "";
  for ($j = 1; $j <= 5; $j++) {
    if ($i === $j || $j === 6 - $i) {
      $row .= "*";
    } else {
      $row .= ".";
    }
  }
  echo $row . "\n";
}
echo "\n";	
	
	
?>

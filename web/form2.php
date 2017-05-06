<?php


  $stringthatworks="<br><input name=\"continents\" type=\"checkbox\" value=\"";
  $stringthatworks2="\"/>";
  $cont = array("North America", "South America", "Europe", "Asia","Australia", "Africa", "Antarctica");
  $lencont = count($cont);
  for ($i=0; $i < $lencont; $i++) {

    echo $stringthatworks, $cont[$i], $stringthatworks2, $cont[$i];

  }





 ?>

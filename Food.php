<?php

$food= array('healthy'=>
                  array('pasta','vegetable','salad'),
       'unhealthy'=>
                   array('pizza','ice cream','choclate'));
       echo $food['healthy'][0].'<br>';
       
       foreach($food as $element => $inner_array){
         echo '<strong>'.$element.'</strong><br>';
         foreach($inner_array as $item){
           echo $item.'<br>';
         }
       }
  
?>

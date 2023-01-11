<?php


/*function cupounGenerator($car) {

    $isHighSeason = false;
    $bigStock = true;

    if($car == "bmw"){
       
    } else if($car == "mercedes") {
    
    }
    return $cupoun = "Get {$discount}% off the price of your new car.";
}
echo cupounGenerator("mercedes");*/
function cupounGenerator($car) {

    $discount = 0;
    $isHighSeason = false;
    $bigStock = true;

    if($car == "bmw"){
        if(!$isHighSeason) {$discount += 5;}
       if($bigStock) {$discount += 7;}
    } else if($car == "mercedes") {
       if(!$isHighSeason) {$discount += 4;}
       if($bigStock) {$discount += 10;}
    
    }
    return $cupoun = "Get {$discount}% off the price of your new car.";
}
echo cupounGenerator("bmw");
?>
<?php
echo " </br></br>hola mundo";
?>
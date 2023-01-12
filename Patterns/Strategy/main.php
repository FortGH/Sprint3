<?php

require "couponGenerator.php";
require "interfaceCarCouponGenerator.php";

$isHighSeason = true;
$bigStock = false;

$couponGenerator = new CouponGenerator(new MercedesCouponGenerator);
$couponGenerator ->  addDiscountSeason($isHighSeason);
$couponGenerator1 = new CouponGenerator(new BMWCouponGenerator);
$couponGenerator1 ->  addDiscountSeason($isHighSeason);
$couponGenerator1 ->  addDiscountStock($bigStock);
?>
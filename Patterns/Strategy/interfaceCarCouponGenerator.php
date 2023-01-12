<?php
interface CarCouponGenerator{

    public function addSeasonDiscount($isHighSeason);
    public function addStockDiscount($bigStock);
    public function x();
}

class BMWCouponGenerator implements CarCouponGenerator {

    public $discount;

    public function __construct(){
        $this -> discount = 0;
    }

    public function addSeasonDiscount($isHighSeason){
        if($isHighSeason) {
            $this -> discount += 5;
        }
        echo "Tu descuento es de " . $this -> discount . "% en tu coche BMW (HS)</br>";
    }

    public function addStockDiscount($bigStock){
        if($bigStock) {
            $this -> discount += 7;
        }
        echo "Tu descuento es de " . $this -> discount . "% en tu coche BMW (BS)</br>";
    }

    public function x(){
        echo "soy x";
    }

}

class MercedesCouponGenerator implements CarCouponGenerator {
    public $discount;

    public function __construct(){
        $this -> discount = 0;
    }

    public function addSeasonDiscount($isHighSeason){
        if($isHighSeason) {
            $this -> discount += 4;
        }
        echo "Tu descuento es de " . $this -> discount . "% en tu coche Mercedes (HS)</br>";
    }

    public function addStockDiscount($bigStock){
        if($bigStock) {
            $this -> discount += 10;
        }
        echo "Tu descuento es de " . $this -> discount . "% en tu coche Mercedes (BS)</br>";
    }

    public function x(){
        echo "soy x";
    }

}
?>
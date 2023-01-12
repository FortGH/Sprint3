<?php
class CouponGenerator {
    public CarCouponGenerator $carCouponGenerator;

    public function __construct(CarCouponGenerator $carCouponGenerator) {
        $this -> carCouponGenerator = $carCouponGenerator;
    }

    public function x(){
        echo $this -> carCouponGenerator -> x();
    }

    public function addDiscountSeason($isHighSeason){
        $this -> carCouponGenerator -> addSeasonDiscount($isHighSeason);
    }

    public function addDiscountStock($bigStock){
        $this -> carCouponGenerator -> addStockDiscount($bigStock);
    }
}
?>
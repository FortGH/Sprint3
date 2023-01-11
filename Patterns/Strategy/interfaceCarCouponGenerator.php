<?php
interface CarCoupongenerator{

    protected function addSeasonDiscount($isHighSeason);
    protected function addStockDiscount($bigStock);
}
?>
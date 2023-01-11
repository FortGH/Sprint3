<?php
class Tigger {
    private static $instancia;
    private $roar;

    private function __construct() {
        $this -> roar = 0;
        echo "Building character..." . PHP_EOL;
    }

    public static function getInstance(){
        if (!isset(self::$instancia)) {
                self::$instancia = new Tigger();
            }
    
            return self::$instancia;
    }

    public function roar() {
            $this -> roar++;
            echo "</br>Grrr!</br>" . PHP_EOL;
    }

    public function getTotalRoar() {
            echo "Total  Roar" . $this -> roar . "</br>";
    }
}
?>
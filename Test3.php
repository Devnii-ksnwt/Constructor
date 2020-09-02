<?php
class Rumah {
    public $kepala;
    public $tempat;

    public function __construct($kepala = "Kepala", $tempat = "Tempat"){
        $this->kepala = $kepala;
        $this->tempat = $tempat;
        echo "Construct";
    }

    public function cetakRumah(){
        echo "<br>";
        return "$this->kepala, $this->tempat";
    }

    public function __destruct(){
        echo "<br>";
        echo "Destruct";
    }

}

$rumah1 = new Rumah("Udin", "Cigombong");

echo "Rumah Milik : " .$rumah1->cetakRumah();
?>
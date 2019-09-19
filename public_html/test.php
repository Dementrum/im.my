<?php

class GrandPa {

    public $hair = "Русые";

    public $body = "Нормальное";

    protected $nose ="Кривой";

    public function eat($calories) {
        if ($calories > 200){
            $this->body = 'Толстый';
        } else {
            $this->body = 'Худой';
        }
    }
     protected function showGrandPaNose(){
        return $this->nose;
    }
}
class Father extends GrandPa {
    public function showGrandPaNose(){
      $nose = parent::showGrandPaNose();
      $nose .= "Не очень";
      echo $nose;
    }
}


$masha = new Father();
$ivan = new Father();
$masha->showGrandPaNose() . '<br/>';

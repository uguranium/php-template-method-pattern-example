<?php
namespace App;

abstract class Sub {

  public function make() {
    return $this->giveTheWater()->giveTheMainMaterial()->giveTheSalt()->waitForEat();
  }

  protected function giveTheWater () {
    var_dump ("Give the weather.");
    return $this;
  }

  protected function giveTheSalt () {
    var_dump ("Give the Salt.");
    return $this;
  }

  protected function waitForEat () {
    var_dump ("Wait for eat.");
    return $this;
  }

  protected abstract function giveTheMainMaterial();

}

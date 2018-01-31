<?php

namespace App;

/**
 *
 */
class TomatoSub extends Sub
{

  public function giveTheMainMaterial () {
    var_dump ("Give the Tomato.");
    return $this;
  }

}

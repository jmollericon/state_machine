<?php

namespace App;

use App\AudioPlayer;

abstract class State {
  protected AudioPlayer $player;

  public function __construct(AudioPlayer $player) {
    $this->player = $player;
  }

  abstract public function clickLock();
  abstract public function clickPlay();
  abstract public function clickNext();
  abstract public function clickPrevious();
}

?>

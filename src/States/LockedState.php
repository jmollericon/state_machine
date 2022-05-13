<?php

namespace App\States;

use App\State;
use App\States\PlayingState;
use App\States\ReadyState;

class LockedState extends State {
  public function clickLock() {
    if ($this->player->playing) {
      $this->player->changeState(new PlayingState($this->player));
    } else {
      $this->player->changeState(new ReadyState($this->player));
    }
  }
  public function clickPlay() {
    echo 'Blocked, It does nothing.<br>';
    // Bloqueado, no hace nada
  }
  public function clickNext() {
    // Bloqueado, no hace nada
  }
  public function clickPrevious() {
    // Bloqueado, no hace nada
  }
}

?>

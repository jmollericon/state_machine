<?php

namespace App\States;

use App\State;
use App\States\LockedState;
use App\States\ReadyState;

class PlayingState extends State {
  public function clickLock() {
    $this->player->changeState(new LockedState($this->player));
  }
  public function clickPlay() {
    $this->player->stopPlayback();
    $this->player->changeState(new ReadyState($this->player));
  }
  public function clickNext() {
    if (TRUE) {
      $this->player->nextSong();
    } else {
      $this->player->fastForward(5);
    }
  }
  public function clickPrevious() {
    if (FALSE) {
      $this->player->previousSong();
    } else {
      $this->player->rewind(5);
    }
  }
}

?>

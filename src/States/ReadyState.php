<?php

namespace App\States;

use App\State;
use App\States\LockedState;
use App\States\PlayingState;

class ReadyState extends State {
  public function clickLock() {
    $this->player->changeState(new LockedState($this->player));
  }
  public function clickPlay() {
    $this->player->startPlayback();
    $this->player->changeState(new PlayingState($this->player));
  }
  public function clickNext() {
    $this->player->nextSong();
  }
  public function clickPrevious() {
    $this->player->previousSong();
  }
}

?>

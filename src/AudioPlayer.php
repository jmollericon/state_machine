<?php

namespace App;

use App\State;
use App\States\ReadyState;

class AudioPlayer {
  public State $state;
  private $UI, $volume, $playlist, $currentSong;

  public function __construct() {
    $this->state = new ReadyState($this);
  }

  public function changeState(State $state) {
    $this->state = $state;
  }
  public function clickLock() {
    $this->state->clickLock();
  }
  public function clickPlay() {
    $this->state->clickPlay();
  }
  public function clickNext() {
    $this->state->clickNext();
  }
  public function clickPrevious() {
    $this->state->clickPrevious();
  }

  public function startPlayback() {

  }
  public function stopPlayback() {

  }
  public function nextSong() {

  }
  public function previousSong() {

  }
  public function fastForward(int $time) {

  }
  public function rewind(int $time) {

  }
}

?>

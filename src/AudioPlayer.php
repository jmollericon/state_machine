<?php

namespace App;

use App\State;
use App\States\ReadyState;

class AudioPlayer {
  protected State $state;
  private $UI, $volume, $playlist, $currentSong;

  public function __construct() {
    $this->state = new ReadyState($this);
  }

}

?>

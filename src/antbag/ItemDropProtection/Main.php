<?php

namespace antbag\ItemDropProtection;

use pocketmine\utils\Config;

class Main extends PluginBase {

  public function onEnable(): void {
    $this->getServer()->getPluginManager()->registerEvents(new Drop($this), ($this));
    
  }
}

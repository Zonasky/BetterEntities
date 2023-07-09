<?php

namespace ZonaSky\BetterEntities;

use ZonaSky\BetterEntities\Entities;
use ZonaSky\BetterEntities\Loader;
use pocketmine\plugin\PluginBase;
class Main extends PluginBase Implements Entities {

  public function onLoad(): void {
$this->saveDefaultConfig();
    

  }
}

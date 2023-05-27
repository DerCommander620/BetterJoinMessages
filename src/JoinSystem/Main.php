<?php
namespace JoinSystem;

use JoinSystem\Messages\JoinMessage;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase{

    public function onLoad(): void{
        self::setInstance($this);
        self::saveConfig();
    }

    public function onEnable(): void{
        self::getServer()->getPluginManager()->registerEvents(new JoinMessage, $this);
    }
}
<?php
namespace JoinSystem;

use JoinSystem\Messages\LeaveMessage;
use JoinSystem\Messages\JoinMessage;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\SingletonTrait;

class Main extends PluginBase{
    use SingletonTrait;

    public function onLoad(): void{
        self::setInstance($this);
        self::saveConfig();
    }

    public function onEnable(): void{
        self::getServer()->getPluginManager()->registerEvents(new JoinMessage, $this);
        self::getServer()->getPluginManager()->registerEvents(new LeaveMessage, $this);
    }
}

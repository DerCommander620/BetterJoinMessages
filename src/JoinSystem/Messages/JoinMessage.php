<?php
namespace JoinSystem\Messages;

use JoinSystem\Main;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\Server;
use pocketmine\world\sound\ExplodeSound;

class JoinMessage implements Listener{

    public function onJoin(PlayerJoinEvent $event){
        if(!$event->hasPlayedBefore()){
            $config = Main::getInstance()->getConfig();
            $event->setJoinMessage($event->getPlayer()->getName() . " §aIs a new Player. Welcome " . $event->getPlayer()->getName() . "!");
            $event->getPlayer()->broadcastSound(ExplodeSound);
        }else{
            $config = Main::getInstance()->getConfig();
            $event->setJoinMessage($config->get("Join.Prefix") . " §a" . $event->getPlayer()->getDisplayName());
        }
    }
}
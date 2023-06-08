<?php
namespace JoinSystem\Messages;

use JoinSystem\Main;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerQuitEvent;

class LeaveMessage implements Listener{

    public function onQuit(PlayerQuitEvent $event){
        $config = Main::getInstance()->getConfig();
        $event->setQuitMessage(str_replace(["{player}"], [$event->getPlayer()->getName()], $config->get("LeaveMessage")));
    }
}

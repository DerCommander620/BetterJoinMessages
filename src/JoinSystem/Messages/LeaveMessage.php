<?php
namespace JoinSystem\Messages;

use JoinSystem\Main;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerQuitEvent;

class LeaveMessage implements Listener{

    public function onQuit(PlayerQuitEvent $event){
        $player = $event->getPlayer();
        $event->setQuitMessage(str_replace(["{player}"], [$event->getPlayer()->getName()], $config->get("LeaveMessage")));
    }
}

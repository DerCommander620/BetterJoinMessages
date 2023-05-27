<?php
namespace JoinSystem\Messages;

use JoinSystem\Main;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerQuitEvent;

class LeaveMessage implements Listener{

    public function onLeave(PlayerQuitEvent $event){
        $player = $event->getPlayer();
        $event->setQuitMessage(Main::getInstance()->getConfig()->get("Leave.Prefix") . " §c" . $player->getDisplayName());
    }
}
<?php
namespace JoinSystem\Messages;

use JoinSystem\Main;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\Server;
use pocketmine\world\sound\ExplodeSound;

class JoinMessage implements Listener{

    public function onJoin(PlayerJoinEvent $event){
            $config = Main::getInstance()->getConfig();
            $event->setJoinMessage(str_replace(["{player}"], [$event->getPlayer()->getName()], $config->get("JoinMessage")));
    }
}

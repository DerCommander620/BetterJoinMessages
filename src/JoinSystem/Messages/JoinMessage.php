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
            $event->setJoinMessage($config->get("Join.Prefix") . " §a" . $event->getPlayer()->getDisplayName());
        }
    }
}

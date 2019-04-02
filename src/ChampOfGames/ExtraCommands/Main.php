<?php

namespace ChampOfGames\ExtraCommands;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat as TF;
use pocketmine\Player;
use pocketmine\level\sound\PopSound;
use pocketmine\item\Item;

class Main extends PluginBase {
	
	public function onEnable() {
	
	
	}
	
	public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool {
   
   if($cmd->getName() == "food") {
     if($sender instanceof Player) {
     	$sender->getInventory()->addItem(Item::get(297, 0, 8));
     	$sender->getlevel()->addSound(new PopSound($sender));
         $sender->sendMessage($this->fts . TF::GREEN . "You have got bread!");
         }
       return true;
    }
   
   if($cmd->getName() == "heal") {
   	if($sender instanceof Player) {
   	 if($sender->hasPermission("heal.use")) {
   	    $sender->setHealth(20);
            $sender->sendMessage($this->fts . TF::GREEN . " Your health is full!");
            }else{
            $sender->sendMessage($this->fts . TF::RED . " You are not allowed to use this command");
               }
            }
          return true;
      }
        
    if($cmd->getName() == "feed") {
   	if($sender instanceof Player) {
     	if($sender->hasPermission("feed.use")) {
   	    $sender->setFood(20);
            $sender->sendMessage($this->fts . TF::GREEN . " Your food is full!");
           }else{
           $sender->sendMessage($this->fts . TF::RED . " You are not allowed to use this command");
              }
            }
          return true;
      }
	
	   if($cmd->getName() == "gms") {
   	if($sender instanceof Player) {
   	 if($sender->hasPermission("gms.use")) {
   	    $sender->setGamemode(s);
            $sender->sendMessage($this->fts . TF::GREEN . "You have set your gamemode to survival mode!");
            }else{
            $sender->sendMessage($this->fts . TF::RED . "You are not allowed to use this command");
               }
            }
          return true;
      }
      
         if($cmd->getName() == "gmc") {
   	if($sender instanceof Player) {
   	 if($sender->hasPermission("gmc.use")) {
   	    $sender->setGamemode(c);
            $sender->sendMessage($this->fts . TF::GREEN . " You have set your gamemode to creativ mode!");
            }else{
            $sender->sendMessage($this->fts . TF::RED . "You are not allowed to use this command");
               }
            }
          return true;
      }
      
               if($cmd->getName() == "gma") {
   	if($sender instanceof Player) {
   	 if($sender->hasPermission("gma.use")) {
   	    $sender->setGamemode(a);
            $sender->sendMessage($this->fts . TF::GREEN . " You have set ypu gamemode to creativ mode!");
            }else{
            $sender->sendMessage($this->fts . TF::RED . "You are not allowed to use this command");
               }
            }
          return true;
      }
      
	if($cmd->getName() == "fly") {
	  if($sender instanceof Player) {
		if($sender->hasPermission("fly.use")) {
			$sender->sendMessage($this->fts . TF::RED . " Syntax: /fly <on-off>");
			if(!empty($args[0])) {
				
			  if($args[0] == "on") {
				$sender->setAllowFlight(true);
				$sender->sendMessage($this->fts . TF::GREEN . " FlugModus wurde aktiviert");
				}
			  if($args[0] == "off") {
				$sender->setAllowFlight(false);
				$sender->sendMessage($this->fts . TF::RED . " Flymode deactivated");
				}
		     }
		  }else{
		  $sender->sendMessage($this->fts . TF::RED . " You don't have");
		
	  return true;
	     }
	  }
      }
   }
}

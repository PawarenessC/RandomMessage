<?php

namespace RandomMessage;

use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\event\Listener;

use pocketmine\utils\Utils;
use pocketmine\utils\Config;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase implements Listener{

	public function onEnable(){
		$this->getLogger()->info("RandomMessageを読み込みました");
		$this->config = new Config($this->getDataFolder()."Message.yml", Config::YAML, 

			[

			"Message1" => "§bやぁ！",

			"Message2" => "§bふええ(´･ω･｀)",

			"Message3" => "§c彼女欲しいんだけど",

			"Message4" => "OP(おっぱい)くださーい",

			"Message5" => "ペロペロ(´・ω・｀)",

			"Message6" => "牛丼うまー！",

			"Message7" => "ね？言ったでしょ？",

			"Message8" => "あああああああああああああああああああああああああああああああ！！！！！！！！！！！（ﾌﾞﾘﾌﾞﾘﾌﾞﾘﾌﾞﾘｭﾘｭﾘｭﾘｭﾘｭﾘｭ！！！！！！ﾌﾞﾂﾁﾁﾌﾞﾌﾞﾌﾞﾁﾁﾁﾁﾌﾞﾘﾘｲﾘﾌﾞﾌﾞﾌﾞﾌﾞｩｩｩｩｯｯｯ！！！！！！！ ）",

			"Message9" => "いーひひひwwww",

			"Message10" => "荒らしはやめようね！",

			]);
}

          	


		public function onCommand(CommandSender $sender, Command $command, string $label, array $args):bool {
		$name = $sender->getName();
		switch($command->getName()){
			case "rm":
                   $rand = mt_rand(1,10);
                    switch($rand){
						case 1:
							$msg = $this->config->get("Message1");
							$this->getServer()->broadcastMessage("".$name.": {$msg}");
						break;
						case 2:
							$msg = $this->config->get("Message2");
							$this->getServer()->broadcastMessage("".$name.": {$msg}");
						break;
						case 3:
							$msg = $this->config->get("Message3");
							$this->getServer()->broadcastMessage("".$name.": {$msg}");
						break;
						case 4:
							$msg = $this->config->get("Message4");
							$this->getServer()->broadcastMessage("".$name.": {$msg}");
						break;
						case 5:
							$msg = $this->config->get("Message5");
							$this->getServer()->broadcastMessage("".$name.": {$msg}");
						break;
						case 6:
							$msg = $this->config->get("Message6");
							$this->getServer()->broadcastMessage("".$name.": {$msg}");
						break;
						case 7:
							$msg = $this->config->get("Message7");
							$this->getServer()->broadcastMessage("".$name.": {$msg}");
						break;
						case 8:
							$msg = $this->config->get("Message8");
							$this->getServer()->broadcastMessage("".$name.": {$msg}");
						break;
						case 9:
							$msg = $this->config->get("Message9");
							$this->getServer()->broadcastMessage("".$name.": {$msg}");
						break;
						case 10:
							$msg = $this->config->get("Message10");
							$this->getServer()->broadcastMessage("".$name.": {$msg}");
					break;
}
			return true;
			break; 	
	
		}
	}
}

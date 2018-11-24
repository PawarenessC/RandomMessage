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

	/** @var Config */
	private $config;
	/** @var string[] */
	private $messages = [];

	public function onEnable(){
		$this->config = new Config($this->getDataFolder()."Message.yml", Config::YAML, [
			"§bやぁ！",
			"§bふええ(´･ω･｀)",
			"§c彼女欲しいんだけど",
			"OP(おっぱい)くださーい",
			"ペロペロ(´・ω・｀)",
			"牛丼うまー！",
			"ね？言ったでしょ？",
			"あああああああああああああああああああああああああああああああ！！！！！！！！！！！（ﾌﾞﾘﾌﾞﾘﾌﾞﾘﾌﾞﾘｭﾘｭﾘｭﾘｭﾘｭﾘｭ！！！！！！ﾌﾞﾂﾁﾁﾌﾞﾌﾞﾌﾞﾁﾁﾁﾁﾌﾞﾘﾘｲﾘﾌﾞﾌﾞﾌﾞﾌﾞｩｩｩｩｯｯｯ！！！！！！！ ）",
			"いーひひひwwww",
			"荒らしはやめようね！",
		]);
		$this->messages = $this->config->getAll();
		$this->getLogger()->info("RandomMessageを読み込みました");
	}

	public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
		$name = $sender->getName();
		$message = $this->messages[array_rand($this->messages)];
		$this->getServer()->broadcastMessage("{$name}: {$message}");
		return true;
	}
}

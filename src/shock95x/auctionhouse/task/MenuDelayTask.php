<?php
namespace shock95x\auctionhouse\task;

use shock95x\auctionhouse\libs\muqsit\invmenu\InvMenu;
use pocketmine\Player;
use pocketmine\scheduler\Task;

class MenuDelayTask extends Task {

	/** @var Player */
	private $player;
	/** @var InvMenu */
	private $menu;

	/**
	 * OpenPurchasesMessageForm constructor.
	 *
	 * @param Player $player
	 * @param InvMenu $menu
	 */
	public function __construct(Player $player, InvMenu $menu){
		$this->player = $player;
		$this->menu = $menu;
	}

	/**
	 * Actions to execute when run
	 *
	 * @param int $currentTick
	 *
	 * @return void
	 */
	public function onRun(int $currentTick){
		$this->menu->send($this->player);
	}
}
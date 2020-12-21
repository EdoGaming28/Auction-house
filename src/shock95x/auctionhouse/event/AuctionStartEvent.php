<?php
namespace shock95x\auctionhouse\event;

use shock95x\auctionhouse\auction\Listing;
use pocketmine\event\Event;
use pocketmine\Player;
use pocketmine\Server;

class AuctionStartEvent extends Event {

	private $listing;

	public function __construct(Listing $listing) {
		$this->listing = $listing;
	}

	public function getListing() : Listing {
		return $this->listing;
	}

	public function getPlayer() : Player {
		$player = Server::getInstance()->getPlayerByRawUUID($this->listing->getSeller(true));
		if($player->isOnline()) {
			return $player;
		}
		return null;
	}
}
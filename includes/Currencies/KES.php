<?php
namespace Currencies;
use Amount;
class KES implements FiatMeta {
	use Common;
	
	public function getSymbol() {
		return 'د.إ';
	}
	
	public function getDenominations() {
		return [
			1 => new Amount('100'),
			2 => new Amount('2000'),
			3 => new Amount('500'),
			4 => new Amount('1000'),
					];
	}
}

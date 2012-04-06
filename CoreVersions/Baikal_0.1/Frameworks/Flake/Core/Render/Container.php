<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2012 Jérôme Schneider <mail@jeromeschneider.fr>
*  All rights reserved
*
*  http://baikal.codr.fr
*
*  This script is part of the Baïkal Server project. The Baïkal
*  Server project is free software; you can redistribute it
*  and/or modify it under the terms of the GNU General Public
*  License as published by the Free Software Foundation; either
*  version 2 of the License, or (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

namespace Flake\Core\Render;

class Container extends \Flake\Core\FLObject {
	
	var $aSequence = array();
	var $aBlocks = array();
	var $aRendu = array();
	var $aZones = array();

	function addBlock(&$oBlock, $sZone = "_DEFAULT_") {
		$aTemp = array(
			"block" => &$oBlock,
			"rendu" => "",
		);
		$this->aSequence[] =& $aTemp;
		$this->aBlocks[$sZone][] =& $aTemp["rendu"];
	}
	
	function &zone($sZone) {
		if(!array_key_exists($sZone, $this->aZones)) {
			$this->aZones[$sZone] = new \Flake\Core\Render\Zone($this, $sZone);
		}
		
		return $this->aZones[$sZone];
	}
}
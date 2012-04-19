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

namespace Formal\Core;

class Message {
	private function __construct() {
	}
	
	public static function error($sMessage) {
		$sHtml =<<<HTML
<div id="message" class="alert alert-block alert-error">
	<h3 class="alert-heading">Validation error</h3>
	{$sMessage}
</div>
HTML;
		return $sHtml;
	}
	
	public static function notice($sMessage) {
		$sHtml =<<<HTML
<div id="message" class="alert alert-info">
	<a class="close" data-dismiss="alert" href="#">&times;</a>
	{$sMessage}
</div>
HTML;
		return $sHtml;
	}
	
	public static function warningConfirmMessage($sHeader, $sDescription, $sActionUrl, $sActionLabel, $sCancelUrl, $sCancelLabel="Cancel") {
		$sHtml =<<<HTML
<div id="message" class="alert alert-block alert-error">
	<!--a class="close" data-dismiss="alert" href="#">&times;</a-->
	<h3 class="alert-heading">{$sHeader}</h3>
	{$sDescription}
	<p>
		<a class="btn btn-danger" href="{$sActionUrl}">{$sActionLabel}</a> <a class="btn" href="{$sCancelUrl}">Cancel</a>
	</p>
</div>
HTML;
		return $sHtml;
	}
}
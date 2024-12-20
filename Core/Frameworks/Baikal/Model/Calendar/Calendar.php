<?php

#################################################################
#  Copyright notice
#
#  (c) 2013 Jérôme Schneider <mail@jeromeschneider.fr>
#  All rights reserved
#
#  http://sabre.io/baikal
#
#  This script is part of the Baïkal Server project. The Baïkal
#  Server project is free software; you can redistribute it
#  and/or modify it under the terms of the GNU General Public
#  License as published by the Free Software Foundation; either
#  version 2 of the License, or (at your option) any later version.
#
#  The GNU General Public License can be found at
#  http://www.gnu.org/copyleft/gpl.html.
#
#  This script is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU General Public License for more details.
#
#  This copyright notice MUST APPEAR in all copies of the script!
#################################################################

namespace Baikal\Model\Calendar;

class Calendar extends \Flake\Core\Model\Db {
    const DATATABLE = "calendars";
    const PRIMARYKEY = "id";
    const LABELFIELD = "components";

    protected $aData = [
        "components" => "",
    ];

    function hasInstances() {
        $rSql = $GLOBALS["DB"]->exec_SELECTquery(
            "count(*) as count",
            "calendarinstances",
            "calendarid='" . $this->aData["id"] . "'"
        );

        if (($aRs = $rSql->fetch()) === false) {
            return false;
        } else {
            reset($aRs);

            return $aRs["count"] > 1;
        }
    }

    function destroy() {
        if ($this->hasInstances()) {
            throw new \Exception("Trying to destroy a calendar with instances");
        }
        parent::destroy();
    }
}

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

namespace Baikal\Core;

class Icons {

    # User Icons
    static function iconUser() {
        return "icon-user";
    }

    static function mediumiconUser() {
        return "glyph-user";
    }

    static function bigiconUser() {
        return "glyph2x-user";
    }

    # Address Book Icons
    static function iconBook() {
        return "icon-book";
    }

    static function mediumiconBook() {
        return "glyph-adress-book";
    }

    static function bigiconBook() {
        return "glyph2x-adress-book";
    }

    # Calendar Icons
    static function iconCalendar() {
        return "icon-calendar";
    }

    static function mediumiconCalendar() {
        return "glyph-calendar";
    }

    static function bigiconCalendar() {
        return "glyph2x-calendar";
    }
}
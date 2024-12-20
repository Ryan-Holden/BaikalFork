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

namespace Baikal\Model;

class Principal extends \Flake\Core\Model\Db {
    const DATATABLE = "principals";
    const PRIMARYKEY = "id";
    protected $aData = [
        "uri"         => "",
        "displayname" => "",
        "email"       => "",
    ];

    public function getUri() {
        return $this->aData['uri'];
    }

    public function setUri($uri) {
        $this->aData['uri'] = $uri;
    }

    public function getDisplayName() {
        return $this->aData['displayname'];
    }

    public function setDisplayName($displayname) {
        $this->aData['displayname'] = $displayname;
    }

    public function getEmail() {
        return $this->aData['email'];
    }

    public function setEmail($email) {
        $this->aData['email'] = $email;
    }
}

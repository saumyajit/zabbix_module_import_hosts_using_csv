<?php
/**
  * Zabbix CSV Import Frontend Module
  *
  * @version 1.0
  * @author Saumyajt Pramanik <saumyajitp8@gmail.com>
  * @license GNU Lesser General Public License v3.0
  *
  * You can redistribute this library and/or modify it under the terms of
  * the GNU LGPL as published by the Free Software Foundation,
  * either version 3 of the License, or any later version.
  * However you must not change author and copyright information.
  */

declare(strict_types = 1);

namespace Modules\HostImport\Actions;

use CController as CAction;

abstract class CSVHostImportAction extends CAction {
    // supported CSV separator characters
    protected $csvSeparators = [';', ',', "\t"];
}

?>

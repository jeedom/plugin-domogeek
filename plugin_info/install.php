<?php

/* This file is part of Jeedom.
 *
 * Jeedom is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Jeedom is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Jeedom. If not, see <http://www.gnu.org/licenses/>.
 */

require_once dirname(__FILE__) . '/../../../core/php/core.inc.php';


function domogeek_install() {
    $cron = cron::byClassAndFunction('domogeek', 'pull');
    if (!is_object($cron)) {
        $cron = new cron();
        $cron->setClass('domogeek');
        $cron->setFunction('pull');
        $cron->setEnable(1);
        $cron->setDeamon(0);
    }
    $hours = '';
    for($i = rand(0,4);$i<24;$i += 4){
        $hours .= $i.',';
    }
    $hours = trim($hours,',');
    $cron->setSchedule(rand(0,59).' '.$hours.' * * *');
    $cron->save();
}

function domogeek_update() {
    $cron = cron::byClassAndFunction('domogeek', 'pull');
    if (!is_object($cron)) {
        $cron = new cron();
        $cron->setClass('domogeek');
        $cron->setFunction('pull');
        $cron->setEnable(1);
        $cron->setDeamon(0);
    }
    $hours = '';
    for($i = rand(0,4);$i<24;$i += 4){
        $hours .= $i.',';
    }
    $hours = trim($hours,',');
    $cron->setSchedule(rand(0,59).' '.$hours.' * * *');
    $cron->save();
    $cron->stop();
}

function domogeek_remove() {
    $cron = cron::byClassAndFunction('domogeek', 'pull');
    if (is_object($cron)) {
        $cron->remove();
    }
}
?>

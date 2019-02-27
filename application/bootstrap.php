<?php
/**
 * FuzeWorks Application Skeleton.
 *
 * The FuzeWorks MVC PHP FrameWork
 *
 * Copyright (C) 2016   TechFuze
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @author    TechFuze
 * @copyright Copyright (c) 2013 - 2016, Techfuze. (http://techfuze.net)
 * @copyright Copyright (c) 1996 - 2015, Free Software Foundation, Inc. (http://www.fsf.org/)
 * @license   http://opensource.org/licenses/GPL-3.0 GPLv3 License
 *
 * @link  http://techfuze.net/fuzeworks
 * @since Version 0.0.1
 *
 * @version Version 1.0.0
 */

use FuzeWorks\Priority;
use FuzeWorks\WebAppComponent;

require_once(dirname(__DIR__) . '/vendor/autoload.php');

// Open configurator
$configurator = new FuzeWorks\Configurator();

// Set up basic settings
$configurator->setTimeZone('Europe/Amsterdam');
$configurator->setTempDirectory(dirname(__DIR__) . '/temp');
$configurator->setLogDirectory(dirname(__DIR__). '/log');

// Enable components
// WebComponent
$webAppComponent = new WebAppComponent();
$webAppComponent->enableWebRequest();
$configurator->addComponent($webAppComponent);

// Add directories
$configurator->addDirectory(dirname(__FILE__) . '/Config', 'config', Priority::HIGH);
$configurator->addDirectory(dirname(__FILE__) . '/Helper', 'helpers', Priority::HIGH);
$configurator->addDirectory(dirname(__FILE__) . '/Library', 'libraries', Priority::HIGH);
$configurator->addDirectory(dirname(__FILE__) . '/Plugin', 'plugins', Priority::HIGH);
$configurator->addDirectory(dirname(__FILE__) . '/Controller', 'controllers', Priority::HIGH);
$configurator->addDirectory(dirname(__FILE__) . '/View', 'views', Priority::HIGH);
$configurator->addDirectory(dirname(__FILE__) . '/Model', 'models', Priority::HIGH);
$configurator->addDirectory(dirname(__FILE__) . '/Layout', 'layouts', Priority::NORMAL);

// Debug
$configurator->enableDebugMode()->setDebugAddress('ALL');

return $configurator->createContainer();
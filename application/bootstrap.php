<?php
/**
 * FuzeWorks Application Skeleton.
 *
 * The FuzeWorks PHP FrameWork
 *
 * Copyright (C) 2013-2019 TechFuze
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 * @author    TechFuze
 * @copyright Copyright (c) 2013 - 2019, TechFuze. (http://techfuze.net)
 * @license   https://opensource.org/licenses/MIT MIT License
 *
 * @link  http://techfuze.net/fuzeworks
 * @since Version 0.0.1
 *
 * @version Version 1.2.0
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
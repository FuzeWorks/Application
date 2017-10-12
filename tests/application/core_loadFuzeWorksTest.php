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

use FuzeWorks\Core;
use PHPUnit\Framework\TestCase;

/**
 * Class LoadFuzeWorksTest.
 *
 * Tests if the application is able to open FuzeWorks and all it's classes. 
 * Does not test any internal workings of FuzeWorks
 */
class loadFuzeWorksTest extends TestCase
{

    public function testClassExists()
    {
        $this->assertTrue(class_exists('FuzeWorks\Core', false));
    }

    /**
     * @depends testClassExists
     */
    public function testLoadCore()
    {
        $core = new Core();
        $this->assertInstanceOf('FuzeWorks\Core', $core);
    }

    /**
     * @depends testLoadCore
     */
    public function testCoreClasses()
    {
        // Assert
        $this->assertTrue(class_exists('FuzeWorks\Core'));
        $this->assertTrue(class_exists('FuzeWorks\Config'));
        $this->assertTrue(class_exists('FuzeWorks\Logger'));
        $this->assertTrue(class_exists('FuzeWorks\Events'));
        $this->assertTrue(class_exists('FuzeWorks\Router'));
        $this->assertTrue(class_exists('FuzeWorks\Layout'));
        $this->assertTrue(class_exists('FuzeWorks\Models'));
        $this->assertTrue(class_exists('FuzeWorks\Database'));
        $this->assertTrue(class_exists('FuzeWorks\Factory'));
        $this->assertTrue(class_exists('FuzeWorks\Helpers'));
        $this->assertTrue(class_exists('FuzeWorks\Input'));
        $this->assertTrue(class_exists('FuzeWorks\Language'));
        $this->assertTrue(class_exists('FuzeWorks\Libraries'));
        $this->assertTrue(class_exists('FuzeWorks\Output'));
        $this->assertTrue(class_exists('FuzeWorks\Security'));
        $this->assertTrue(class_exists('FuzeWorks\URI'));
        $this->assertTrue(class_exists('FuzeWorks\UTF8'));
    }


}

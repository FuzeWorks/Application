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
?>

<html>
<head>
    <title><?= $vars['serverName']; ?> - Home</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #ecf0f1;
            border-bottom: 1px solid #DDD;
            padding: 100px 0 100px;
            font-size: 16px;
        }

        #setupcontainer {
            max-width: 950px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
    <div id='setupcontainer'>
        <div class='row'>
            <div class='col-lg-12 col-md-4 col-sm-12'>
                <div id='contentPanel' class="panel panel-default" style='display:none'>
                    <div id='1' class="panel-body" style='display:none'>
                       <p class="lead">Welcome to <?= $vars['serverName']; ?></p>
                       <p>
                            This website is currently under development.
                       </p>
                       <p>
                            For further information, please contact the website administrator</a>
                       </p>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <footer>
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

        <script>
            start();
            function start() {
                $("#contentPanel").fadeIn(500);
                $("#1").fadeIn(500);
            }
        </script>
    </footer>
</body>
</html>
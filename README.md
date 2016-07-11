FuzeWorks Application Skeleton [![build status](http://10.0.0.32/fuzeworks/Application/badges/master/build.svg)](http://10.0.0.32/fuzeworks/Application/commits/master)
=================

This is a simple, skeleton application using [FuzeWorks](https://techfuze.net/fuzeworks). This is meant to
be used as a starting point for your new projects.

[FuzeWorks](https://techfuze.net/fuzeworks) is a versatile framework for web development.
It is designed to be the most usable and friendliest as possible. It focuses
on security and performance.


Requirements
------------

PHP 5.6 or higher.


Installation
------------

The best way to install Web Project is using Composer. If you don't have Composer yet,
download it following [the instructions](https://doc.nette.org/composer). Then use command:

	composer create-project fuzeworks/application path/to/install
	cd path/to/install


Make directories `temp/` and `log/` writable.


Web Server Setup
----------------

The simplest way to get started is to start the built-in PHP server in the root directory of your project:

	php -S localhost:8000 -t www

Then visit `http://localhost:8000` in your browser to see the welcome page.

For Apache or Nginx, setup a virtual host to point to the `www/` directory of the project and you
should be ready to go.

**It is CRITICAL that whole `application/`, `log/` and `temp/` directories are not accessible directly
via a web browser.**
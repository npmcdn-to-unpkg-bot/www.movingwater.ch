<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

@include 'license.php';

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/
c::set('locale','de_DE.UTF8');
c::set('date.handler', 'strftime');

//Caching
c::set('cache', true);
//
c::set('cache.ignore', array(
  'error'
));

// Sitemap
c::set('sitemap.exclude', array('error'));
c::set('sitemap.important', array('arbeiten', 'ueber', 'kontakt', 'ueber/angebote'));

<?php
kirbytext::$tags['vm'] = array(
  'html' => function($tag) {
    $vimeo = kirbytext($tag->attr('vm'));
    return preg_replace('/(.*)<\/p>/', '$1', preg_replace('/<p>(.*)/', '$1', '<iframe src="https://player.vimeo.com/video/'. $vimeo .'?color=00a5def&title=0&byline=0&portrait=0" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'));
  }
);
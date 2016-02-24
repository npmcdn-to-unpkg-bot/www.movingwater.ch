<?php
kirbytext::$tags['yt'] = array(
  'html' => function($tag) {
    $youtube = kirbytext($tag->attr('yt'));
    return preg_replace('/(.*)<\/p>/', '$1', preg_replace('/<p>(.*)/', '$1', '<iframe width="1280" height="720" src="https://www.youtube.com/embed/' . $youtube .'?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>'));
  }
);
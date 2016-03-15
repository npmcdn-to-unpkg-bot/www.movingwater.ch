<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: default
fields:
  title:
    label: Title
    type:  text
  author:
    label: Author
    type:  text
  description:
    label: Description
    type:  textarea
  keywords:
    label: Keywords
    type:  tags
  copyright:
    label: Copyright
    type:  textarea
  footertext:
    type: textarea
    label: Fusszeilentext
  line:
      label: Einstellungen
      type: line
  googleanalytics:
      label: Google Analytics - Tracking ID
      type: text
      help: UA-XXXXXXXX-X

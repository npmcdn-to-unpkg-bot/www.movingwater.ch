<?php if(!defined('KIRBY')) exit ?>

title: Home
pages: false
fields:
  title:
    label: Title
    type:  text
  line1:
    type: line
  headertext:
    label: Text Header
    type: textarea
  line2:
    type: line
  text:
    label: Text
    type:  textarea
    size:  large
  line3:
    type: line
  partnertitle:
    type: text
    label: Titel (Parnter)
  partnertext:
    type: textarea
    label: Text
  partners:
    label: Partner
    type: structure
    entry: >
      {{name}} <br />
      {{links}}
      <br />{{image}}
    fields:
      name:
        label: Name
        type: text
      links:
        label: Links
        type: textarea
      image:
        label: Bild
        type: select
        options: images
  revisions:
    label: Revisions
    type: revisions

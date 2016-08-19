<?php if(!defined('KIRBY')) exit ?>

title: Arbeiten
pages: false
files:
  sortable: true
  fields:
    caption:
      label: Beschriftung
      type: textarea
fields:
  title:
    label: Title
    type:  text
    width: 4/5
  top:
    label: Top Projekt
    type: checkbox
    width: 1/5
  text:
    label: Text
    type:  textarea
  videoembed:
    label: Video
    type: text
    help: Vimeo&colon; (vm&colon; ID) / Youtube&colon; (yt&colon; ID)
  categories:
    label: Categories
    type: checkboxes
    options:
      Videoproduktion: Videoproduktion
      Hochzeitsvideo: Hochzeitsvideo
      MotionDesign: Motion Design
      Webdesign: Webdesign
      Webprograming: Webprogrammierung
  datelabel:
    label: Fertigstellung
    type:  text
    width: 1/5
    default: Fertigstellung
  date:
    label: &nbsp;
    type:  date
    width: 4/5
    default: today
  clientlabel:
    label: Kunde
    type:  text
    width: 1/5
    default: Kunde
  client:
    label: &nbsp;
    type:  text
    width: 2/5
  clienturl:
    label: &nbsp;
    type:  url
    width: 2/5
  websitelabel:
    label: Webseite
    type:  text
    width: 1/5
    default: Webseite
  website:
    label: &nbsp;
    type:  url
    width: 4/5
  relatedlabel:
    label: Related
    type:  text
    width: 1/5
    default: Verwandte Arbeiten
  related:
    label: &nbsp;
    type:  structure
    width: 4/5
    entry: >
      {{relatedpages}}
    fields:
      relatedpages:
        label: Verwandte Projekte
        type: select
        options: siblings
  revisions:
    label: Revisions
    type: revisions

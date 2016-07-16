<?php

kirbytext::$tags['source'] = array(
  'html' => function($tag) {
    return '<span class="media-credit">' . $tag->attr('source') . '</span>';
  }
);

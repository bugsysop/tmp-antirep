<?php

/*
  Last modification for page
  In template: echo $page->updated('d-m-Y');
  Alternative to : $page->modified('Y-m-d');
  Source & details :
  https://forum.getkirby.com/t/page-modified-return-the-created-date-instead-of-the-modified-date/4162/7
*/
page::$methods['updated'] = function($page, $format) {
  return date( $format, filemtime( $page->textfile() ) );
};

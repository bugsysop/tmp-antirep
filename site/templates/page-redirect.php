<?php

if (!$page->gofile()->empty()):
  $link = $page->files()->find($page->gofile())->url();;

elseif(!$page->gopage()->empty()):
  $link = $page->gopage();

elseif(!$page->gourl()->empty()):
  $link = $page->gourl();

else:
  $link = "/";

endif;

go($link);

?>
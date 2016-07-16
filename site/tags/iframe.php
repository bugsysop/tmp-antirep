<?php
kirbytext::$tags['iframe'] = array(
  'attr' => array(
    'height'
  ),
  'html' => function($tag) {
    $url	 = $tag->attr('iframe');
    $height  = $tag->attr('height', '600');
	return '<iframe src="' . $url . '" frameborder="0" width="100%" height="' . $height . '"></iframe>';
  }
);

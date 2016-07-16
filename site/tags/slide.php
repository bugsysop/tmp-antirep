<?php

kirbytext::$tags['slide'] = array(
  'attr' => array(
    'class',
    'width',
    'height',
    'ratio',
    'minwidth',
    'maxwidth',
    'minheight',
    'maxheight',
    'allowfullscreen',
    'fit',
    'transition',
    'autoplay',
    'shuffle',
    'keyboard',
    'arrows',
    'click',
    'swipe',
    'navposition',
    'direction'
  ),
  'html' => function($tag) {
  	$gallery = "";
  	$images = explode(',', str_replace(" ", "", $tag->attr('slide')));
  	if (!empty($images)) {
  		$gallery .= '<div class="fotorama';
  		if ($tag->attr('class', '') != '') {
  			$gallery .= ' '.$tag->attr('class');
  		}
  		$gallery .= '"';

		if ($tag->attr('width', '') != '') {
  			$gallery .= ' data-width="'.$tag->attr('width').'"';
      } else {
        $gallery .= ' data-width="100%"';
  		}

  		if ($tag->attr('height', '') != '') {
  			$gallery .= ' data-height="'.$tag->attr('height').'"';
  		}

  		if ($tag->attr('ratio', '') != '') {
  			$gallery .= ' data-width="'.$tag->attr('ratio').'"';
  		}

  		if ($tag->attr('minwidth', '') != '') {
  			$gallery .= ' data-width="'.$tag->attr('minwidth').'"';
  		}

  		if ($tag->attr('maxwidth', '') != '') {
  			$gallery .= ' data-width="'.$tag->attr('maxwidth').'"';
  		}

  		if ($tag->attr('minheight', '') != '') {
  			$gallery .= ' data-width="'.$tag->attr('minheight').'"';
  		}

  		if ($tag->attr('maxheight', '') != '') {
  			$gallery .= ' data-width="'.$tag->attr('maxheight').'"';
  		}

  		if ($tag->attr('allowfullscreen', '') != '') {
  			$gallery .= ' data-allowfullscreen="'.$tag->attr('allowfullscreen').'"';
      } else {
        $gallery .= ' data-allowfullscreen="true"';
  		}

  		if ($tag->attr('fit', '') != '') {
  			$gallery .= ' data-fit="'.$tag->attr('fit').'"';
  		} else {
        $gallery .= ' data-fit="cover"';
      }

		if ($tag->attr('transition', '') != '') {
  			$gallery .= ' data-transition="'.$tag->attr('transition').'"';
        // Let to default : "slide"
  		}

		if ($tag->attr('loop', '') != '') {
  			$gallery .= ' data-loop="'.$tag->attr('loop').'"';
      } else {
        $gallery .= ' data-loop="true"';
  		}

  		if ($tag->attr('autoplay', '') != '') {
  			$gallery .= ' data-autoplay="'.$tag->attr('autoplay').'"';
        // Let to default : "false"
  		}

  		if ($tag->attr('shuffle', '') != '') {
  			$gallery .= ' data-shuffle="'.$tag->attr('shuffle').'"';
        // Let to default : "false"
  		}

  		if ($tag->attr('keyboard', '') != '') {
  			$gallery .= ' data-keyboard="'.$tag->attr('keyboard').'"';
      } else {
        $gallery .= ' data-keyboard="true"';
  		}

  		if ($tag->attr('arrows', '') != '') {
  			$gallery .= ' data-arrows="'.$tag->attr('arrows').'"';
        // Let to default : "true"
  		}

  		if ($tag->attr('click', '') != '') {
  			$gallery .= ' data-click="'.$tag->attr('click').'"';
      } else {
        $gallery .= ' data-click="false"';
  		}

  		if ($tag->attr('swipe', '') != '') {
  			$gallery .= ' data-swipe="'.$tag->attr('swipe').'"';
      } else {
        $gallery .= ' data-swipe="true"';
  		}

  		if ($tag->attr('navposition', '') != '') {
  			$gallery .= ' data-navposition="'.$tag->attr('navposition').'"';
        // Let to default : "bottom""
  		}

  		if ($tag->attr('direction', '') != '') {
  			$gallery .= ' data-direction="'.$tag->attr('direction').'"';
        // Let to default : "ltr""
  		}

  		$gallery .= '>';
  	}
  	foreach ($images as $image) {
  		$file = $tag->file($image);
  		if (!is_null($file)) {
  			$gallery .= '<img src="'.$tag->file($image)->url().'" />';
  		}
  	}
  	if (!empty($images)) {
  		$gallery .= '</div>';
  	}
    return $gallery;
  }
);

?>

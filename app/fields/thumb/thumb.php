<?php

class ThumbField extends RadioField {
  public $columns = 4;
  static public $assets = array(
    'css' => array(
      'thumb.css'
    )
  );
  public function options() {
  	if (is_array($this->options)) {
	  	return $this->options;
  	}
	$uri   = trim($this->options, '/');
    $query = str::split($uri, '/');
	$obj = $this->page;
	$specials = array('visibleChildren', 'visibleImages', 'invisibleChildren', 'siblings', 'pages', 'index', 'children', 'files',  'images', 'documents', 'videos', 'audio', 'code', 'archives');
	foreach($query as $item) {
		if (in_array($item, $specials)) {
			$obj = $this->_items($obj, $item);
		} else {
			$obj = $obj->find($item);
		}
	}
	$options = array();
	foreach($obj as $found) {
        if(is_a($found, 'Page')) {
          $options[$found->uid()] = (string)$found->title();
        } else if(is_a($found, 'File')) {
          $options[$found->filename()] = $found;
        }
      }
    return $options;
  }

  protected function _items($page, $method) {
    switch($method) {
      case 'visibleChildren':
        $items = $page->children()->visible();
        break;
      case 'invisibleChildren':
        $items = $page->children()->invisible();
        break;
      case 'siblings':
        $items = $page->siblings()->not($page);
        break;
      case 'pages':
        $items = site()->index();
        $items = $items->sortBy('title', 'asc');
        break;
      case 'index':
        $items = $page->index();
        $items = $items->sortBy('title', 'asc');
        break;
      case 'visibleImages':
      	$items = $page->images()->filterBy('visible', '1');
        $items = $items->sortBy('sort', 'asc');
        break;
      case 'children':
      case 'files':
      case 'images':
      case 'documents':
      case 'videos':
      case 'audio':
      case 'code':
      case 'archives':
        $items = $page->{$method}();
        break;
      }
      return $items;
   }
  public function item($value, $text) {
    $input = $this->input($value);
    $input->attr('id', md5($value));
    $img = (string) thumb($text, array('width' => 300, 'height' => 200, 'crop' => 1));
    $link = new Brick('a', $img);
    $link->addClass('file-preview');
    $link->addClass('file-preview-is-image');
    $label = new Brick('label', '&nbsp;');
    $label->attr('for', md5($value));
    $figcaption = new Brick('figcaption', $text->title());
    $figcaption->addClass('file-info');
    $nav = new Brick('nav', $input);
    $nav->append($label);
    $figure = new Brick('figure', $link);
    $figure->addClass('input');
    $figure->attr('data-focus', 'true');
    $figure->append($figcaption);
    $figure->append($nav);
    return $figure;

  }
  
  public function validate() {
    return array_key_exists($this->value(), $this->options());
  }

  public function value() {
  	$value = parent::value();
	return empty($value) ? $this->page()->image()->filename() : $value;
  }

}
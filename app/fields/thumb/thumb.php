<?php

class ThumbField extends RadioField {
  public $columns = 4;

  public function options() {
  	if (is_array($this->options)) {
	  	return $this->options;
  	}
	$uri   = trim($this->options, '/');
    $query = str::split($uri, '/');
	$obj = $this->page;
	$specials = array('visibleChildren', 'invisibleChildren', 'siblings', 'pages', 'index', 'children', 'files',  'images', 'documents', 'videos', 'audio', 'code', 'archives');
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
    $img = (string) thumb($text, array('width' => 300, 'height' => '200', 'crop' => true));
    $label = new Brick('label', $img);
    $label->addClass('input');
    $label->attr('data-focus', 'true');
    $label->prepend($input);

    return $label;

  }
  
  public function validate() {
    return array_key_exists($this->value(), $this->options());
  }

  public function value() {
  	$value = parent::value();
	return empty($value) ? $this->page()->image()->filename() : $value;
  }

}
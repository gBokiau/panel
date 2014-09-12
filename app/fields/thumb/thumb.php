<?php

class ThumbField extends RadioField {
  public $columns = 4;

  public function item($value, $text) {
    $input = $this->input($value);
    $img = (string) thumb($this->page()->image($value), array('width' => 300, 'height' => '200', 'crop' => true));
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
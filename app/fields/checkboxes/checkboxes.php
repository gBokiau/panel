<?php

class CheckboxesField extends RadioField {

  public function input() {

    $value = func_get_arg(0);
    $input = parent::input($value);
    $input->replaceClass('radio', 'checkbox');
    $input->attr(array(
      'name'    => $this->name() . '[]',
      'type'    => 'checkbox',
      'value'   => $value,
      'checked' => $this->checked($value),
    ));
    return $input;

  }
  

  public function checked($needle) {

    $value = parent::value();

    if(!is_array($value)) {
      $value = str::split($value, ',');
    }

    return in_array($needle, $value) ? 'checked' : '';

  }

  public function result() {
    $result = parent::result();
    return implode(', ', $result);
  }

  public function item($value, $text) {
    $item = parent::item($value, $text);
    $item->replaceClass('input-with-radio', 'input-with-checkbox');
    return $item;
  }

}

<?php

class ExhibitionField extends SelectField {

  public function options() {
    $items = page('exhibitions')->grandChildren()->filterBy('gallery', (string) $this->gallery())->sortBy('from', 'desc')->limit(5);
  	foreach($items as $item) {
        if(is_a($item, 'Page')) {
          $options[$item->uri()] = (string)$item->uri();
        }
    }
    return $options;
  }
}

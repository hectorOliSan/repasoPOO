<?php

class CampoRadio extends CampoHTML
{
  function __construct($id, $name, $value)
  {
    parent::__construct($id, $name, $value);
  }

  public function generaCodigoHTML()
  {
    echo "<input id='" . $this->getId() .
      "' type='radio" .
      "' name='" . $this->getName() .
      "' >";
    echo "<label for='".
      $this->getId() ."'>" .
      $this->getValue() . "</label>";
  }
}

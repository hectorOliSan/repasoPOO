<?php

class CampoCheck extends CampoHTML
{
  function __construct($id, $name, $value)
  {
    parent::__construct($id, $name, $value);
  }

  public function generaCodigoHTML()
  {
    echo "<input id='" . $this->getId() .
      "' type='checkbox" .
      "' name='" . $this->getName() .
      "' >";
    echo "<label for='" .
      $this->getId() . "'>" .
      $this->getValue() . "</label>";
  }
}

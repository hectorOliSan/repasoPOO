<?php

class CampoSubmit extends CampoHTML
{
  function __construct($id, $name, $value)
  {
    parent::__construct($id, $name, $value);
  }

  public function generaCodigoHTML()
  {
    echo "<input id='" . $this->getId() .
      "' type='submit" .
      "' name='" . $this->getName() .
      "' value='" . $this->getValue() .
      "' >";
  }
}

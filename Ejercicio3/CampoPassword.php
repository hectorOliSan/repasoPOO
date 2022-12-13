<?php

class CampoPassword extends CampoHTML
{
  private $minlength;

  function __construct($id, $name, $value, $minlength)
  {
    parent::__construct($id, $name, $value);
    $this->minlength = $minlength;
  }

  public function generaCodigoHTML()
  {
    echo "<input id='" . $this->getId() .
      "' type='password" .
      "' name='" . $this->getName() .
      "' value='" . $this->getValue() .
      "' minlength='" . $this->getMinlength() .
      "' required>";
  }

  /**
   * Get the value of minlength
   */
  public function getMinlength()
  {
    return $this->minlength;
  }

  /**
   * Set the value of minlength
   */
  public function setMinlength($minlength): self
  {
    $this->minlength = $minlength;

    return $this;
  }
}

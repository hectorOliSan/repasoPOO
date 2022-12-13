<?php

class CampoTexto extends CampoHTML
{
  private $maxlength;

  function __construct($id, $name, $value, $maxlength)
  {
    parent::__construct($id, $name, $value);
    $this->maxlength = $maxlength;
  }

  public function generaCodigoHTML()
  {
    echo "<input id='" . $this->getId() .
      "' type='text" .
      "' name='" . $this->getName() .
      "' value='" . $this->getValue() .
      "' maxlength='" . $this->getMaxlength() .
      "' required>";
  }

  /**
   * Get the value of maxlength
   */
  public function getMaxlength()
  {
    return $this->maxlength;
  }

  /**
   * Set the value of maxlength
   */
  public function setMaxlength($maxlength): self
  {
    $this->maxlength = $maxlength;

    return $this;
  }
}

<?php

class CampoFile extends CampoHTML
{
  private $accept;

  function __construct($id, $name, $value, $accept)
  {
    parent::__construct($id, $name, $value);
    $this->accept = $accept;
  }

  public function generaCodigoHTML()
  {
    echo "<input id='" . $this->getId() .
      "' type='file" .
      "' name='" . $this->getName() .
      "' value='" . $this->getValue() .
      "' accept='" . $this->getAccept() .
      "' required>";
  }

  /**
   * Get the value of accept
   */
  public function getAccept()
  {
    return $this->accept;
  }

  /**
   * Set the value of accept
   */
  public function setAccept($accept): self
  {
    $this->accept = $accept;

    return $this;
  }
}

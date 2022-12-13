<?php

class CampoEmail extends CampoHTML
{
  private $pattern;

  function __construct($id, $name, $value, $pattern)
  {
    parent::__construct($id, $name, $value);
    $this->pattern = $pattern;
  }

  public function generaCodigoHTML()
  {
    echo "<input id='" . $this->getId() .
      "' type='email" .
      "' name='" . $this->getName() .
      "' value='" . $this->getValue() .
      "' pattern='" . $this->getPattern() .
      "' required>";
  }

  /**
   * Get the value of pattern
   */
  public function getPattern()
  {
    return $this->pattern;
  }

  /**
   * Set the value of pattern
   */
  public function setPattern($pattern): self
  {
    $this->pattern = $pattern;

    return $this;
  }
}

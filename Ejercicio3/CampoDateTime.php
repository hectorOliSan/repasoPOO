<?php

class CampoDateTime extends CampoHTML
{
  private $min;
  private $max;

  function __construct($id, $name, $value, $min, $max)
  {
    parent::__construct($id, $name, $value);
    $this->min = $min;
    $this->max = $max;
  }

  public function generaCodigoHTML()
  {
    echo "<input id='" . $this->getId() .
      "' type='datetime-local" .
      "' name='" . $this->getName() .
      "' value='" . $this->getValue() .
      "' min='" . $this->getMin() .
      "' max='" . $this->getMax() .
      "' required>";
  }

  /**
   * Get the value of max
   */
  public function getMin()
  {
    return $this->min;
  }

  /**
   * Set the value of min
   */
  public function setMin($min): self
  {
    $this->min = $min;

    return $this;
  }

  /**
   * Get the value of max
   */
  public function getMax()
  {
    return $this->max;
  }

  /**
   * Set the value of max
   */
  public function setMax($max): self
  {
    $this->max = $max;

    return $this;
  }
}

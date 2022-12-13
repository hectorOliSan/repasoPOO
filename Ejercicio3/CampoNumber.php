<?php

class CampoNumber extends CampoHTML
{
  private $min;
  private $max;
  private $step;

  function __construct($id, $name, $value, $min, $max, $step)
  {
    parent::__construct($id, $name, $value);
    $this->min = $min;
    $this->max = $max;
    $this->step = $step;
  }

  public function generaCodigoHTML()
  {
    echo "<input id='" . $this->getId() .
      "' type='number" .
      "' name='" . $this->getName() .
      "' value='" . $this->getValue() .
      "' min='" . $this->getMin() .
      "' max='" . $this->getMax() .
      "' step='" . $this->getStep() .
      "' required>";
  }


  /**
   * Get the value of min
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

  /**
   * Get the value of step
   */
  public function getStep()
  {
    return $this->step;
  }

  /**
   * Set the value of step
   */
  public function setStep($step): self
  {
    $this->step = $step;

    return $this;
  }
}

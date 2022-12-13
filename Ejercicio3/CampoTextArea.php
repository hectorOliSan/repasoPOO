<?php

class CampoTextArea extends CampoHTML
{
  private $rows;
  private $cols;

  function __construct($id, $name, $value, $rows, $cols)
  {
    parent::__construct($id, $name, $value);
    $this->rows = $rows;
    $this->cols = $cols;
  }

  public function generaCodigoHTML()
  {
    echo "<textarea id='" . $this->getId() .
      "' name='" . $this->getName() .
      "' rows='" . $this->getRows() .
      "' cols='" . $this->getCols() .
      "' >" .
      $this->getValue() .
      "</textarea>";
  }


  /**
   * Get the value of rows
   */
  public function getRows()
  {
    return $this->rows;
  }

  /**
   * Set the value of rows
   */
  public function setRows($rows): self
  {
    $this->rows = $rows;

    return $this;
  }

  /**
   * Get the value of cols
   */
  public function getCols()
  {
    return $this->cols;
  }

  /**
   * Set the value of cols
   */
  public function setCols($cols): self
  {
    $this->cols = $cols;

    return $this;
  }
}

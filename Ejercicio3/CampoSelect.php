<?php

class CampoSelect extends CampoHTML
{
  private $opciones;

  function __construct($id, $name, $value, $opciones)
  {
    parent::__construct($id, $name, $value);
    $this->opciones = $opciones;
  }

  public function generaCodigoHTML()
  {
    echo "<select id='" . $this->getId() .
      "' name='" . $this->getName() .
      "' value='" . $this->getValue() .
      "' >";
    foreach ($this->getOpciones() as $op) {
      echo "<option" . " value='" . $op .
        "' >" . $op . "</option>";
    }
    echo "</select>";
  }

  /**
   * Get the value of opciones
   */
  public function getOpciones()
  {
    return $this->opciones;
  }

  /**
   * Set the value of opciones
   */
  public function setOpciones($opciones): self
  {
    $this->opciones = $opciones;

    return $this;
  }
}

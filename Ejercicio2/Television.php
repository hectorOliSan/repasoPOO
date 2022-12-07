<?php
class Television extends Electrodomestico
{
  const resolucion = 20;
  const sintonizadorTDT = false;

  private $resolucion;
  private $sintonizadorTDT;

  function __call($m, $args)
  {
    if ($m == "__construct") {
      if (count($args) == 0) {
        parent::__call($m, $args);
        $this->resolucion = Television::resolucion;
        $this->sintonizadorTDT = Television::sintonizadorTDT;
      } else if (count($args) == 1) {
        parent::__call($m, [$args[0]]);
        $this->resolucion = Television::resolucion;
        $this->sintonizadorTDT = Television::sintonizadorTDT;
      } else if (count($args) == 2) {
        parent::__call($m, []);
        $this->resolucion = $args[0];
        $this->sintonizadorTDT = $args[1];
      } else {
        echo "<b>ERROR</b>: Debes pasar el nº de parámetros adecuado";
      }
    }
  }

  public function precioFinal()
  {
    $r = 0;
    $s = 0;
    if($this->getResolucion() > 40) $r = parent::precioFinal() * 0.3;
    if($this->getSintonizadorTDT()) $s = 50;
    $total = parent::precioFinal() + $r + $s;
    return $total;
  }

  public function __toString()
  {
    return $this::class . ": " .
      "Precio Base: " . $this->getPrecioBase() . "€ - " .
      "Color: " . $this->getColor() . " - " .
      "Consumo: " . $this->getConsumo() . " - " .
      "Peso: " . $this->getPeso() . "kg - " .
      "Resolución: " . $this->getResolucion() . " pulgadas - " .
      "TDT: " . $this->getSintonizadorTDT() . " - " .
      "Precio Final: " . $this->precioFinal() . "€";
  }

  /**
   * Get the value of resolucion
   */
  public function getResolucion()
  {
    return $this->resolucion;
  }

  /**
   * Set the value of resolucion
   */
  public function setResolucion($resolucion): self
  {
    $this->resolucion = $resolucion;

    return $this;
  }

  /**
   * Get the value of sintonizadorTDT
   */
  public function getSintonizadorTDT()
  {
    if($this->sintonizadorTDT) return "true";
    else return "false";
  }

  /**
   * Set the value of sintonizadorTDT
   */
  public function setSintonizadorTDT($sintonizadorTDT): self
  {
    $this->sintonizadorTDT = $sintonizadorTDT;

    return $this;
  }
}

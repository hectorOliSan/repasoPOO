<?php
class Lavadora extends Electrodomestico
{
  const carga = 5;

  private $carga;

  function __call($m, $args)
  {
    if ($m == "__construct") {
      if (count($args) == 0) {
        parent::__call($m, $args);
        $this->carga = Lavadora::carga;

      } else if (count($args) == 1) {
        parent::__call($m, []);
        $this->carga = $args[0];

      } else if (count($args) == 2) {
        parent::__call($m, [$args[0], "", "", $args[1]]);
        $this->carga = Lavadora::carga;

      } else {
        echo "<b>ERROR</b>: Debes pasar el nº de parámetros adecuado";
      }
    }
  }

  public function precioFinal()
  {
    if ($this->getCarga() > 30) $total = parent::precioFinal() + 50;
    else $total = parent::precioFinal();
    return $total;
  }

  public function __toString()
  {
    return $this::class . ": " .
      "Precio Base: " . $this->getPrecioBase() . "€ - " .
      "Color: " . $this->getColor() . " - " .
      "Consumo: " . $this->getConsumo() . " - " .
      "Peso: " . $this->getPeso() . "kg - " .
      "Carga: " . $this->getCarga() . "kg - " .
      "Precio Final: " . $this->precioFinal() . "€";
  }

  /**
   * Get the value of carga
   */
  public function getCarga()
  {
    return $this->carga;
  }

  /**
   * Set the value of carga
   */
  public function setCarga($carga): self
  {
    $this->carga = $carga;

    return $this;
  }
}

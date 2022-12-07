<?php
class Electrodomestico
{
  const colores_posibles = ["blanco", "negro", "rojo", "azul", "gris"];
  const consumo_energetico = ["A" => 100, "B" => 80, "C" => 60, "D" => 50, "E" => 30, "F" => 10];

  const color = "blanco";
  const consumo = "F";
  const precio_base = 100;
  const peso = 5;

  private $precio_base;
  private $color;
  private $consumo;
  private $peso;


  function __call($m, $args)
  {
    $precio_base = isset($args[0]) ? $args[0] : Electrodomestico::precio_base;
    $color = isset($args[1]) ? $args[1] : Electrodomestico::color;
    $consumo = isset($args[2]) ? $args[2] : Electrodomestico::consumo;
    $peso = isset($args[3]) ? $args[3] : Electrodomestico::peso;
    if ($m == "__construct") {
      $this->precio_base = $precio_base;
      $this->color = $this->comprobarColor($color);
      $this->consumo = $this->comprobarConsumoEnergetico($consumo);
      $this->peso = $peso;
    }
  }

  private function comprobarConsumoEnergetico($c)
  {
    if (array_key_exists($c, Electrodomestico::consumo_energetico)) return $c;
    return Electrodomestico::consumo;
  }

  private function comprobarColor($c)
  {
    if (in_array($c, Electrodomestico::colores_posibles)) return $c;
    return Electrodomestico::color;
  }

  public function precioFinal() {
    $peso_precio = 0;
    if($this->getPeso() >= 0) $peso_precio = 10;
    if ($this->getPeso() >= 20) $peso_precio = 50;
    if ($this->getPeso() >= 50) $peso_precio = 80;
    if ($this->getPeso() >= 80) $peso_precio = 100;

    $total = $this->getPrecioBase() +
      Electrodomestico::consumo_energetico[$this->getConsumo()] +
      $peso_precio;
    return $total;
  }

  public function __toString()
  {
    return $this::class . ": " .
      "Precio Base: " . $this->getPrecioBase() . "€ - " .
      "Color: " . $this->getColor() . " - " .
      "Consumo: " . $this->getConsumo() . " - " .
      "Peso: " . $this->getPeso() . "kg - " .
      "Precio Final: " . $this->precioFinal() . "€";
  }

  /**
   * Get the value of precio_base
   */
  public function getPrecioBase()
  {
    return $this->precio_base;
  }

  /**
   * Set the value of precio_base
   */
  public function setPrecioBase($precio_base): self
  {
    $this->precio_base = $precio_base;

    return $this;
  }

  /**
   * Get the value of color
   */
  public function getColor()
  {
    return $this->color;
  }

  /**
   * Set the value of color
   */
  public function setColor($color): self
  {
    $this->color = $color;

    return $this;
  }

  /**
   * Get the value of consumo
   */
  public function getConsumo()
  {
    return $this->consumo;
  }

  /**
   * Set the value of consumo
   */
  public function setConsumo($consumo): self
  {
    $this->consumo = $consumo;

    return $this;
  }

  /**
   * Get the value of peso
   */
  public function getPeso()
  {
    return $this->peso;
  }

  /**
   * Set the value of peso
   */
  public function setPeso($peso): self
  {
    $this->peso = $peso;

    return $this;
  }
}

?>

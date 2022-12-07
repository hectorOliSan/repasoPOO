<?php
class CuentaCorriente
{
  private $numeroCuenta;
  private $titular;
  private $importe;

  function __call($m, $args)
  {
    if ($m == "__construct") {
      if (count($args) == 0) {
        $this->numeroCuenta = "-";
        $this->titular = "-";
        $this->importe = 0;
      } else if (count($args) == 3) {
        $this->numeroCuenta = $args[0];
        $this->titular = $args[1];
        $this->importe = $args[2];
      } else {
        echo "<b>ERROR</b>: Debes pasar el nº de parámetros adecuado";
      }
    }
  }

  public function ingresarDinero($cantidad)
  {
    $this->importe += $cantidad;
    return true;
  }

  public function retirarDinero($cantidad)
  {
    $total = $this->importe - $cantidad;
    if ($total < 0) {
      return false;
    }
    $this->importe = $total;
    return true;
  }

  public function transferirDinero($cuenta, $cantidad)
  {
    if (!$this->retirarDinero($cantidad)) return false;
    $cuenta->ingresarDinero($cantidad);
    return true;
  }

  public function consultarSaldo()
  {
    return $this->importe;
  }

  public function __toString()
  {
    return self::class . ": <b>" . $this->getNumeroCuenta() . "</b> - " .
      $this->getTitular() . " (" . $this->getImporte() . " €)";
  }

  /**
   * Get the value of numeroCuenta
   */
  public function getNumeroCuenta()
  {
    return $this->numeroCuenta;
  }

  /**
   * Set the value of numeroCuenta
   */
  public function setNumeroCuenta($numeroCuenta): self
  {
    $this->numeroCuenta = $numeroCuenta;

    return $this;
  }

  /**
   * Get the value of titular
   */
  public function getTitular()
  {
    return $this->titular;
  }

  /**
   * Set the value of titular
   */
  public function setTitular($titular): self
  {
    $this->titular = $titular;

    return $this;
  }

  /**
   * Get the value of importe
   */
  public function getImporte()
  {
    return $this->importe;
  }

  /**
   * Set the value of importe
   */
  public function setImporte($importe): self
  {
    $this->importe = $importe;

    return $this;
  }
}

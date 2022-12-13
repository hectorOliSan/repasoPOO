<?php

abstract class CampoHTML
{
  private $id;
  private $name;
  private $value;

  function __construct($id, $name, $value)
  {
    $this->id = $id;
    $this->name = $name;
    $this->value = $value;
  }

  public abstract function generaCodigoHTML();


  /**
   * Get the value of id
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * Set the value of id
   */
  public function setId($id): self
  {
    $this->id = $id;

    return $this;
  }

  /**
   * Get the value of name
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * Set the value of name
   */
  public function setName($name): self
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Get the value of value
   */
  public function getValue()
  {
    return $this->value;
  }

  /**
   * Set the value of value
   */
  public function setValue($value): self
  {
    $this->value = $value;

    return $this;
  }
}

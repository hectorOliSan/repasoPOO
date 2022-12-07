<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cuenta Corriente</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body>
  <?php
  include "CuentaCorriente.php";
  ?>
  <div class="p-4 container text-center">
    <p class="fs-2 font-monospace">Cuenta Corriente</p>
    <?php
    echo "<p class='mt-5 fs-5 font-monospace text-muted'>Creación de Cuentas (__construct):</p>";
    $c1 = new CuentaCorriente;
    $c1->__construct("123456789", "Cuenta1", rand(100, 150000) / 100);
    echo "<p>" . $c1 . "</p>";

    $c2 = new CuentaCorriente;
    $c2->__construct("987654321", "Cuenta2", rand(100, 150000) / 100);
    echo "<p>" . $c2 . "</p>";

    $c3 = new CuentaCorriente;
    $c3->__construct();
    echo "<p>" . $c3 . "</p>";

    $c4 = new CuentaCorriente;
    $c4->__construct("X", "X");
    ?>

    <?php
    echo "<p class='mt-5 fs-5 font-monospace text-muted'>Ingresar Dinero:</p>";
    echo "<p>Cuenta1(+ 300€)</p>";
    $c1->ingresarDinero(300);
    echo "<p>" . $c1 . "</p>";
    ?>

    <?php
    echo "<p class='mt-5 fs-5 font-monospace text-muted'>Retirar Dinero:</p>";
    echo "<p>Cuenta1(- 300€)</p>";
    if ($c1->retirarDinero(300)) echo "<p>" . $c1 . "</p>";
    else echo "<p>Saldo Insuficiente para Retirar Dinero</p>";

    echo "<p>Cuenta2(- 5000€)</p>";
    if ($c2->retirarDinero(5000)) echo "<p>" . $c2 . "</p>";
    else echo "<p>Saldo Insuficiente para Retirar Dinero</p>";
    ?>

    <?php
    echo "<p class='mt-5 fs-5 font-monospace text-muted'>Transferir Dinero:</p>";
    echo "<p>Cuenta1(- 500€) -> Cuenta2(+ 500€)</p>";
    if ($c1->transferirDinero($c2, 500)) {
      echo "<p>" . $c1 . "</p>";
      echo "<p>" . $c2 . "</p>";
    } else echo "<p>Saldo Insuficiente para Transferir Dinero</p>";
    ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
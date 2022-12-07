<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Electrodomésticos</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body>
  <?php
  include "Electrodomesticos.php";
  include "Lavadora.php";
  include "Television.php";
  ?>
  <div class="p-4 container text-center">
    <p class="fs-2 font-monospace">Electrodomésticos</p>
    <?php
    echo "<p class='mt-5 fs-5 font-monospace text-muted'>Creación de Electrodomésticos:</p>";
    $e1 = new Electrodomestico;
    $e1->__construct();
    echo "<p>" . $e1 . "</p>";

    $e2 = new Electrodomestico;
    $e2->__construct(100, "negro", "A", 80);
    echo "<p>" . $e2 . "</p>";

    $e3 = new Electrodomestico;
    $e3->__construct(200, "verde", "P", 20);
    echo "<p>" . $e3 . "</p>";
    ?>

    <?php
    echo "<p class='mt-5 fs-5 font-monospace text-muted'>Creación de Lavadoras:</p>";
    $l1 = new Lavadora;
    $l1->__construct();
    echo "<p>" . $l1 . "</p>";

    $l2 = new Lavadora;
    $l2->__construct(500, 80);
    echo "<p>" . $l2 . "</p>";

    $l3 = new Lavadora;
    $l3->__construct(50);
    echo "<p>" . $l3 . "</p>";
    ?>

    <?php
    echo "<p class='mt-5 fs-5 font-monospace text-muted'>Creación de Televisiones:</p>";
    $t1 = new Television;
    $t1->__construct();
    echo "<p>" . $t1 . "</p>";

    $t2 = new Television;
    $t2->__construct(1500);
    echo "<p>" . $t2 . "</p>";

    $t3 = new Television;
    $t3->__construct(80, true);
    echo "<p>" . $t3 . "</p>";
    ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
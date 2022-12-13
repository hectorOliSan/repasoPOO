<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Campos HTML</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body>
  <?php
  include "Campos.php";
  ?>
  <div class="p-4 container text-center">
    <p class="fs-2 font-monospace">Campos HTML</p>
    <form action="." method="GET">
      <?php
      // TEXT
      echo "<div class='mb-3'>";
      echo "<p class='m-0 font-monospace'>Texto</p>";
      $campo = new CampoTexto("texto", "texto", "Ejemplo de Texto", 20);
      $campo->generaCodigoHTML();
      echo "</div>";

      // EMAIL
      echo "<div class='mb-3'>";
      echo "<p class='m-0 font-monospace'>Email</p>";
      $campo = new CampoEmail("email", "email", "", ".+@gmail\.com");
      $campo->generaCodigoHTML();
      echo "</div>";

      // PASSWORD
      echo "<div class='mb-3'>";
      echo "<p class='m-0 font-monospace'>Password</p>";
      $campo = new CampoPassword("password", "password", "", 8);
      $campo->generaCodigoHTML();
      echo "</div>";

      echo "<hr>";

      // NUMBER
      echo "<div class='mb-3'>";
      echo "<p class='m-0 font-monospace'>Number</p>";
      $campo = new CampoNumber("number", "number", "", 0, 10, 2);
      $campo->generaCodigoHTML();
      echo "</div>";

      // DATE-TIME
      echo "<div class='mb-3'>";
      echo "<p class='m-0 font-monospace'>Date-Time</p>";
      $campo = new CampoDateTime("datetime", "datetime", "", "2022-12-13T00:00", "2023-12-13T00:00");
      $campo->generaCodigoHTML();
      echo "</div>";

      // SELECT
      echo "<div class='mb-3'>";
      echo "<p class='m-0 font-monospace'>Select</p>";
      $campo = new CampoSelect("select", "select", "", ["Perro", "Gato", "Pato", "Otro"]);
      $campo->generaCodigoHTML();
      echo "</div>";

      // RADIO
      echo "<div class='mb-3'>";
      echo "<p class='m-0 font-monospace'>Radio</p>";
      $campo = new CampoRadio("radio1", "radio", "");
      $campo->generaCodigoHTML();
      echo "<label for='radio'>&nbsp; Perro</label>";

      echo "<br>";

      $campo = new CampoRadio("radio2", "radio", "");
      $campo->generaCodigoHTML();
      echo "<label for='radio'>&nbsp; Gato</label>";
      echo "</div>";

      // CHECKBOX
      echo "<div class='mb-3'>";
      echo "<p class='m-0 font-monospace'>Checkbox</p>";
      $campo = new CampoCheck("check1", "check1", "");
      $campo->generaCodigoHTML();
      echo "<label for='radio'>&nbsp; Perro</label>";

      echo "<br>";

      $campo = new CampoCheck("check2", "check2", "");
      $campo->generaCodigoHTML();
      echo "<label for='radio'>&nbsp; Gato</label>";
      echo "</div>";

      // FILE
      echo "<div class='mb-3'>";
      echo "<p class='m-0 font-monospace'>File</p>";
      $campo = new CampoFile("file", "file", "", "image/png, image/jpeg");
      $campo->generaCodigoHTML();
      echo "</div>";

      // TEXTAREA
      echo "<div class='mb-3'>";
      echo "<p class='m-0 font-monospace'>Textarea</p>";
      $campo = new CampoTextArea("textarea", "textarea", "Ejemplo de Textarea", 5, 50);
      $campo->generaCodigoHTML();
      echo "</div>";

      // SUBMIT
      echo "<div class='mb-3'>";
      echo "<p class='m-0 font-monospace'>Submit</p>";
      $campo = new CampoSubmit("submit", "submit", "Botón Submit");
      $campo->generaCodigoHTML();
      echo "</div>";
      ?>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
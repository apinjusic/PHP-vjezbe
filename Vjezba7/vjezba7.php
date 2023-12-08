<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator ocjena</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Kalkulator ocjena</h1>
    <form method="post">
        <label for="kolokvij1">Ocjena I. kolokvija:</label>
        <input type="number" name="kolokvij1" min="1" max="5" required>
        <br>
        <label for="kolokvij2">Ocjena II. kolokvija:</label>
        <input type="number" name="kolokvij2" min="1" max="5" required>
        <br>
        <input type="submit" value="Izračunaj">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $kolokvij1 = isset($_POST["kolokvij1"]) ? $_POST["kolokvij1"] : null;
      $kolokvij2 = isset($_POST["kolokvij2"]) ? $_POST["kolokvij2"] : null;

      if ($kolokvij1 === null || $kolokvij2 === null || $kolokvij1 < 1 || $kolokvij1 > 5 || $kolokvij2 < 1 || $kolokvij2 > 5) {
          echo "<p class='error'>Ocjene moraju biti između 1 i 5.</p>";
      } else {
          $prosjek = ($kolokvij1 + $kolokvij2) / 2;
          $krajnja_ocjena = min(5, max(1, round($prosjek)));

          echo "<p>Prosjek ocjena: $prosjek</p>";
          echo "<p>Konačna ocjena: $krajnja_ocjena</p>";
      }
  }
    ?>
</body>
</html>

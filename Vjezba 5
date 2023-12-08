<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vjezba5</title>
</head>
<body>
  <h1>Igra (pogodi broj)</h1>
  <form action="" method="POST" id="calculator">
    <label for="number">Pogodite broj od 1 do 10*</label>
    <input type="number" name="number" id="number" required autofocus>
  </form>
  <?php
    $randomNumber = rand(1, 9);

    if (isset($_POST["number"])) {
      if ($_POST["number"] == $randomNumber ) {
        print '<h2 style="color:green;">Pogodak, probaj ponovno!</h2>';
      } else {
        print '<h2 style="color:red;">Krivo, probaj ponovno!</h2>';
      }
      print '<h3>Zamišljeni broj je bio '.$randomNumber.'</h3>';
    }
  
  
  ?>
</body>
</html>

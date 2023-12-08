<!DOCTYPE html>
<html>
<head>
    <title>PHP Kalkulator</title>
</head>
<body>

<h1>Jednostavan PHP Kalkulator</h1>

<form method="post">
    <label for="broj1">Broj 1:</label>
    <input type="number" name="broj1" required>
    <br>
    <label for="operacija">Operacija:</label>
    <select name="operacija">
        <option value="zbrajanje">Zbrajanje</option>
        <option value="oduzimanje">Oduzimanje</option>
        <option value="mnozenje">Množenje</option>
        <option value="dijeljenje">Dijeljenje</option>
    </select>
    <br>
    <label for="broj2">Broj 2:</label>
    <input type="number" name="broj2" required>
    <br>
    <input type="submit" value="Izračunaj">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $broj1 = $_POST["broj1"];
    $broj2 = $_POST["broj2"];
    $operacija = $_POST["operacija"];

    switch ($operacija) {
        case "zbrajanje":
            $rezultat = $broj1 + $broj2;
            break;
        case "oduzimanje":
            $rezultat = $broj1 - $broj2;
            break;
        case "mnozenje":
            $rezultat = $broj1 * $broj2;
            break;
        case "dijeljenje":
            if ($broj2 != 0) {
                $rezultat = $broj1 / $broj2;
            } else {
                echo "<p class='error'>Dijeljenje s nulom nije dozvoljeno.</p>";
            }
            break;
        default:
            echo "<p class='error'>Nepoznata operacija.</p>";
            break;
    }

    echo "<p>Rezultat: $rezultat</p>";
}
?>

</body>
</html>

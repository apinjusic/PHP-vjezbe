<!DOCTYPE html>
<html>
<head>
  <title>Vjezba 9</title>
</head>
<body>
<?php
function isWorkingHours() {
    $currentTime = new DateTime();
    $currentDayOfWeek = $currentTime->format('N'); // 1 (ponedjeljak) - 7 (nedjelja)
    $currentHour = $currentTime->format('G'); // 0 - 23

    // Provjeravamo radno vrijeme
    if (
        ($currentDayOfWeek >= 1 && $currentDayOfWeek <= 5 && $currentHour >= 8 && $currentHour < 20) || // Radni dani
        ($currentDayOfWeek == 6 && $currentHour >= 9 && $currentHour < 14) // Subota
    ) {
        return true;
    }

    return false;
}

function isHoliday() {
    // Popis državnih praznika i blagdana
    $holidays = [
        '2023-01-01', // Nova godina
        '2023-12-25', // Božić
        // Dodajte ostale praznike prema potrebi
    ];

    $currentDate = new DateTime();
    $formattedCurrentDate = $currentDate->format('Y-m-d');

    return in_array($formattedCurrentDate, $holidays);
}

// Provjeravamo radno vrijeme i praznike
if (isWorkingHours() && !isHoliday()) {
    echo 'Dućan je otvoren.';
} else {
    echo 'Dućan je zatvoren.';
}
?>

</body>
<html>

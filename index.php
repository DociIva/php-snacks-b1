<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 1</title>
</head>
<body>
  <h2>Snack 1</h2>

  <?php /*
    PHP Snack 1:
    Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario.
    Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
    Stampiamo a schermo tutte le partite con questo schema:
    Olimpia Milano - Cantù | 55-60*/
    $matches = [
      [
        'teamHome' => 'Torino',
        'teamVisiting' => 'Cagliari',
        'homePoint' => '60',
        'visitingPoint' => '40',
      ],
      [
        'teamHome' => 'Inter',
        'teamVisiting' => 'Roma',
        'homePoint' => '50',
        'visitingPoint' => '70',
      ],
      [
        'teamHome' => 'Napoli',
        'teamVisiting' => 'Genoa',
        'homePoint' => '50',
        'visitingPoint' => '80',
      ],
    ];

    // loop
    for($i = 0; $i < count($matches); $i++) {
        var_dump($matches[$i]);
    }
    ?>

</body>
</html>
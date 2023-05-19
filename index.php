<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Strong Password Generator</title>
</head>

<body>
  <?php
  function generatePassword($length)
  {
    // Caratteri validi per la password
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()';

    $password = '';
    $characterCount = strlen($characters);

    // Genera una password casuale
    for ($i = 0; $i < $length; $i++) {
      $randomIndex = mt_rand(0, $characterCount - 1);
      $password .= $characters[$randomIndex];
    }

    return $password;
  }

  // Controlla se è stata inviata la richiesta con la lunghezza della password
  if (isset($_GET['length'])) {
    $length = (int)$_GET['length'];

    // Genera la password
    $password = generatePassword($length);
  ?>

  <div class="password">
    La password generata è: <?php echo $password; ?>
  </div>

  <?php
  }
  ?>

</body>

</html>
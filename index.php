<!-- **Milestone 2**
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file _functions.php_ che includeremo poi nella pagina principale -->

<?php
include 'functions.php';
?>

<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Strong Password Generator</title>
  <style>
  body {
    font-family: Arial, sans-serif;
  }

  .container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  h2 {
    text-align: center;
  }

  form {
    margin-top: 20px;
    text-align: center;
  }

  label {
    display: block;
    margin-bottom: 10px;
  }

  input[type="number"] {
    width: 100%;
    padding: 5px;
    box-sizing: border-box;
  }

  input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-top: 10px;
    cursor: pointer;
  }

  .password {
    margin-top: 20px;
    text-align: center;
    font-size: 18px;
    font-weight: bold;
  }
  </style>


</head>

<body>
  <div class="container">
    <h2>Generatore di password sicure</h2>

    <!--   **Milestone 1**
    // Creare un form che invii in GET la lunghezza della password. -->

    <form action="index.php" method="get">
      <label for="length">Lunghezza password:</label>
      <input type="number" id="length" name="length" min="3" max="20" required>
      <input type="submit" value="Genera password">
    </form>
  </div>



</body>

</html>
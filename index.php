<!DOCTYPE html>
<html>
<title>Generatore di Password</title>

<head>

  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      padding: 20px;
    }

    form {
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
      max-width: 300px;
      margin: 0 auto;
    }

    input[type=number] {
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      margin-bottom: 20px;
      border-radius: 5px;
      border: 1px solid #ddd;
    }

    input[type=submit] {
      padding: 10px 20px;
      border: none;
      background-color: #007BFF;
      color: white;
      cursor: pointer;
      border-radius: 5px;
    }

    input[type=submit]:hover {
      background-color: #0056b3;
    }
  </style>
</head>

<body>
  <form action="index.php" method="get">
    <label for="length">Lunghezza della Password:</label><br>
    <input type="number" id="length" name="length" min="1"><br>
    <input type="submit" value="Genera Password">
  </form>
  <?php
  include 'functions.php';

  if (isset($_GET['length'])) {
    $length = $_GET['length'];
    $password = generate_password($length);
    echo "<p>La tua password: " . $password . "</p>";
  }
  ?>
</body>

</html>
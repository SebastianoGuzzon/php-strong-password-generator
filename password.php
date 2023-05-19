<!DOCTYPE html>
<html>

<head>
  <title>La tua Password</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      padding: 20px;
    }

    .password-container {
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
      max-width: 300px;
      margin: 0 auto;
      text-align: center;
    }

    .password {
      font-size: 45px;
      color: yellow;
      font-weight: bold;
    }
  </style>
</head>

<body>
  <div class="password-container">
    <?php
    session_start();
    if (isset($_SESSION['password'])) {
      echo "<h1 class='password'>" . $_SESSION['password'] . "</h1>";
    } else {
      echo "Nessuna password generata.";
    }
    ?>
  </div>
</body>

</html>
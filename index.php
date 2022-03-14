<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/bubbles.png" type="image/x-icon">
  <link rel="stylesheet" href="styles/style.css">
  <script defer src="https://kit.fontawesome.com/ab0b12f76d.js" crossorigin="anonymous"></script>
  <script defer src="js/main.js"></script>
  <title>Bubble Sort</title>
</head> 

<body>
  <?php require "partials/sidebar-settings.php" ?>
  <header>
      <i class="fa-solid fa-bars" id="sdbSettings"></i>
      <h1>Bubble Sort Visualization</h1>
  </header>

  <main>
    <div class="bars-layout" id="barsLayout"></div>
    <div class="buttons">
      <button class="sort" id="sort">Sort</button>
      <button class="disorder" id="disorder">Disorder</button>
    </div>
  </main>
</body>
</html>
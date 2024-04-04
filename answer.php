<!DOCTYPE html>
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="The volume of a Pyramid" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Clara Tyman" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_purple-pink.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link sizes="32x32" href="favicon-32x32.png" />
  <link sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>The volume of a Pyramid calculation program</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <script src="./answer.php"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  </div>
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <span class="mdl-layout-title">The volume of a Pyramid calculation program</span>
    </div>
  </header>
  <div class="page-content-php">
    <div name="user-info">
      <?php
      $lengthOfPyramid = $_POST["length-of-pyramid"];
      $widthOfPyramid = $_POST["width-of-pyramid"];
      $heightOfPyramid = $_POST["height-of-pyramid"];

      // process
      $volume = ($lengthOfPyramid * $widthOfPyramid * $heightOfPyramid) / 3;

      // output
      echo "<br />";
      echo (round($volume, 2) . " cm³" . " is the volume of the pyramid ");
        ?>
    </div>
  </div>
  <div class="column-2">
    <br />
    <br />
    <img src="./images/pyramid.png" alt="Volume of a Pyramid formula" class="volume-formula" />
  </div>
  </main>
  </div>
</body>

</html>
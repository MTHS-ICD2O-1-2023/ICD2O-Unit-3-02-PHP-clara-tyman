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
  <div class="content">
    <div class="row">
      <div class="column">
        <!-- basic text -->
        <h3>Formula</h3>
        <p> V = (L x W x H) / 3 </p>
        <p>Please enter intergers for dimensions:</p>
        <!-- Numeric Textfield -->
        <form action="answer.php" method="POST">
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="number" step=".01" pattern="-?[0-9]*(\.[0-9]+)?" name="length-of-pyramid" />
            <label class="mdl-textfield__label" for="sample4">length of Pyramid</label>
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
          <!-- Numeric Textfield -->
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="number" step=".01" pattern=" -?[0-9]*(\.[0-9]+)" name="width-of-pyramid" />
            <label class="mdl-textfield__label" for="sample4">Width of Pyramid</label>
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
          <br />
          <!-- Numeric Textfield with Floating Label -->
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="number" step=".01" pattern="-?[0-9]*(\.[0-9]+)?" name="height-of-pyramid" />
            <label class="mdl-textfield__label" for="sample4">Height of Pyramid </label>
            <span class="mdl-textfield__error">Input is not a number! </span>
          </div>
          <div>
            <!-- Button -->
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
              Calculate
            </button>
        </form>
      </div>
    </div>
    <div class="column-2">
      <br />
      <br />
      <img src="./images/pyramid.png" alt="Volume of a Pyramid formula" class="volume-formula" />
    </div>
  </div>
  </div>
</body>

</html>
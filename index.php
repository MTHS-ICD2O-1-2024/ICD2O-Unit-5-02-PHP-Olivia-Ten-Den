<!DOCTYPE html>
<!-- ICS2O-Unit5-02-HTML-JS -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Positive or Negative Number, with PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Olivia TD" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_purple-pink.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Positive or Negative Number, with PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <script src="./js/script.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Positive or Negative Number, with PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/positive_negative.jpg" alt="Image: Different colored blocks with single digit positive or negative numbers on them." />
      </div>
      <div class="page-content">Select what kind of number you would like.</div>
      <br />
      <form action="answer.php" method="GET">
        <div>
          <label class="mdl-radio" for="positive">
            <input type="radio" value="positive" class="mdl-radio_button" name="kind-of-number" checked>
            <span class="mdl-radio_label">Positive</span>
          </label>
          <label class="mdl-radio" for="negative">
            <input type="radio" value="negative" class="mdl-radio_button" name="kind-of-number">
            <span class="mdl-radio_label">Negative</span>
          </label>
        </div>
        <div>
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
            type="check-button">
            Generate
          </button>
        </div>
      </form>
      <br />
      <div class="page-content-answer">
        <div id="result"></div>
      </div>
    </main>
  </div>
</body>

</html>
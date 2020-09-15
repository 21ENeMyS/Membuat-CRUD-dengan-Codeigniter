<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/style.css">
  <title><?= $title; ?></title>
</head>

<body>

  <nav>
    <a href="/" class="logo">Enemy 21</a>
    <ul>
      <li><a href="/">Project</a></li>
      <li><a href="/about">About</a></li>
      <li><a href="/contact">Contact</a></li>
      <li><a href="/komik">Komik</a></li>
    </ul>
  </nav>

  <?= $this->renderSection('content'); ?>
</body>

</html>
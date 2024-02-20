<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="./css/style.css" />
</head>
<body>
    <header id="navbar">
      <nav class="navbar-container container">
        <a href="index.php" class="home-link">
          <div class="navbar-logo"></div>
          PHP TV
        </a>
        <button
          type="button"
          class="navbar-toggle"
          aria-label="Toggle menu"
          aria-expanded="false"
          aria-controls="navbar-menu"
        >
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div id="navbar-menu" class="detached">
          <ul class="navbar-links">
            <li class="select-cuisine.php">
              <a class="navbar-link" href="select-cuisine.php">select-cuisine</a>
            </li> 
            <li class="foods.php">
              <a class="navbar-link" href="foods.php">foods</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <main>
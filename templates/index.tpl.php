<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catsitter- Home</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="./styles/styles.css" />
</head>
<body class="d-flex flex-column h-100">

  <header class="main-header">
    <div class="jumbotron text-center text-white align-middle<?= $find['file'] === 'home' ? ' header-background' : '' ?>" style="margin-bottom:0">
      <h1><img src="./images/catsitter_logo.png" alt="logo"></h1>
    </div>

    <nav class="navbar navbar-expand-sm navbar-light">
      <a class="navbar-brand" href="/">Catsitter</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <?php foreach($pages as $url => $page) : ?>
            <li class="nav-item<?= $page === $find ? ' active' : '' ?>">
              <a class="nav-link" href="<?= "?page={$url}" ?>">
                <?= $page['text'] ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </nav>
  </header>

  <main class="container">
    <div class="row">
      <?php
        include("./templates/pages/{$find['file']}.tpl.php");
      ?>
    </div>
  </main>

  <footer class="footer mt-auto py-3">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-6">
          <span class="text-muted"><?= $footer['copyright'] ?></span>
        </div>
        <div class="col-12 col-sm-6 text-right">
          <a href="<?= $footer['githubUrl'] ?>" target="_blank">
            <?= $footer['info'] ?>
          </a>
        </div>
      </div>
    </div>
  </footer>

  <!-- jQuery JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Popper.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>

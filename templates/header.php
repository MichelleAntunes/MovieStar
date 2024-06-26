<?php

require_once("globals.php");

require_once("db.php");
require_once("models/Message.php");
require_once("dao/UserDAO.php");

$message = new Message($BASE_URL);
$flassMessage = $message->getMessage();

if(!empty($flassMessage['msg'])){
     $message->clearMessage();
}

$userDao = new UserDAO($conn, $BASE_URL);

$userData = $userDao->verifyToken(false);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MovieStart</title>
    <link rel="short icon" href="<?= $BASE_URL ?>/img/moviestar.ico"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.css" integrity="sha512-VcyUgkobcyhqQl74HS1TcTMnLEfdfX6BbjhH8ZBjFU9YTwHwtoRtWSGzhpDVEJqtMlvLM2z3JIixUOu63PNCYQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/style.css">
</head>
<body>
   <header>
<nav id="main-navbar" class="navbar navbar-expand-lg">
    <a href="<?= $BASE_URL ?>" class="navbar-brand">
<img src="<?= $BASE_URL ?>/img/logo.svg" alt="MovieStar" id="logo">
<span id="moviestar-title">MovieStar</span>
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <form action="<?= $BASE_URL ?>search.php" method="GET" id="search-form" class="form-inline my-2 my-lg-0">
    <div class="input-group">
        <input type="text" name="q" id="search" class="form-control" placeholder="Buscar Filmes" aria-label="Search">
        <span class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </span>
    </div>
</form>
    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav">
          <?php if ($userData) : ?>
            <li class="nav-item"> <a href="<?= $BASE_URL ?>/newmovie.php" class="nav-link"> <i class="far fa-plus-square"></i>Include film</a> </li>
                <li class="nav-item"> <a href="<?= $BASE_URL ?>/dashboard.php" class="nav-link">My films</a> </li>
                <li class="nav-item"> <a href="<?= $BASE_URL ?>/editprofile.php" class="nav-link bold"> <?= $userData->name?> </a> </li>
                <li class="nav-item"> <a href="<?= $BASE_URL ?>/logout.php" class="nav-link">Exit</a> </li>
<?php else: ?>
             
                <li class="nav-item"> <a href="<?= $BASE_URL ?>/auth.php" class="nav-link">Login / Register</a> </li>
            <?php endif ?>
        </ul>
    </div>
</nav>

   </header>

   <?php if(!empty($flassMessage["msg"])) : ?>
    <div class="msg-container">
        <p class="msg <?= $flassMessage["type"]?>"><?= $flassMessage["msg"]?></p>
    </div>
    <?php endif; ?>


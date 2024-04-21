<?php
  require_once("templates/header.php");

  require_once("dao/MovieDAO.php");

  // DAO dos filmes
  $movieDao = new MovieDAO($conn, $BASE_URL);

  $latestMovies = $movieDao->getLatestMovies();

  $actionMovies = $movieDao->getMoviesByCategory("action");

  $comedyMovies = $movieDao->getMoviesByCategory("comedy");

?>
  <div id="main-container" class="container-fluid">
    <h2 class="section-title">New films</h2>
    <p class="section-description">See reviews of the latest films added to MovieStar</p>
    <div class="movies-container">
      <?php foreach($latestMovies as $movie): ?>
        <?php require("templates/movie_card.php"); ?>
      <?php endforeach; ?>
      <?php if(count($latestMovies) === 0): ?>
        <p class="empty-list">No films registered yet!</p>
      <?php endif; ?>
    </div>
    <h2 class="section-title">Action</h2>
    <p class="section-description">See the best action films</p>
    <div class="movies-container">
      <?php foreach($actionMovies as $movie): ?>
        <?php require("templates/movie_card.php"); ?>
      <?php endforeach; ?>
      <?php if(count($actionMovies) === 0): ?>
        <p class="empty-list">There are no action films registered yet!</p>
      <?php endif; ?>
    </div>
    <h2 class="section-title">Comedy</h2>
    <p class="section-description">See the best comedy films</p>
    <div class="movies-container">
      <?php foreach($comedyMovies as $movie): ?>
        <?php require("templates/movie_card.php"); ?>
      <?php endforeach; ?>
      <?php if(count($comedyMovies) === 0): ?>
        <p class="empty-list">There are no comedy films registered yet!</p>
      <?php endif; ?>
    </div>
  </div>
<?php
  require_once("templates/footer.php");
?>
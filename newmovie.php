<?php
  require_once("templates/header.php");

  // Verifica se usuário está autenticado/logado
  require_once("models/User.php");
  require_once("dao/UserDAO.php");

  $user = new User();
  $userDao = new UserDao($conn, $BASE_URL);

  $userData = $userDao->verifyToken(true);

?>
  <div id="main-container" class="container-fluid">
    <div class="offset-md-4 col-md-4 new-movie-container">
      <h1 class="page-title">Add film</h1>
      <p class="page-description">Add your review and share it with the world!</p>
      <form action="<?= $BASE_URL ?>/movie_process.php" id="add-movie-form" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="type" value="create">
        <div class="form-group">
          <label for="title">Title:</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="Enter the title of your film">
        </div>
        <div class="form-group">
          <label for="image">Image:</label>
          <input type="file" class="form-control-file" name="image" id="image">
        </div>
        <div class="form-group">
          <label for="length">Duration::</label>
          <input type="text" class="form-control" id="length" name="length" placeholder="Enter the length of the film">
        </div>
        <div class="form-group">
          <label for="category">Category:</label>
          <select name="category" id="category" class="form-control">
            <option value="">Select</option>
            <option value="Ação">Action</option>
            <option value="Drama">Drama</option>
            <option value="Comédia">Comedy</option>
            <option value="Fantasia / Ficção">Fantasy / Fiction</option>
            <option value="Romance">Romance</option>
          </select>
        </div>
        <div class="form-group">
          <label for="trailer">Trailer:</label>
          <input type="text" class="form-control" id="trailer" name="trailer" placeholder="Insert trailer link">
        </div>
        <div class="form-group">
          <label for="description">Description:</label>
          <textarea name="description" id="description" rows="5" class="form-control" placeholder="Describe the film..."></textarea>
        </div>
        <input type="submit" class="btn card-btn" value="Adicionar filme">
      </form>
    </div>
  </div>
<?php
  require_once("templates/footer.php");
?>
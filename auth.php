
<?php
require_once("templates/header.php")
   ?>
   
   <div id="main-container" class="container-fluid">
  <div class="col-md-12">
    <div class="row" id="auth-row">
        <div class="col-md-4" id="login-container">
            <h2>Enter</h2>
            <form action="<?= $BASE_URL ?>/auth_process.php" method="POST">
                <input type="hidden" name="type" value="login">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your e-mail address">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password address">
                </div>
                <input type="submit" class="btn card-btn" value="Enter">
            </form>

        </div>
        <div class="col-md-4" id="register-container">
            <h2>Register</h2>
           <form action="<?= $BASE_URL ?>/auth_process.php" method="POST">
           <input type="hidden" name="type" value="register">
           <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your e-mail address">
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name ">
                </div>
                <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter your last name ">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password ">
                </div>
                <div class="form-group">
                    <label for="confirmpassword">Password confirmation</label>
                    <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Confirm your password confirmation">

                </div>
                <input type="submit" class="btn card-btn" value="Enter">
            </form>
        </div>
    </div>

  </div>
   </div>

   
   <?php
require_once("templates/footer.php")
   ?>
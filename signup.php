<?php
include 'common.php';
?>
<html>
    <head>
        <title>UNNATI</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  >
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="style.css">
      </head>
      <body>
         <nav class="navbar navbar-inverse navbar-fixed-top">
              <div class="container">
                  <div class="navbar-header">
                      <a href="#" class="navbar-brand">Unnati</a>
                      </div>
                  <ul class="nav navbar-nav navbar-right">
                      <?php if (!isset($_SESSION['id']))
                      {?>
                      <li><a data-toggle="modal" data-target="#Register">&nbsp;Register</a></li>
                      <?php }
                      else 
                      { ?>
                      <li><a href="settings.php">Settings</a></li>
                      <li><a href="logout.php">Log Out</a></li>
                      <?php }
                      ?>
                      </ul>
                  </div>
              </nav>
          
          <br><br><br><br>
        <div class="container">
        <div class="row">
            <div class="col-xs-offset-2 col-xs-5">
                <h2>SIGN UP</h2>
                <form method="post" action="register_script.php">
                    <div class="form-group">
                    <input type="text" name="name" placeholder="Name" class="form-control">
                    </div>
                    <div class="form-group">
                    <input type="email" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <input type="password" name="pass" pattern=".{6,}" placeholder="Password" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <input type="number" name="contact" placeholder="Contact" class="form-control"  required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </body>  
</html>
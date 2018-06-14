<?php
include 'common.php';
?>
<!DOCTYPE html>
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
                <div class="col-sm-4 col-sm-offset-4">
                    <br><br><br>
                    <h3>Change Password</h3>
                    <form method="post" action="settings_script.php">
                        <div class="form-group">
                            <input type="password" name="old" placeholder="Old Password" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" name="new" placeholder="New Password" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" name="renew" placeholder="Re-type New Password" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" name="change">Change</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>      

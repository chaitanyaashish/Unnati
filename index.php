<?php
include 'common.php';
$x=0;
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
          <div id="Register" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" style="float:right;">&nbsp;</button>
                        <h4>  Login </h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="login_script.php">
                            <div class='form-group'>
                                <input type='email' name='email' placeholder="email" class="form-control">
                            </div>
                            <div class='form-group'>
                                <input type='password' name='pass' placeholder="Password" class="form-control">
                            </div>
                            <div class='form-group'>
                            <button type='submit' class='btn btn-primary' name='submit'>Submit</button>
                            </div>
                            <p>Don't have any account?<a href="signup.php"><h4 style='color:blue;'>Signup</h4></a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>

          <br><br><br><br>
               <div class="container">

                              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                  <li data-target="#myCarousel" data-slide-to="1"></li>
                                  <li data-target="#myCarousel" data-slide-to="2"></li>
                                  <li data-target="#myCarousel" data-slide-to="3"></li>
                                  <li data-target="#myCarousel" data-slide-to="4"></li>

                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                  <div class="item active">
                                    <img src="cloth1.jpg" alt="Cloth Distribution" style="width:100%;">
                                  </div>

                                  <div class="item">
                                    <img src="book1.jpg" alt="Book Distribution" style="width:100%;">
                                  </div>

                                  <div class="item">
                                    <img src="food1.jpg" alt="Food Distribution" style="width:100%;">
                                  </div>

                                  <div class="item">
                                    <img src="teach1.jpg" alt="Teaching students" style="width:100%;">
                                  </div>
                                    <div class="item">
                                    <img src="sb1.jpg" alt="Safai Abhiyan" style="width:100%;">
                                  </div>
                                </div>

                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                  <span class="glyphicon glyphicon-chevron-left"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                  <span class="glyphicon glyphicon-chevron-right"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </div>
                            </div>
          <br><br>
            <div class="container">
      <div class="row">
        <center><h1 style="color:blue;"><b>Cloth Distribution</b></h1></center>
        <div class="col-xs-4">
          <div class="thumbnail tevents">
            <img src="cloth2.jpg" alt="img" class="img-circle" height="150px;">
          </div>
        </div>
        <div class="col-xs-8 text">
          <br>
          
          <p style="color:white;">Distributing clothes among the needy ones in different areas.
              This is basically kind of initiative to spread happiness among people,who can't
              afford to buy clothes usually.So come forward and be the part of this initiative.</p>
          <?php  if (isset($_SESSION['id'])){?>
          <button type='submit' class='btn btn-success' name='submit'><a style="color:white;"  data-toggle="modal" data-target="#participate0">
                  Participate</a></button>    <?php  }?>
       <div id="participate0" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" style="float:right;">&times;</button>
                        <h4>  Choose Area </h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="submit.php">
                                <input type="hidden" name="id" value="<?php echo $x; ?>" />
                                <div class='form-group'>
                                <select name="area">
                                    <option value="Boring road">Boring road</option>
                                    <option  value="Bailey road">Bailey road</option>
                                    <option  value="Kankarbagh">Kankarbagh</option>
                                    <option  value="Patna City">Patna City</option>
                                </select>
                            </div>
                            <div class="form-group">
                            <button type="submit" class="btn btn-primary" name="change"><h4 style="color:white;">Submit</h4></button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
      </div>
    </div>
          
                      <div class="container">
      <div class="row">
        <center><h1 style="color:blue;"><b>Food Distribution</b></h1></center>
        <div class="col-xs-4">
          <div class="thumbnail tevents">
            <img src="food2.jpg" alt="img" class="img-circle" height="150px;">
          </div>
        </div>
        <div class="col-xs-8 text">
          <br>
          
          <p style="color:white;">Do you have extra food while you are partying in hotels?<br>Why to waste it.Distribute it among the people dont't even get proper food for a time. .</p>
         <?php  if (isset($_SESSION['id'])){?>
          <button type='submit' class='btn btn-success' name='submit'><a style="color:white;" data-toggle="modal" data-target="#participate1">
         Participate</a></button>      <?php } ?>
       <div id="participate1" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" style="float:right;">&times;</button>
                        <h4>  Choose Area </h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="submit.php">
                            
                                <input type="hidden" name="id" value="<?php echo $x+1; ?>" />
                                <div class='form-group'>
                                <select name="area">
                                    <option value="Boring road">Boring road</option>
                                    <option  value="Bailey road">Bailey road</option>
                                    <option  value="Kankarbagh">Kankarbagh</option>
                                    <option  value="Patna City">Patna City</option>
                                </select>
                                </div>
                            <div class="form-group">
                            <button type="submit" class="btn btn-primary" name="change"><h4 style="color:white;">Submit</h4></button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
      </div>
    </div>
          
                      <div class="container">
      <div class="row">
        <center><h1 style="color:blue;"><b>Book Distribution</b></h1></center>
        <div class="col-xs-4">
          <div class="thumbnail tevents">
            <img src="book2.jpg" alt="img" class="img-circle" height="150px;">
          </div>
        </div>
        <div class="col-xs-8 text">
          <br>
          
          <p style="color:white;">Spread happiness among those people among those who wants to study ,they are really interested and curious about studies but can't afford to buy books.Help them to fulfill their dream.</p>
          <?php  if (isset($_SESSION['id'])){?>
          <button type='submit' class='btn btn-success' name='submit'><a  style="color:white;" data-toggle="modal" data-target="#participate2">
          Participate</a></button>     <?php } ?>
       <div id="participate2" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" style="float:right;">&times;</button>
                        <h4>  Choose Area </h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="submit.php">
                            
                                <input type="hidden" name="id" value="<?php echo $x+2; ?>" />
                                <div class='form-group'>
                                <select name="area">
                                    <option value="Boring road">Boring road</option>
                                    <option  value="Bailey road">Bailey road</option>
                                    <option  value="Kankarbagh">Kankarbagh</option>
                                    <option  value="Patna City">Patna City</option>
                                </select>
                                </div>
                            <div class="form-group">
                            <button type="submit" class="btn btn-primary" name="change"><h4 style="color:white;">Submit</h4></button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
      </div>
    </div>
          
                      <div class="container">
      <div class="row">
        <center><h1 style="color:blue;"><b>Teaching</b></h1></center>
        <div class="col-xs-4">
          <div class="thumbnail tevents">
            <img src="teach3.jpg" alt="img" class="img-circle" height="150px;">
          </div>
        </div>
        <div class="col-xs-8 text">
          <br>
          
          <p style="color:white;">If you have some free time.Rather than wasting it Come and join us.Let's spread some knowledge.<br><h3><i>Qki padhega India,tbhi to badhega India</i></h3></p>
        <?php  if (isset($_SESSION['id'])){?> 
        <button type='submit' class='btn btn-success' name='submit'><a style="color:white;"  data-toggle="modal" data-target="#participate3">
        Participate</a></button>     <?php } ?>
       <div id="participate3" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" style="float:right;">&times;</button>
                        <h4>  Choose Area </h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="submit.php">
                           
                                <input type="hidden" name="id" value="4" />
                                <div class='form-group'>
                                <select name="area">
                                    <option value="Boring road">Boring road</option>
                                    <option  value="Bailey road">Bailey road</option>
                                    <option  value="Kankarbagh">Kankarbagh</option>
                                    <option  value="Patna City">Patna City</option>
                                </select>
                                </div>
                            <div class="form-group">
                            <button type="submit" class="btn btn-primary" name="change"><h4 style="color:white;">Submit</h4></button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
      </div>
    </div>
          
                      <div class="container">
      <div class="row">
        <center><h1 style="color:blue;"><b>Safai Abhiyan</b></h1></center>
        <div class="col-xs-4">
          <div class="thumbnail tevents">
            <img src="sb2.jpg" alt="img" class="img-circle" height="150px;">
          </div>
        </div>
        <div class="col-xs-8 text">
          <br>
          
          <p style="color:white;">Let's clean our locality.Let's clean our country.Let's clean our Earth.<br>Say <b>Good Bye<b> to garbage. </p>
          <?php  if (isset($_SESSION['id'])){?>
           <button type='submit' class='btn btn-success' name='submit'><a style="color:white;"  data-toggle="modal" data-target="#participate4">
          Participate</a></button>     <?php } ?>
       <div id="participate4" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" style="float:right;">&times;</button>
                        <h4>  Choose Area </h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="submit.php">
                            
                                <input type="hidden" name="id" value="5" />
                               <div class='form-group'>
                                <select name="area">
                                    <option value="Boring road">Boring road</option>
                                    <option  value="Bailey road">Bailey road</option>
                                    <option  value="Kankarbagh">Kankarbagh</option>
                                    <option  value="Patna City">Patna City</option>
                                </select>
                                </div>
                            <div class="form-group">
                            <button type="submit" class="btn btn-primary" name="change"><h4 style="color:white;">Submit</h4></button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
      </div>
    </div>
          <br><br>
          <div class="container">
              <div class="row">
                  <div class="col-xs-4">
              <i><h3>For any Assitance,Please contact:<br>Email:chaitanyaashish97@gmail.com</h3></i>
              </div>
                  </div>
              </div>
          <br><br><br>
            <footer>
              <div class="container">
                  <center>
                     <p style="background-color:white;"> Copyright © UNNATI. All RightsReserved | Contact Us: +91 90000 00000
                      </center>
                  </div>
              </footer>
          </body>
</html>
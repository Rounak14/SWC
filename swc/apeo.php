
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Field Booking</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  </head>

  <style>
  body {
		font-family: 'Ubuntu', sans-serif;
	}
    label{
      font-weight: bold;
    }
    body {
      background-color: #31536d;
    }
    .jumbotron {
      margin: 200px;
      margin-top: 50px;
    }
    h1{
      font-size: 2em;
    }
	button {
		background-color : skyblue;
		position:relative;
    transition: .5s ease;
    top: 10px;
    left: 265px;
	}
	
  </style>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

      <a class="navbar-brand" href="#">IIT Guwahati</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


      <!-- Anything inside of collapse navbar-collapse goes into the "hamburger" -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <div class="navbar-nav">

          <!-- the span class "sr-only" tells screen readers that Home is the active link, for accessibility -->
          <a class="nav-item nav-link active" href="home.php">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link active" href="calender.html">Calender</a>
          <a class="nav-item nav-link active" href="check_status.html">Check Status</a>
          <a class="nav-item nav-link active" href="contacts.html">Contacts</a>

        </div> <!-- /.navbar-nav, left-hand content -->

        <!-- STUFF ON THE RIGHT -->
        <div class="navbar-nav ml-auto">
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbar-dropdown-menu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Sign In
              </a>
              <div class="dropdown-menu" aria-labelledby="navbar-dropdown-menu">
                <a class="dropdown-item" href="apeo.php">APEOs</a>
                <a class="dropdown-item" href="#">Gensec</a>
                <a class="dropdown-item" href="#">Chairman</a>
              </div>
            </div>
          </div> <!-- /.navbar-nav, right-hand content -->
        </div>
      </div> <!-- /.navbar-collapse -->
    </nav>

    <div class="container">
      <div class="jumbotron">
        <h1>APEO Login Page</h1>
			</br>
        <form class="form-group" action="" method="POST">

          <input class="form-control" type="text" name="username" placeholder="username" value="" required>
			</br>
          <input class="form-control" type="text" name="password" value="" placeholder="password" required>
			</br>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
		<?php
			define('DB_SERVER', 'localhost');
		    define('DB_USERNAME', 'root');
		    define('DB_PASSWORD', '');
		    define('DB_DATABASE', 'officials');
		    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

	session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
 
      // username and password sent from form
      /*$username = $_POST['username'];
      $password = md5($_POST['password']);
	  $username = stripslashes($username);
	  $password = stripslashes($password);
	  */
	  $username = mysqli_real_escape_string($db,$_POST['username']);
	  $password = mysqli_real_escape_string($db,$_POST['password']);
      $sql = "SELECT id FROM officials WHERE username = '$username' and password = '$password'";
      $result = mysqli_query($db,$sql);
	  //$result = mysqli_query($conn, "SELECT id FROM $tb WHERE username = '$username' and pass = '$password' ") or die (mysqli_connect_error());
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      $count = mysqli_num_rows($result);
      // If result matched $username and $password, table row must be 1 row
      if($count==1) {
         $_SESSION['login_user'] = $username;
        header("location: welcome.php");
      }else {
         $message = "Username and/or Password incorrect.\\nTry again.";
		echo "<script type='text/javascript'>alert('$message');</script>";
      }
   }
   $db->close();
?>
      </div>
    </div>


    <!-- Need to have JQuery and Javascript for DropDown Actions to work -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	 
  </body>
  </html>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Field Booking</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<script src="alert/dist/sweetalert-dev.js"></script>
	<link rel="stylesheet" href="alert/dist/sweetalert.css">
  </head>
  <style>
	body {
		font-family: 'Ubuntu', sans-serif;
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
	button{
		background-color: #477faa;
	}
	.time {
		align : right;
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
	  
        <h1>Sports Field Booking Portal.</h1>
        <h2>Please fill in the details to book a field.</h2>
        <p><a href="detail.php">Click Here</a> to know the details for Booking the field.</p>
		<div class="container">
		<form class="form-group" action="" method="POST">
			<input class="form-control" type="text" name="name" value="" placeholder="Full name" required>
        </br>
			<input class="form-control" type="text" name="roll" value="" placeholder="Roll Number" required>
		</br>
		
        <input class="form-control" type="text" name="num" value="" placeholder="Mobile Number" required>
		
		</br>
		
        <input class="form-control" type="email" name="mail" value="" placeholder="Eg: user@iitg.ac.in" required>
				
		</br>
		
		<strong>Select the Field you want to book:<strong>
		<form action='' method='post'>
        <select class="form-control" name="field" required>
          <option value="0">Not selected</option>
          <option value="Cricket Ground">Cricket Ground</option>
          <option value="Tennis Court">Tennis Court</option>
          <option value="Badminton Court">Badminton Court</option>
          <option value="Basketball Court">Basketball Court</option>
          <option value="Athletic Ground">Athletic Ground</option>
          <option value="Vollyball Court">Vollyball Court</option>
          <option value="Hockey Field">Hockey Field</option>
          <option value="Football Ground">Football Ground</option>
        </select>
		</form>
		</br>
		
        <p>Enter the Time Slot you want to book Field for:</p>
        <label for="ftime">From: </label>
        <input type="time" name="ftime" value="" required>
        <label for="ttime">To: </label>
        <input type="time" name="ttime" value="" required>
		</br></br>
		
        <p><strong>Enter the Purpose of Booking:</strong></p>
        <textarea name="purpose" rows="4" cols="60" required"></textarea>
        <p></p>
		
        <!--<input  type="submit" name="submit">-->
		<button type="submit" class="btn btn-default">Submit</butto
    </div>
	</form>
      </div>
	  </div>
		

    <!-- Need to have JQuery and Javascript for DropDown Actions to work -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "information";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		
		if(!empty($_POST))
		{
			$name=$_POST['name'];
			$roll=$_POST['roll'];
			$mobile=$_POST['num'];
			$email=$_POST['mail'];
			$field=$_POST['field'];			
			$ftime=$_POST['ftime'];
			$ttime=$_POST['ttime'];
			$purpose=$_POST['purpose'];


			$sql = "INSERT INTO information (name, roll , mobile , email , field , ftime , ttime , purpose)
			VALUES ('$name','$roll','$mobile','$email','$field','$ftime','$ttime','$purpose')";
			
			if ($conn->query($sql) === TRUE) {
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}

		$conn->close();
	?>
  </body>
</html>
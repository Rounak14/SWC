<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
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
      margin: 10px;
      margin-top: 50px;
	  text-align : center;
    }
    h3{
	
		top: 125px;
		right: 160px;
	}

  </style>
  <body>
	
    <div class="container">
      <div class="jumbotron">
	  <h3><a href = "logout.php">Sign Out</a></h2>
        <h1>Welcome</h1>
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
/*
		$sql = "SELECT * FROM information";
		$result = $conn->query($sql);
		echo "<table border='1'>
		<tr>
		<th>Name</th>
		<th>Roll Number</th>
		<th>Mobile Number</th>
		<th>Email</th>
		<th>Field</th>
		<th>From</th>
		<th>To</th>
		<th>Purpose</th>
		<th>Status</th>
		</tr>";
		while($row = mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>" . $row['name'] . "</td>";
			echo "<td>" . $row['roll'] . "</td>";
			echo "<td>" . $row['mobile'] . "</td>";
			echo "<td>" . $row['email'] . "</td>";
			echo "<td>" . $row['field'] . "</td>";
			echo "<td>" . $row['ftime'] . "</td>";
			echo "<td>" . $row['ttime'] . "</td>";
			echo "<td>" . $row['purpose'] . "</td>";
			
		}
	echo "</table>";
	*/
	$data = '<table class="table table-bordered table-striped">
                        <tr>
                            <th>number</th>
							<th>Name</th>
		<th>Roll Number</th>
		<th>Mobile Number</th>
		<th>Email</th>
		<th>Field</th>
		<th>From</th>
		<th>To</th>
		<th>Purpose</th>
		<th>Status</th>
                        </tr>';
 
    $query = "SELECT * FROM information";
 
    if (!$result = mysqli_query($conn, $query)) {
        exit(mysqli_error($conn));
    }
 
    // if query results contains rows then featch those rows 
    if(mysqli_num_rows($result) > 0)
    {
        $number = 1;
        while($row = mysqli_fetch_assoc($result))
        {
            $data .= '<tr>
			<td>'.$number.'</td>
			 <td>' . $row['name'] . '</td>;
			 <td>' . $row['roll'] . '</td>;
			 <td>' . $row['mobile'] . '</td>;
			 <td>' . $row['email'] . '</td>;
			 <td>' . $row['field'] . '</td>;
			 <td>' . $row['ftime'] . '</td>;
			 <td>' . $row['ttime'] . '</td>;
			 <td>' . $row['purpose'] .'</td>;
			 <form action="" method="post">
				<td>
                    <button type = "submit" name="approve" class="btn btn-warning">Approve</button>      
                    <button type = "submit" name="reject" class="btn btn-danger">Reject</button>
                </td>
				</form>
            </tr>';
            $number++;
        }
    }
    else
    {
        // records now found 
        $data .= '<tr><td colspan="6">Records not found!</td></tr>';
    }
	if(isset($_POST['approve']))
	{
    /*$to      = 'a.rishabh1998@gmail.com';
    $subject = 'Approval to field';
    $message = 'Hello, your request for booking of field is confirmed.';
     $header = "From:pariharrounak@gmail.com \r\n";
        // $header .= "Cc:rouna170101056@iitg \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
    */     
          
         
         if( mail($row['email'],'Approval of field','hi your request is approved') ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
	}
	if(isset($_POST['reject']))
	{
    /*$to      = 'a.rishabh1998@gmail.com';
    $subject = 'Approval to field';
    $message = 'Hello, your request for booking of field is confirmed.';
     $header = "From:pariharrounak@gmail.com \r\n";
        // $header .= "Cc:rouna170101056@iitg \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
    */     
          
         
         if( mail('mbari1607@gmail.com','Rejection of request','hi your request is rejected due to some reason') ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
	}

    $data .= '</table>';
 
    echo $data;
		$conn->close();
?>
	</br></br>
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
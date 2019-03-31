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
		echo "hello";
         $_SESSION['login_user'] = $username;
        header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
   $db->close();
?>
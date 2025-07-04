<?php

session_start();

?>

<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$_SESSION["username"] = $_POST['username'];
	$_SESSION["pass"] = $_POST['password'];

	$pass=crypt($_SESSION["pass"],'$1$somethin$');

	//now compare this md5 hash with the stored hashed password for this user (if this user exists):
	// connect to db
	// if there is a user matching the username and the password,log in

	// if login was successful, forward the user to home page.
	header("Location: home.php");

	// otherwise, show an login failed rror message


}else{ // reched this page following a link; hence, log out.

//remove all session variables
session_unset();

// destroy the session
session_destroy();


?>

<div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
     <div style="border: solid; width: 300px; padding: 20px;">
     <form action="login.php" method="POST" style="position:relative;left:20px;">
         <p>Please Log in:
	<br />
         <span>Username <input type="Text" name="username"/> </span>
         <br>
         <br />
         <span>Password <input type="password" name="password"/> </span>
         </p>
         <input type="Submit" value = "Log in"/>
     </form>
     </div>
     </div>


<?php
}

?>

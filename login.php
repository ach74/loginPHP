<?php

include_once "config/core.php";
$page_title = "Login";
$require_login = false;
include_once "login_checker.php";
$access_denied = false;



if($_POST){
    // email check will be here
    // include classes
	include_once "config/database.php";
	include_once "objects/user.php";
	
// get database connection
	$database = new Database();
	$db = $database->getConnection();
	
// initialize objects
	$user = new User($db);
	
// check if email and password are in the database
	$user->email=$_POST['email'];
	
// check if email exists, also get user details using this emailExists() method
	$email_exists = $user->emailExists();

	
	if ($email_exists && password_verify($_POST['password'], $user->pwd) ){


    // if it is, set the session value to true
		$_SESSION['logged_in'] = true;
		$_SESSION['user_id'] = $user->id;
		$_SESSION['type'] = $user->type;
		$_SESSION['name'] = htmlspecialchars($user->name, ENT_QUOTES, 'UTF-8') ;

    // if access level is 'Admin', redirect to admin section
		if($user->type=='Admin'){
			header("Location: {$home_url}admin/index.php?action=login_success");
		}

    // else, redirect only to 'Customer' section
		else{
			header("Location: {$home_url}index.php?action=login_success");
		}
	}

// if username does not exist or password is wrong
	else{
		$access_denied=true;
	}
}

include_once "layout_head.php";

echo "<div class='col-sm-12' >";

$action = isset($_GET['action']) ? $_GET['action'] : "";

if ($action == 'not_yet_logged_in') {
    echo "<div class='container' style='margin-top: 30px;max-width: 400px;'>";
    echo "<div class='alert alert-danger margin-top-40' role='alert'>Please login.</div>";
    echo "</div>";
}

// tell the user to login
else if ($action == 'please_login') {
    echo "<div class='container' style='margin-top: 30px;max-width: 400px;'>";
    echo "<div class='alert alert-info'>
	<strong>Please login to access that page.</strong>
	</div>";
    echo "</div>";
}

// tell the user if access denied
if ($access_denied) {
    echo "<div class='container' style='margin-top: 30px;max-width: 400px;'>";
    echo "<div class='alert alert-danger margin-top-40' role='alert'>
	Access Denied.<br /><br />
	Your username or password maybe incorrect
	</div>";
  echo "</div>";
}

echo "<div class='container' style='background-color:#ffffffb3;border-radius: 3px;padding: 15px;margin-top: 30px;max-width: 400px;'>";
echo "<div class='account-wall'>";
echo "<div id='my-tab-content' class='tab-content'>";
echo "<div class='tab-pane active' id='login' style='text-align: center;'>";
echo "<i class='fas fa-user-circle' style='font-size: 164px;text-align: center;'></i>";
echo "<form class='form-signin' action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "' method='post'>";
echo "<input type='text' name='email' class='form-control' placeholder='Email' required autofocus />";
echo "<input type='password' name='password' class='form-control' placeholder='Password' required />";
echo "<input type='submit' class='btn btn-lg btn-primary btn-block' value='Log In' />";
echo "</form>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";

?>

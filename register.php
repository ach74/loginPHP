<?php
// core configuration
include_once "config/core.php";

// set page title
$page_title = "Register";

// include login checker
include_once "login_checker.php";

// include classes
include_once 'config/database.php';
include_once 'objects/user.php';
include_once "libs/php/utils.php";

// include page header HTML
include_once "layout_head.php";

echo "<div class='col-md-12'>";
echo "<div class='container' style='background-color:#ffffffb3;border-radius: 3px;padding: 15px;margin-top: 30px;max-width: 600px;'>";
// registration form HTML will be here
// code when form was submitted will be here
// if form was posted
if ($_POST) {

    // get database connection
    $database = new Database();
    $db = $database->getConnection();

    // initialize objects
    $user = new User($db);
    $utils = new Utils();

    // set user email to detect if it already exists
    $user->email = $_POST['email'];

    // check if email already exists
    if ($user->emailExists()) {
        echo "<div class='alert alert-danger'>";
        echo "The email you specified is already registered. Please try again or <a href='{$home_url}login.php'>login.</a>";
        echo "</div>";
    } else {
        // create user will be here
        // set values to object properties
        $user->nombre = $_POST['nombre'];
        $user->pwd = $_POST['clave'];
        $user->access_level = false;

        // create the user
        if ($user->create()) {
            echo "<div class='alert alert-info'>";
            echo "Successfully registered. <a href='{$home_url}login.php'>Please login</a>.";
            echo "</div>";
            // empty posted values
            $_POST = array();
        } else {
            echo "<div class='alert alert-danger' role='alert'>Unable to register. Please try again.</div>";
        }
    }
}
?>
<form action='register.php' method='post' id='register'>
    <h4>Name</h4>
    <input type='text' name='nombre' class='form-control' required value="<?php echo isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre'], ENT_QUOTES) : ""; ?>" /> 
    <h4>Email</h4>
    <input type='email' name='email' class='form-control' required value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES) : ""; ?>" />
    <h4>Password</h4>
    <input type='password' name='clave' class='form-control' required id='passwordInput'>
    <button type="submit" class="btn btn-primary">
    <span class="glyphicon glyphicon-plus"></span> Register
    </button>

</form>
<?php
echo "</div>";
echo "</div>";
?>
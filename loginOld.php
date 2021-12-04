<?php
//$page= "admin login";
// Turn on error reporting demo
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Start the session 11-28-21
session_start();

//Initialize variables
$validLogin = true;
$un = "";
$page="";
//If the form has been submitted
if (!empty($_POST)) {
    //echo "The form has been submitted";

    //Get the form data
    $un = $_POST['username'];
    $pw = $_POST['password'];

    //If the login is valid
    require('/home/techtita/login-creds.php');
    if ($un == $username && $pw == $password) {
        //Record the login in the session array
        $_SESSION['un'] = $un;

        //Go to the home page
        $page = isset($_SESSION['page']) ? $_SESSION['page'] : "adminOld.php";
        header('location: '.$page);
    }

    //Invalid login -- set flag variable
    $validLogin = false;
}
include('Includes/Header.php');
?>

<div class="text-center">
    <a class="btn btn-primary btn-sm" href="https://www.tech-titans.greenriverdev.com/" role="button">back</a>
</div>



<div class="container text-center">
<h2 >ADMINISTRATOR</h2>
<p class="pb-4">Please sign in to get access</p>
</div>
<div class="card container-fluid" style="width: 18rem;">
    <div class="card-body">
        <form id="admin-login" action="#" method="post">
            <fieldset class="form-group border p-2 text-center">
                <legend class="pt-6">Log in</legend>
                <div class="form-group">
                    <span class="err-log" id="err-login">Please try again</span>
                    <label for="user" class="pl-8"></label>
                    <input type="text"  class="form-control " placeholder="user" id="username" name="username">
                    <span class="err-log" id="err-uname">enter  user name</span>
                </div>
                <div class="form-group">
                    <label for "password"></label>
                    <input type ="password" class="form-control " placeholder="password" id ="password" name ="password" >
                    <span class="err-log" id="err-pass">enter  password</span>
                </div>
                <?php
                if (!$validLogin) {
                    echo '<p class="err">Login is incorrect</p>';
                }
                ?>
            </fieldset>
            <button type="submit"   class="btn btn-primary btn-sm">Login</button>
        </form>
    </div>
</div>


<?php
include('Includes/Footer.php');
?>

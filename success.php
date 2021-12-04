<?php
// Start the session
session_start();
$page= "Inquiry Status";
include('Includes/Header.php');


//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//validate form data with JS turned off
$isValid = true;

// first name
$fname = "";
if (!empty($_POST['firstName'])) {
    $fname = $_POST['firstName'];
} else {
    echo "<p>Please enter a first name.</p>";
    $isValid = false;
}

// last name
$lname = "";
if (!empty($_POST['lastName'])) {
    $lname = $_POST['lastName'];
} else {
    echo "<p>Please enter a last name.</p>";
    $isValid = false;
}

// email
$email = "";
if (!empty($_POST['email'])) {
    $email = ($_POST['email']);
}
else{
    echo "<p>Please enter your email.</p>";
    $isValid = false;
}

//question
$question = "";
if (!empty($_POST['question'])) {
    $question = $_POST['question'];
} else {
    echo "<p>Please enter a question</p>";
    $isValid = false;
}


//Terminate script if data is not valid
if (!$isValid) {

    die("<p>Click <a href='https://www.tech-titans.greenriverdev.com' style='color:white;background-color: #006225;margin-bottom: 25px; padding: 5px'>Back</a> to fix any errors.</p>");
}


// ********************* SEND EMAIL********************************
echo "<div class='container text-center'><h1>Inquiry Status:</h1></div>";


$toEmail = "gonzalez.hector@student.greenriver.edu"; //YOUR address here
$fromName = "Hector";
$fromEmail = "tech.titans.greenriverdev@gmail.com";
//  Official email if you have one
$subject =   "New Question";
$headers = "From: $fromName <$fromEmail>";


$message =  "A new Question has been submitted.\n";
$message .= "Name: $fname $lname\n";
$message .= "Email: $email\n";
$message .= "Question: $question\n";



$success = mail($toEmail, $subject, $message, $headers);
if(!$success) {
    echo "<h1>There was a problem... Please call us.</h1>";
}
else{echo "<h1 class='text-center'>Your question has been successfully submitted.</h1>";}


// ****************** SEND EMAIL END ************************

require '/home/techtita/db.php';
$cnxn = mysqli_connect($hostname, $username, $password, $database)
or die("Error connecting to database");



$formData = array('fname'=>$fname,'lname'=>$lname,'question'=>$question,'email'=>$email);

save($formData);

function save($arr)
{
    global $cnxn;

    //Escape all single and double quotes to prevent SQL injection
    foreach ($arr as $key=>$value) {

        $arr[$key] = mysqli_real_escape_string($cnxn, $value);
    }

    //Store the order in a database
    $sql = "INSERT INTO questions (fname, lname, email, question) 
            VALUES ('{$arr["fname"]}', 
                    '{$arr["lname"]}', 
                    '{$arr["email"]}', 
                    '{$arr["question"]}'
                   )";

    mysqli_query($cnxn, $sql);
}








?>

<div class="container text-center">
    <h1 class="text-center">Thank you</h1>

    <p></p>


    <button type ="button"
            class="btn btn-primary"
            onclick="location.href='https://tech-titans.greenriverdev.com/'">BACK</button>

</div>

<?php
include('Includes/Footer.php');
?>
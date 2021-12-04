<?php
$page = "Admin Question";
include('Includes/Header.php');

//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//validate form data with JS turned off
$isValid = true;

//admin question
$newQuestion = "";
if (!empty($_POST['newQuestion'])) {
    $newQuestion = $_POST['newQuestion'];
} else {
    echo "<p>Please enter a question</p>";
    $isValid = false;
}

//admin answer
$newAnswer = "";
if (!empty($_POST['newAnswer'])) {
    $newAnswer = $_POST['newAnswer'];
} else {
    echo "<p>Please enter a question</p>";
    $isValid = false;
}

//admin category
$questionList = "";
$validCategory = array('general', 'degrees', 'languages');
if (isset($_POST['questionList'])) {
    if(in_array($_POST['questionList'], $validCategory)) {
        $questionList = $_POST['questionList'];
    } else {
        echo "<p>Please enter a valid category</p>";
        $isValid = false;
    }
} else {
    echo "<p>Please select a category</p>";
    $isValid = false;
}


//Terminate script if data is not valid
/*if (!$isValid) {

    die("<p>Click <a href='https://www.tech-titans.greenriverdev.com/adminForm.php' style='color:white;background-color: #006225;margin-bottom: 25px; padding: 5px;'>Back</a> to fix any errors.</p>");
}*/

require '/home/techtita/db.php';

//CONNECT TO DB
/*$database = "techtita_grc";
$password = "lynK%7R%L3sd";
$user = "techtita_user";
//function to connect to mySQL database
$host = "localhost"; //must put local host here
$cnxn = mysqli_connect($host,$user,$password,$database); //parameters must be in this order*/
echo "connected to database";

$formDataAdmin = array('newQuestion'=>$newQuestion,'newAnswer'=>$newAnswer,'questionList'=>$questionList);

echo "$newQuestion";
echo "$newAnswer";
echo "$questionList";

saveAdmin($formDataAdmin);

function saveAdmin($arr)
{
    global $cnxn;

    //Escape all single and double quotes to prevent SQL injection
    foreach ($arr as $key=>$value) {

        $arr[$key] = mysqli_real_escape_string($cnxn, $value);
    }

    //Store the order in a database
    $sql = "INSERT INTO answers (question_faq, answer, category) 
            VALUES ('{$arr["newQuestion"]}', 
                    '{$arr["newAnswer"]}', 
                    '{$arr["questionList"]}'
                   )";

    mysqli_query($cnxn, $sql);
}

?>

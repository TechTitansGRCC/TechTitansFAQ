<?php
// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Start the session  11-28-21
session_start();
// If the user is not logged in
$page= "admin";
if (empty($_SESSION['un'])) {
    // Store the current page in the session
    $_SESSION['page'] = "admin.php";
    // Redirect user to login page
    header ('location: loginOld.php');
//    header ('location: loginOld.php');
}

//from adminSuccess
//validate form data with JS turned off
$isValid = true;

//admin question
$newQuestion = "";
if (!empty($_POST['newQuestion'])) {
    $newQuestion = $_POST['newQuestion'];
} /*else {
    echo "<p>Please enter a question</p>";
    $isValid = false;
}*/

//admin answer
$newAnswer = "";
if (!empty($_POST['newAnswer'])) {
    $newAnswer = $_POST['newAnswer'];
} /*else {
    echo "<p>Please enter a question</p>";
    $isValid = false;
}*/

//admin category
$questionList = "";
$validCategory = array('general', 'degrees', 'languages');
if (isset($_POST['questionList'])) {
    if(in_array($_POST['questionList'], $validCategory)) {
        $questionList = $_POST['questionList'];
    }
}

// end

include('Includes/Header.php');

//connect to database
require '/home/techtita/db.php';

$formDataAdmin = array('newQuestion'=>$newQuestion,'newAnswer'=>$newAnswer,'questionList'=>$questionList);

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
<div class="container">
    <div class="text-center pt-4">
            <a class="btn btn-primary btn-sm" href="https://www.tech-titans.greenriverdev.com/adminForm.php" role="button">add new</a>
            <a class="btn btn-primary btn-sm" href="https://www.tech-titans.greenriverdev.com/" role="button">back</a>
        </div>

    <h2>Admin Page</h2>
    <table id="faq-questions" class="display" style="width:100%">
        <thead>
        <tr>
            <th>Question id</th>
            <th>first name</th>
            <th>Last name</th>
            <th>email</th>
            <th>Question</th>
            <th>Date</th>
        </tr>
        </thead>
        <tbody>


        <?php
        //define select query
        $sql = "SELECT * FROM questions";


        //send query to database
        $result = @mysqli_query($cnxn, $sql);



        //proces the rows
        foreach ($result as $row ){

            $qid = $row['question_id'];
            $first = $row['fname'];
            $last = $row['lname'];
            $email = $row['email'];
            $question = $row['question'];
            $question_date = $row['question_date'];


            echo "<tr>
                <td>$qid</td>
                <td>$first</td>
                <td>$last</td>
                <td>$email</td>
                <td>$question</td>
                <td>$question_date</td>
            </tr>";

        }

        ?>

        </tbody>
        <tfoot>
        <tr>
            <th>Question id</th>
            <th>first name</th>
            <th>Last name</th>
            <th>email</th>
            <th>Question</th>
            <th>Date</th>
        </tr>
        </tfoot>
    </table>
</div>

<?php
//include('Includes/Header.php');
include('Includes/Footer.php');
?>
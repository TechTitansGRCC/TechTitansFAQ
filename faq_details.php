<?php
// Start the session
session_start();
$page = "faq_details";
include('Includes/Header.php');

//turn on error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

//connect to database
require '/home/techtita/db.php';


$question_id = $_GET['question_id'];

$sql = "SELECT question_faq,answer,category,question_id FROM answers WHERE question_id = '$question_id'";


$result = mysqli_query($cnxn,$sql);
if (mysqli_num_rows($result) == 0) {
    die ("<p>Question not found.</p>");
}

$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

$question = $row['question_faq'];
$answer = $row['answer'];
$category = $row['category'];


    echo "<div class='container'>
          <h4>Category: $category</h4> 
          <p>Q: $question</p>
          <p>A: $answer</p>
          </div>

"


?>



<?php
include('Includes/Footer.php');
?>

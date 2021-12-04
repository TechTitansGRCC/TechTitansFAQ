<?php
// Start the session
session_start();
 $page = 'Search Results';
 include ('Includes/Header.php');

//turn on error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

//connect to database
require '/home/techtita/db.php';

$searchTerm = $_GET['search_field'];


?>


<!--class="display"-->
<div class="container">
<h2 class="display-4">Search Results For:<a class="text-danger"> <?php echo $searchTerm ?></a></h2>
<table id="faq-search" class="table" style="width:100%">
    <thead>

    <tr>
        <th class="font-weight-bold" scope="col" style="font-size: 24px">#</th>
        <th class="font-weight-bold" scope="col" style="font-size: 24px">Question</th>
        <th class="font-weight-bold ml-2" scope="col" style="font-size: 24px">Answer</th>
    </tr>
    </thead>
    <tbody>


    <?php
    //define select query
    $sql = "SELECT * FROM answers WHERE question_faq LIKE '%$searchTerm%' OR answer LIKE '%$searchTerm%'";

    //send query to database
    $result = @mysqli_query($cnxn, $sql);

    //process the rows
    foreach ($result as $row ){

        $questionID = $row['question_id'];
        $question = $row['question_faq'];
        $answer = $row['answer'];

        echo "<tr>
                <th scope='row'>$questionID</th>
                <td><a class='lead font-italic'>$question</a></td>
                <td><a class='lead'>$answer</a></td>
            </tr>";

    }

    ?>

</table>
<div class="text-left pt-4">
    <a class="btn btn-primary btn-sm" href="https://tech-titans.greenriverdev.com" role="button">back</a>
</div>
</div>



<?php include ('Includes/Footer.php'); ?>

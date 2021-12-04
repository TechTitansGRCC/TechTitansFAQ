<?php
// Start the session
session_start();
$page = "Frequently Asked Questions";
include('Includes/Header.php');

//turn on error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

//connect to database
require '/home/techtita/db.php';

?>


<div class="container">
    <div class="row">
        <section class="col-sm-12">

            <div class="faqs_heading text-center">
                <h1>SDEV Frequently Asked Questions</h1>
                <br>
            </div>

            <div class="text-left" id="questionsAccordian" role="tablist" aria-multiselectable="true">

                <div class="card mb-4 mt-4">

                    <div class="card-header" role="tab" id="generalHead">
                        <h5 class="lead font-weight-bold text-light card-title">
                            <a data-toggle="collapse" data-parent="#questionsAccordian"
                               href="#generalQuestions" aria-expanded="true" aria-controls="generalQuestions">General
                                Questions</a>
                        </h5>
                    </div>

                    <div id="generalQuestions" class="collapse show" role="tabpanel" aria-labelledby="generalHead">
                        <div class="card-block">

                            <?php
                            //define select query
                            $sql = "SELECT question_faq,answer,question_id FROM answers WHERE category = 'general'";

                            //send query to database
                            $result = @mysqli_query($cnxn, $sql);

                            //process the rows
                            foreach ($result as $row ){
                                $questionId = $row['question_id'];
                                $question = $row['question_faq'];
                                $answer = $row['answer'];

                                echo "<div class='pcDiv' id='$questionId'>
                                      <p class='quest_padding font-weight-bold my-4'>&nbsp; <span class ='float-left question'>Q: $question</span>                                                                     
                                      <span class='icon-paperclip ml-2' style='float: left; margin-left: auto; visibility: hidden' id='paperClip' >
                                        <span class='paperclip-1' style='background-color: green'>
                                          <span class='paperclip-2'>
                                            <span class='paperclip-3' style='background-color: red'>
                                              <span class='paperclip-4'>
                                              </span>
                                            </span>
                                          </span>
                                        </span> 
                                      </span>  
                                      
                                      </p><br>
                                      <p class='answers_padding mb-4 float-left answer' style='margin-top: -35px;'>A: $answer</p></div>
                                      ";

                            }

                            ?>

                        </div>
                    </div>
                </div>

                <div class="card mb-4 mt-4">

                    <div class="card-header" role="tab" id="differentHead">
                        <h5 class="lead font-weight-bold card-title">
                            <a data-toggle="collapse" data-parent="#questionsAccordian"
                               href="#differentQuestions" aria-expanded="true" aria-controls="differentQuestions">Differences
                                Between IT Degrees</a>
                        </h5>
                    </div>

                    <div id="differentQuestions" class="collapse" role="tabpanel" aria-labelledby="differentHead">
                        <div class="card-block">

                            <?php
                            //define select query
                            $sql = "SELECT question_faq,answer,question_id FROM answers WHERE category = 'degrees'";

                            //send query to database
                            $result = @mysqli_query($cnxn, $sql);

                            //process the rows
                            foreach ($result as $row ){
                                $questionId = $row['question_id'];
                                $question = $row['question_faq'];
                                $answer = $row['answer'];

                                echo "<div class='pcDiv' id='$questionId'>
                                      <p class='quest_padding font-weight-bold my-4'>&nbsp; <span class ='float-left question'>Q: $question</span>                                                                     
                                      <span class='icon-paperclip ml-2' style='float: left; margin-left: auto; visibility: hidden' id='paperClip' >
                                        <span class='paperclip-1' style='background-color: green'>
                                          <span class='paperclip-2'>
                                            <span class='paperclip-3' style='background-color: red'>
                                              <span class='paperclip-4'>
                                              </span>
                                            </span>
                                          </span>
                                        </span> 
                                      </span>  
                                      
                                      </p><br>
                                      <p class='answers_padding mb-4 float-left answer' style='margin-top: -35px;'>A: $answer</p></div>";
                            }

                            ?>

                            <br>
                        </div>
                    </div>
                </div>

                <div class="card mb-4 mt-4">

                    <div class="card-header" role="tab" id="languageHead">
                        <h5 class="lead font-weight-bold card-title">
                            <a data-toggle="collapse" data-parent="#questionsAccordian"
                               href="#languageQuestions" aria-expanded="true" aria-controls="languageQuestions">Programming
                                Languages and Tools</a>
                        </h5>
                    </div>

                    <div id="languageQuestions" class="collapse" role="tabpanel" aria-labelledby="languageHead">
                        <div class="card-block mt-4">

                            <?php
                            //define select query
                            $sql = "SELECT question_faq,answer,question_id FROM answers WHERE category = 'languages'";

                            //send query to database
                            $result = @mysqli_query($cnxn, $sql);

                            //process the rows
                            foreach ($result as $row ){
                                $questionId = $row['question_id'];
                                $question = $row['question_faq'];
                                $answer = $row['answer'];

                                echo "<div class='pcDiv' id='$questionId'>
                                      <p class='quest_padding font-weight-bold my-4'>&nbsp; <span class ='float-left question'>Q: $question</span>                                                                                        
                                      <span class='icon-paperclip ml-2' style='float: left; margin-left: auto; visibility: hidden' id='paperClip' >
                                        <span class='paperclip-1' style='background-color: green'>
                                          <span class='paperclip-2'>
                                            <span class='paperclip-3' style='background-color: red'>
                                              <span class='paperclip-4'>
                                              </span>
                                            </span>
                                          </span>
                                        </span> 
                                      </span> 
                                      
                                      </p><br>
                                      <p class='answers_padding mb-4 float-left answer' style='margin-top: -35px;'>A: $answer</p></div>";
                            }

                            ?>
                            <br>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
</div>

<div class="container">
    <form class="form-group" id="questionForm" method="post" action="success.php">
        <br>
        <h5 class="font-italic">If you'd like to ask a question, please click the button below and submit your question.
            Thank you.</h5>
        <button type="button" class="btn btn-primary mb-3" id="ask_button" onclick=openQuestionForm1()>Ask a Question
        </button>
        <br>

        <fieldset class="form-group pb-3" id="form_fieldset">
            <!--             <legend>Question Form</legend>-->

            <div class="hidden col-sm-6" id="divFirst">
                <br>
                <label for="firstName" class="">First name: </label>
                <input type="text" class="input_field form-control" id="firstName" name="firstName"
                       aria-label="first name">
                <span class="err" id="err_fname">Please enter your first name</span>
                <!--                <br>-->
            </div>


            <!-- To see this divs change class to "visible" -->
            <div class="hidden col-sm-6" id="divLast">
                <label for="lastName">Last name: </label>
                <input type="text" class="input_field form-control" id="lastName" name="lastName"
                       aria-label="last name">
                <span class="err" id="err_lname">Please enter your last name</span>
                <!--                <br>-->
            </div>


            <div class="hidden col-sm-6" id="divEmail">
                <label for="email">Email: </label>
                <input type="text" class="input_field form-control" id="email" name="email" aria-label="email">
                <span class="err" id="err_email">Please enter your email</span>
                <!--                <br>-->
            </div>


            <div class="hidden form-group col-sm-6" id="divQuestion">
                <label for="question">Question: </label>
                <textarea
                        rows="5"
                        minlength="1"
                        name="question"
                        id="question"
                        class="input_field form-control"></textarea>
                <span class="err" id="err_question">Please enter your question</span>
            </div>


            <div class="hidden col-sm-6 pl-3" id="divSubmitQuestion">
                <input class="btn btn-primary float-left" type="submit" id="submit" value="Submit your Question"/>
                <button type="button" class="btn btn-danger float-right" id="cancel_button" onclick=cancelQuestion()>
                    Clear
                </button>
            </div>

        </fieldset>
    </form><!--end button-->
</div>

<!--</div>-->

<!-- end body -->
<!-- Footer -->
<?php
include('Includes/Footer.php');
?>

<!--
for clip go link
<a href='faq_details.php?question_id=$questionId'>
-->

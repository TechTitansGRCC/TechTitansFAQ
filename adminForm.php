<?php
// Start the session
session_start();
$page = "Admin Form";
include('Includes/Header.php');
?>

<div class="container">
    <form class="form-group" id="adminForm" method="post" action="admin.php">
        <br>
        <h5 class="font-italic">ADMIN QUESTION AND ANSWER FORM</h5>

        <fieldset class="form-group" id="form_fieldset">

            <div class="col-sm-6" id="divFirst">
                <br>
                <label for="newQuestion" class="">Question: </label>
                <input type="text" class="input_field form-control" id="newQuestion" name="newQuestion"
                       aria-label="New Question">
                <span class="err" id="err_newQuestion">Enter a Question!</span>

            </div>

            <!-- To see this divs change class to "visible" -->
            <div class="col-sm-6" id="divLast">
                <label for="newAnswer">Answer: </label>
                <input type="text" class="input_field form-control" id="newAnswer" name="newAnswer"
                       aria-label="New Answer">
                <span class="err" id="err_newAnswer">Enter an Answer!</span>
                <!--                <br>-->
            </div>

            <div class="col-sm-6" id="divMiddle">
                <label for="category">Question Category: </label>
            <select class="form-control" id="questionList" name="questionList">
                <option value="none">Select a category</option>
                <option value="general">General Questions</option>
                <option value="degrees">Degrees</option>
                <option value="languages">Languages</option>
            </select>
            <span class="err" id="err_category"> Please enter a category!</span>
            </div>

            <div class="col-sm-6 pl-3" id="divSubmitQuestion">
                <a href="https://www.tech-titans.greenriverdev.com/admin.php">
                    <button class="btn btn-primary float-left mt-3" type="submit" id="submit">
                        Submit
                    </button>
                </a>
            </div>

        </fieldset>
    </form><!--end button-->
</div>


<?php
  include('Includes/Footer.php');
?>








"use strict";

// The if is used for preventing the error that shows up in the console.
// This error is created when the button is not shown on the screen until
// "Ask A Question" is pressed.

if(document.getElementById("questionForm")){
    document.getElementById("questionForm").onsubmit = validate;

}



// Validate function is used for validating the information that the user
// enters.
function validate(){
    let isvalid = true;

    // clear all the error  messages
    let errrors = document.getElementsByClassName("err");
    for (let i =0; i<errrors.length;i++){
        // errrors[i].style.display = "none";
        errrors[i].style.display = "block";
        errrors[i].style.visibility = "hidden";
    }

    // validate first name
    let first = document.getElementById("firstName").value;
    if(first.length < 1){
        document.getElementById("err_fname").style.display ="block";
        document.getElementById("err_fname").style.visibility ="visible";
        isvalid = false;
    }
    // validate last name
    let last = document.getElementById("lastName").value;
    if(last.length < 1) {
        document.getElementById("err_lname").style.display = "block";
        document.getElementById("err_lname").style.visibility = "visible";

        isvalid = false;
    }



    // validate last email
    let email = document.getElementById("email").value;
    if(email.length >= 4 && !email.includes("@")) {
        document.getElementById("err_email").innerHTML = "Invalid format"
        document.getElementById("err_email").style.display = "block";
        document.getElementById("err_email").style.visibility = "visible";

        isvalid = false;
    }else if(email.length < 4){
        document.getElementById("err_email").innerHTML = "Please enter your email"
        document.getElementById("err_email").style.display = "block";
        document.getElementById("err_email").style.visibility = "visible";

        isvalid = false;
    }


    // validate question
    let question = document.getElementById("question").value;
    if(question.length < 1) {
        document.getElementById("err_question").style.display = "block";
        document.getElementById("err_question").style.visibility = "visible";

        isvalid = false;
    }
    return isvalid;
}

// Grabbing all the elements with classname "hidden".
// This is for hiding the input fields before the user click "Ask A Question"
let formFields = document.getElementsByClassName("hidden");


// This function is used for displaying the form.
function openQuestionForm1(){
    //display all the fields

    if(document.getElementById("divFirst").style.display === "block"){
        for (let i = 0; i < formFields.length; i++) {
            formFields[i].style.display = "none";
        }
        document.getElementById("form_fieldset").style.border="0";

    }else{
        for (let i = 0; i < formFields.length; i++) {
            formFields[i].style.display = "block";
        }
        document.getElementById("form_fieldset").style.border="#D3D3D3 1px solid";


    }


    //clear all the error  messages
    let errrors = document.getElementsByClassName("err");
    for (let i =0; i<errrors.length;i++){
        errrors[i].style.display = "block";
        errrors[i].style.visibility = "hidden";
    }

}

// Grabbing all the input elements
let inputFields = document.getElementsByClassName("input_field");

// Grabbing all the span elements that display the error message
let errrors = document.getElementsByClassName("err");


// This function deletes all the user input and clear out all the errors
// when the user wants to cancel the form submission.
function cancelQuestion(){
    // document.getElementById("cancel_button")
    for (let i = 0; i < formFields.length; i++) {
        // formFields[i].style.display = "none";
        inputFields[i].value = "";
        errrors[i].style.display = "block";
        errrors[i].style.visibility = "hidden";
    }
}


// This function validates the search input. If search input is empty,
// result page will not load.
let search_field = document.getElementById('search_field');
function search_query() {
    let flag = true;
    let searchVal = search_field.value;
    if (searchVal === "" || searchVal === null) {
        flag = false;
        search_field.placeholder = "Search";

    }
    console.log(searchVal);
    return flag;
}


// question and answers populated from database
// paperclip and copy url
let pcDivs = document.getElementsByClassName("pcDiv");
let paperClip = document.getElementsByClassName("icon-paperclip");
for(let i = 0; i < paperClip.length; i++){
    pcDivs[i].addEventListener("mouseover", function (){
        // alert("hi");
        paperClip[i].style.display = "block";
        paperClip[i].style.visibility = "visible";
        paperClip[i].addEventListener("mouseenter", function(){
            paperClip[i].title = "Copy to clipboard";
        });
        paperClip[i].addEventListener("click", function (){
            let q_id = pcDivs[i].id;
            // the_id = the_id.slice(28, the_id.length);
            navigator.clipboard.writeText("https://" + location.hostname + "/faq_details.php?question_id=" + q_id);
            // navigator.clipboard.writeText("https://" + location.hostname + "/faq_details.php?question_id=" + (i+1));
        });
        paperClip[i].addEventListener("mousedown", function (){
            paperClip[i].title = "url copied";
        });
    });

    pcDivs[i].addEventListener("mouseout", function (){
        // paperClip[i].style.display = "none";
        paperClip[i].style.visibility = "hidden";
    });
}


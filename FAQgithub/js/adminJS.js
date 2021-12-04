"use strict";

document.getElementById("adminForm").onsubmit = validate;

// Validate function is used for validating the information that the user
// enters.
function validate(){
    let isvalid = true;

    // clear all the error  messages
    let errrors = document.getElementsByClassName("err");
    for (let i =0; i<errrors.length;i++){
        errrors[i].style.display = "block";
        errrors[i].style.visibility = "hidden";
    }

    // validate question
    let newQuestion = document.getElementById("newQuestion").value;
    if(newQuestion.length < 1){
        document.getElementById("err_newQuestion").style.display ="block";
        document.getElementById("err_newQuestion").style.visibility ="visible";
        isvalid = false;
    }
    // validate answer
    let newAnswer= document.getElementById("newAnswer").value;
    if(newAnswer.length < 1) {
        document.getElementById("err_newAnswer").style.display = "block";
        document.getElementById("err_newAnswer").style.visibility = "visible";

        isvalid = false;
    }

    // validate category

    let category = document.getElementById("questionList").value;
    if(category == "none"){
        document.getElementById("err_category").style.display = "block";
        document.getElementById("err_category").style.visibility = "visible";

        isvalid = false;
    }

    return isvalid;
}









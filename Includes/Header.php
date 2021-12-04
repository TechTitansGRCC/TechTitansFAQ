<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <title><?php echo $page ?></title>


    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="https://ason2.greenriverdev.com/305/techtitans/images/grfavicon.png">
    <!-- end favicon -->


    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.1/css/mdb.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400%7CRoboto:300" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!--admin table css-->
    <?php
    if($page == "admin" || $page == "Search Results"){
        echo '<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
                <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">';
    }
    ?> 
    
    
</head>
<body style="background-color: #f8f8f8!important">
<div class="container-fluid" style="background-color: #f8f8f8 !important">
    <div class="container-fluid text-center" id="content">
<!--        <div id="content" class="text-center">-->
            <nav class="navbar navbar-dark bg-dark navbar-expand-md" style="background-color: #006225!important">
                <div class="container-fluid mx-5">
                    <a class="navbar-brand px-0" href="https://www.tech-titans.greenriverdev.com/">
                        <img src="images/grLogo.png" alt="green river tech logo" class="img-responsive float-left" style="height: 60px; width: 144px;">
                    </a>
                    <h3 class="text-white px-0">Green River College Software Development Program</h3>
                    <form class="form-inline" action="search_result.php" onsubmit="return search_query()" method="get">
                        <input class="form-control" type="text" id="search_field" name="search_field" value="" placeholder="Search">
                        <button class="btn btn-outline-warning btn-sm" type="submit">Go</button>
                    </form>
                </div><!-- container -->
            </nav>

    </div>

    <div class="container text-center mb-5">
        <div style="background-color: #fcf8e3;">
            <p class="font-italic my-4 py-3 mt- border" style="font-size: large"><mark>DISCLAIMER: The information provided
                    here is not official or legally binding. This is a resource created by students, for
                    students.</mark></p>
        </div>
        <img src="images/greenriver_tech1.png" alt="image of green river campus" class="img-fluid"/>
        <div class="faqs_heading" ></div>
    </div>
<!--</div>-->
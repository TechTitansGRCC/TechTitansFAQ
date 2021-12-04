
<!-- Footer -->
<footer class="page-footer font-small blue-grey lighten-5 mt-5" style="background: #f8f8f8 !important;">
    <div class="container-fluid" style="background-color: #006225!important">
        <div>
            <!-- Grid row-->
            <div class="container row py-4 d-flex align-items-center">
            </div>
            <!-- Grid row-->
        </div>
    </div>
    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5">
        <!-- Grid row -->
        <div class="row mt-3 dark-grey-text">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                <!-- Content -->
                <h6 class="text-uppercase font-weight-bold">Green River College</h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>This site provides information and resources for students in Green River's Software Development
                    Bachelor's Degree program.</p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Useful links</h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a class="dark-grey-text" href="https://www.itconnect.greenrivertech.net/internships"
                       target="_blank">Internships</a>
                </p>
                <p>
                    <a class="dark-grey-text" href="https://www.itconnect.greenrivertech.net/studentResources"
                       target="_blank">Student Resources</a>
                </p>
                <p>
                    <a class="dark-grey-text" href="https://www.boardmasters.greenriverdev.com/" target="_blank">BoardMasters
                        Club</a>
                </p>
                <p>
                    <a class="dark-grey-text" href="http://greenrivertech.net/frequently-asked-questions.php"
                       target="_blank">faq</a>
                </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Follow</h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a class="dark-grey-text" href="https://instagram.com/greenrivertech/" target="_blank">Instagram</a>
                </p>
                <p>
                    <a class="dark-grey-text" href="https://www.linkedin.com/groups/6781985"
                       target="_blank">LinkedIn</a>
                </p>
                <p>
                    <a class="dark-grey-text" href="https://www.facebook.com/greenrivertechnologyprograms"
                       target="_blank">Facebook</a>
                </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Legal</h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a class="dark-grey-text" href="http://www.greenriver.edu/about-us/website/privacy-notice.htm"
                       target="_blank">Privacy Policy</a>
                </p>
                <p>
                    <a class="dark-grey-text"
                       href="http://www.greenriver.edu/student-affairs/financial-aid/ethical-principles-and-code-of-conduct.htm"
                       target="_blank">Code of Conduct</a>
                </p>
                <?php
                if (!empty($_SESSION['un'])) {
                echo '<p><a class="dark-grey-text" href="admin.php">Admin</a></p>
                      <p><a class="dark-grey-text" href="//www.tech-titans.greenriverdev.com/logout.php">Logout</a></p>';
                //                        echo '<div class="navbar-nav"><a class="nav-item nav-link active glyphicon glyphicon-log-out" href="//ason2.greenriverdev.com/305/guestbook/logout.php" style="float: right">Logout</a></div>';
                }else{
                    echo '<p><a class="dark-grey-text" href="admin.php">Admin Login</a></p>';
                }
                 ?>
<!--                <p>-->
<!--                    <a class="dark-grey-text" href="admin.php">Admin</a></p>-->
            </div>
            <!-- Grid column -->
        </div>
        <!-- Grid row -->
    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center text-black-50 py-3">© 2021 Green River College Technology Program
</div>
    <!-- Copyright -->
</footer>
</div>
<!-- footer -->
<script src="js/jquery.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script><!--hector script-->
<script src="js/scriptLog.js"></script>
<script src="js/adminJS.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script> $('#faq-questions').DataTable({responsive:true})</script>
</body>
</html>
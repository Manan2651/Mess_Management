<?php require_once 'headers.php'; ?>

<?php session_start();

if ($_SESSION['userlogin'] == 3) {
    ?>
    <html>

    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Colorlib Templates">
        <meta name="author" content="Colorlib">
        <meta name="keywords" content="Colorlib Templates">

        <!-- Title Page-->
        <title>Payments</title>

        <!-- Icons font CSS-->
        <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        <!-- Font special for pages-->
        <link
            href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Vendor CSS-->


        <!-- Main CSS-->
        <link href="css/main.css" rel="stylesheet" media="all">
    </head>

    <body>
        <form method="post">
            <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
                <div class="wrapper wrapper--w680">
                    <div class="card card-4">
                        <div class="card-body">
                            <h2 class="title">FeedBack</h2>

                            <div class="row row-space">

                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Variety of Food</label>
                                        <div class="p-t-10">
                                            <label class="radio-container m-r-45">Good
                                                <input type='radio' value='good' name="var" Checked="true" />
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-container">Better
                                                <input type='radio' value='better' name="var" />
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-container">Best
                                                <input type='radio' value='best' name="var" />
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row row-space">

                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Quality of Food</label>
                                        <div class="p-t-10">
                                            <label class="radio-container m-r-45">Good
                                                <input type='radio' value='good' name="qual" Checked="true" />
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-container">Better
                                                <input type='radio' value='better' name="qual" />
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-container">Best
                                                <input type='radio' value='best' name="qual" />
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row row-space">

                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Presentation of Food</label>
                                        <div class="p-t-10">
                                            <label class="radio-container m-r-45">Good
                                                <input type='radio' value='good' name="per" Checked="true" />
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-container">Better
                                                <input type='radio' value='better' name="per" />
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-container">Best
                                                <input type='radio' value='best' name="per" />
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row row-space">

                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Timing followed by Mess</label>
                                        <div class="p-t-10">
                                            <label class="radio-container m-r-45">Accurate
                                                <input type='radio' value='accurate' name="var" Checked="true" />
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-container">Inaccurate
                                                <input type='radio' value='inaccurate' name="var" />
                                                <span class="checkmark"></span>
                                            </label>

                                        </div>
                                    </div>
                                </div>

                            </div>



                            <div class="p-t-15">
                                <input type="submit" name="submit" value="Feedback" class="btn btn--radius-2 btn--blue" />

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Jquery JS-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <!-- Vendor JS-->
            <script src="vendor/select2/select2.min.js"></script>
            <script src="vendor/datepicker/moment.min.js"></script>
            <script src="vendor/datepicker/daterangepicker.js"></script>

            <!-- Main JS-->
            <script src="js/global.js"></script>
        </form>
    </body>

    </html>
    <?php
} else {
    header('Location: ../Home_Page.php');
    exit();
}
?>

<?php
if (isset($_POST['submit'])) {
    // $fname = $_POST['fullname'];
    // $contact = $_POST['contact'];
    // $email = $_POST['email'];
    // $gen = $_POST['gender'];
    // $username = $_POST['username'];
    // $pass = $_POST['password'];

    // $con = mysql_connect("localhost","root","");
    // if($con == false)
    // {
    //     die("connection failed ");
    // }

    // mysql_select_db("mess");
    // $sql = "UPDATE `user_master` SET `u_name`='$fname', `u_email`='$email',`u_contact`='$contact',`u_gender`='$gen',`u_username`='$username',`u_password`='$pass' WHERE `u_id` = '".$_SESSION['u_id']."' " ;
    // $result = mysql_query($sql,$con);
    // if(mysql_num_rows($result))
    // {
    //     echo "<script type='text/javascript'>alert('Record NOT Updated !!');</script>";
    // }
    // else
    // {
    //     echo "<script type='text/javascript'>alert('Record updated !!');</script>";
    // }


}
?>
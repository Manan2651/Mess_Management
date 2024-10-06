<?php require_once 'headers.php'; ?>

<?php session_start();
    
    if($_SESSION['userlogin'] === 2)
    {
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
                <title>Updates</title>

                <!-- Icons font CSS-->
                <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
                <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
                <!-- Font special for pages-->
                <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

                <!-- Vendor CSS-->
                <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
                <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

                <!-- Main CSS-->
                <link href="css/main.css" rel="stylesheet" media="all">
            </head>

            <body>
            <form method="post">
                <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
                    <div class="wrapper wrapper--w680">
                        <div class="card card-4">
                            <div class="card-body">
                                <h2 class="title">Update Details</h2>
                                
                                        <div class="row row-space">
                                        <div class="col-2">
                                            <div class="input-group">
                                                <label class="label">FullName</label>
                                                <input type="text" name='fullname' value="<?php echo $_SESSION['u_name']; ?>" class="input--style-4"/>
                                            </div>
                                        </div>
                                        
                                        <div class="col-2">
                                            <div class="input-group">
                                                <label class="label">Email</label>
                                                <input type="text" name='email' value="<?php echo $_SESSION['u_email']; ?>" class="input--style-4"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row row-space">
                                        <div class="col-2">
                                            <div class="input-group">
                                                <label class="label">Contact</label>
                                                <input type="text" name='contact'  value="<?php echo $_SESSION['u_contact']; ?>" class="input--style-4"/>
                                            </div>
                                        </div>

                                        <div class="col-2">
                                            <div class="input-group">
                                                <label class="label">Gender</label>
                                                <div class="p-t-10">
                                                    <label class="radio-container m-r-45">Male
                                                        <input type='radio' value='male' name="gender" Checked="true"/>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="radio-container">Female
                                                        <input type='radio' value='female' name="gender" Checked="true"/>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    

                                    <div class="row row-space">

                                        
                                        <div class="col-2">
                                            <div class="input-group">
                                                <label class="label">UserName</label>
                                                <input type="text" name='username' value="<?php echo $_SESSION['u_username']; ?>" class="input--style-4"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row row-space">
                                        <div class="col-2">
                                            <div class="input-group">
                                                <label class="label">Password</label>
                                                <input type="password" name='password' value="<?php echo $_SESSION['u_password']; ?>" class="input--style-4"/>
                                            </div>
                                        </div>
                                        
                                        <div class="col-2">
                                            <div class="input-group">
                                                <label class="label">Confirm Password</label>
                                                <input type="text" name='confirm' class="input--style-4"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-t-15">
                                        <input type="submit" name="submit" value="Update Details" class="btn btn--radius-2 btn--blue" />
                                        
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
    }
    else
    {
        header('Location: ../Home_Page.php');
        exit();
    }
?>

<?php
    if(isset($_POST['submit']))
    {
        $fname = $_POST['fullname'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $gen = $_POST['gender'];
        $username = $_POST['username'];
        $pass = $_POST['password'];

        $con = mysql_connect("localhost","root","");
        if($con == false)
        {
            die("connection failed ");
        }

        mysql_select_db("mess");
        $sql = "UPDATE `user_master` SET `u_name`='$fname', `u_email`='$email',`u_contact`='$contact',`u_gender`='$gen',`u_username`='$username',`u_password`='$pass' WHERE `u_id` = '".$_SESSION['u_id']."' " ;
        $result = mysql_query($sql,$con);
        if(mysql_num_rows($result))
        {
            echo "<script type='text/javascript'>alert('Record NOT Updated !!');</script>";
        }
        else
        {
            echo "<script type='text/javascript'>alert('Record updated !!');</script>";
        }
                

    }
?>
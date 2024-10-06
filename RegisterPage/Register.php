<?php
include("../config.php")
    ?>

<html>

<head>
    <title>Registration Page</title>

    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">

    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">

    <link href="css/main.css" rel="stylesheet" media="all">

</head>

<body>
    <form method="post" action="reg_temp.php">

        <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
            <div class="wrapper wrapper--w680">
                <div class="card card-4">
                    <div class="card-body">
                        <h2 class="title">Register YourSelf Here !!</h2>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">FullName</label>
                                    <input type="text" name='fullname' class="input--style-4" />
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input type="text" name='email' class="input--style-4" />
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Contact</label>
                                    <input type="text" name='contact' class="input--style-4" />
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type='radio' value='male' name="gender" Checked="true" />
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type='radio' value='female' name="gender" Checked="true" />
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
                                    <input type="text" name='username' class="input--style-4" />
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Password</label>
                                    <input type="text" name='password' class="input--style-4" />
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Confirm Password</label>
                                    <input type="text" name='confirm' class="input--style-4" />
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Select Role</label>
                                    <div class="rs-select2 js-select-simple select--no-search">

                                        <select name="role">
                                            <option value="" selected="True" disabled="True">Select</option>
                                            <?php $sql = "select * from role_master where not role_id='1'; ";
                                            $result = mysqli_query($sql, $con);

                                            while ($rows = mysqli_fetch_array($result)) {
                                                ?>
                                                <option value="<?php $rows['role_id']; ?>"><?php echo $rows['role_name']; ?>
                                                </option>

                                                <?php
                                            }
                                            ?>
                                        </select>

                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Select Mess</label>
                                    <div class="rs-select2 js-select-simple select--no-search">

                                        <select name="mess">
                                            <option value="" selected="True" disabled="True">Select</option>
                                            <?php
                                            $sql1 = "select * from mess_master;";
                                            $result1 = mysqli_query($sql1, $con);
                                            while ($rows = mysqli_fetch_array($result1)) {
                                                ?>
                                                <option value="<?php $rows['mess_id']; ?>"><?php echo $rows['mess_name']; ?>
                                                </option>

                                                <?php
                                            }
                                            ?>
                                        </select>

                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="p-t-15">
                            <input type="submit" name='submit' value="Register Mess"
                                class="btn btn--radius-2 btn--blue" />
                        </div>



                    </div>
                </div>
            </div>
        </div>

        <!-- Jquery JS-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <!-- Vendor JS-->
        <script src="vendor/select2/select2.min.js"></script>

        <!-- Main JS-->
        <script src="js/global.js"></script>


    </form>
</body>

</html>
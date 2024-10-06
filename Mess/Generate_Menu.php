<?php require_once 'headers.php'; ?>

<?php session_start();

if ($_SESSION['userlogin'] === '1') {
    ?>
    <?php
    include("config.php");
    $sql = "select * from register_user where role_id='3'; ";
    $result = mysqli_query($sql, $con);


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
        <title>Register Society</title>

        <!-- Icons font CSS-->
        <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        <!-- Font special for pages-->
        <link
            href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

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
                            <h2 class="title">Generate Menu</h2>

                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Menu</label>
                                        <div class="rs-select2 js-select-simple select--no-search">

                                            <select name="time">
                                                <option value="" selected="True" disabled="True">Select</option>
                                                <option value="Monday">Monday - Rajma Masala, Aaloo Matar, Dal-Pulav, Roti,
                                                    Salad, Buttermilk</option>
                                                <option value="Tuesday">Tuesday - Bhindi Masala, Chana Masala, Dhaniya Rice,
                                                    Dal, Roti, Salad, Buttermilk</option>
                                                <option value="Wednesday">Wednesday - Besan Gatta, Paneer Kadhai, Dal, Rice,
                                                    Roti, Salad, Curd</option>
                                                <option value="Thursday">Thursday - Mix Green Sabji, Kadhi Pakoda, Dhaniya
                                                    Rice, Dal, Roti,Salad, Buttermilk</option>
                                                <option value="Friday">Friday - Methi Mutter Malai, Kurkuri Bhindi, Dal Fry,
                                                    Jeera Rice, Roti, Salad, Buttermilk</option>
                                                <option value="Saturday">Saturday - Chhole Masala, Mix Vegetable, Dal
                                                    Makhani, Garlic Rice, Roti, Salad, Buttermilk</option>
                                                <option value="Sunday">Sunday - Feast</option>
                                            </select>

                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="p-t-15">
                                <input type="submit" name="submit" value="Generate Menu"
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
//session_start();
if (isset($_POST['submit'])) {
    $time = $_POST['time'];
    $menu = $_POST['Menu'];
    $date = date('d-m-y');

    $con = mysqli_connect("localhost", "root", "");
    if ($con == false) {
        die("connection failed ");
    }

    mysqli_select_db("mess");
    $umessname = $_SESSION['u_messname'];

    $sql1 = "select * from mess_master where mess_name='$umessname'; ";
    $result1 = mysqli_query($sql1, $con);

    $mid = "";
    while ($temp = mysqli_fetch_array($result1)) {
        $mid = $temp['mess_id'];
    }

    $sql2 = "select * from `menu_master` where date='$date' and time='$time' ";
    $result2 = mysqli_query($sql2, $con);

    if (!mysqli_num_rows($result2)) {
        $sql3 = "INSERT INTO `menu_master` (`date`, `time`, `daily_menu`, `mess_id`) VALUES ('$date', '$time', '$menu', '$mid'); ";
        $result3 = mysqli_query($sql3, $con);

        if ($result3 === false) {
            echo "<script type='text/javascript'>alert('Record NOT Inserted !!');</script>";
        } else {
            echo "<script type='text/javascript'>alert('Record Inserted !!');</script>";
        }
    } else {
        echo "<script type='text/javascript'>alert('Record Exists !!');</script>";
    }
}
?>
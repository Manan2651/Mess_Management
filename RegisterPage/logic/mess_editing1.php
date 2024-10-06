<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mess_registration.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="title">Registation</div>
        <form action="mess_editing.php" method="post">
            <div class="user_details">
                <div class="input_pox">
                    <?php
                    include("../config.php");

                    $mess_id = $_GET['u_id'];
                    $sql = "SELECT * FROM `mess_master` WHERE `mess_id`='$mess_id'";
                    $result = mysqli_query($con, $sql);
                    $row = mysqli_fetch_assoc($result);
                    ?><input type="hidden" name="mess_id" placeholder="Enter Your name"
                        value="<?php echo $row['mess_id'] ?>">
                    <span class="datails">Mess Name</span>
                    <input type="text" name="mess_name" placeholder="Enter Your name"
                        value="<?php echo $row['mess_name'] ?>" required>
                </div>
                <div class="input_pox">
                    <span class="datails">College Name</span>
                    <input type="text" name="college_name" placeholder="Enter Your Username"
                        value="<?php echo $row['mess_collegename'] ?>" required>
                </div>
                <div class="input_pox">
                    <span class="datails">Date Of Registration</span>
                    <input type="date" name="dor" id="myDate" value="<?= date('Y-m-d') ?>" readonly required>
                </div>

            </div>
            <div class="button">
                <input type="submit" value="Update">
            </div>
        </form>
    </div>
    <script>document.getElementById("myDate").defaultValue = getDate();</script>
</body>

</html>
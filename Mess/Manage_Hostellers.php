<?php require_once 'headers.php' ?>

<?php session_start();

if ($_SESSION['userlogin'] === '1') {
    ?>
    <?php
    include("config.php");
    $sql = "select * from user_master where role_id='3'; ";
    $result = mysqli_query($sql, $con);

    ?>
    <html>

    <head>
        <title>Manage Hostellers</title>
        <style>
            * {
                font-family: sans-serif;
            }

            .content-table {
                border-collapse: collapse;
                margin: 25px 0;
                font-size: 0.9em;
                min-width: 400px;
                border-radius: 5px 5px 0 0;
                overflow: hidden;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            }

            .content-table thead tr {
                background-color: #009879;
                color: #ffffff;
                text-align: left;
                font-weight: bold;
            }

            .content-table th,
            .content-table td {
                padding: 12px 15px;
            }

            .content-table tbody tr {
                border-bottom: 1px solid #dddddd;
            }

            .content-table tbody tr:nth-of-type(even) {
                background-color: #f3f3f3;
            }

            .content-table tbody tr:last-of-type {
                border-bottom: 2px solid #009879;
            }

            .content-table tbody tr.active-row {
                font-weight: bold;
                color: #009879;
            }

            .btn {
                background: darkred;
                color: white;
                font-size: 1.2em;
                padding: 5px 30px;
                text-decoration: none;

            }

            .btn:hover {
                background: white;
                color: red;
                font-size: 1.2em;
                padding: 5px 30px;
                text-decoration: none;
            }
        </style>
    </head>

    <body>
        <center>
            <table class="content-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Gender</th>
                        <th>Date of Reg</th>
                        <th>Username</th>
                        <th>Subscription Plan</th>
                        <th>Remove ?</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    while ($rows = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $rows['u_id'];
                                $_SESSION['removeid'] = $rows['u_id']; ?>
                            </td>
                            <td>
                                <?php echo $rows['u_name'] ?>
                            </td>
                            <td>
                                <?php echo $rows['u_contact'] ?>
                            </td>
                            <td>
                                <?php echo $rows['u_gender'] ?>
                            </td>
                            <td>
                                <?php echo $rows['u_dor'] ?>
                            </td>
                            <td>
                                <?php echo $rows['u_username'] ?>
                            </td>
                            <td>
                                <?php echo $rows['u_plan'] ?>
                            </td>
                            <td><a class="btn" href="Remove_Hostellers.php">Remove</a></td>
                        </tr>
                        <?php
                    }
                    ?>


                </tbody>
            </table>
        </center>
    </body>

    </html>
    <?php
} else {
    header('Location: ../Home_Page.php');
    exit();
}
?>
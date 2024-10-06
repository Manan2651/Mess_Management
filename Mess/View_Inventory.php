<?php require_once 'headers.php' ?>

<?php session_start();

if ($_SESSION['userlogin'] == 2) {
    ?>
    <?php
    include("config.php");
    $messid = "";
    $sqlm = "select mess_id from mess_master where mess_name='" . $_SESSION['u_messname'] . "';";
    $resultm = mysqli_query($sqlm, $con);
    while ($temp = mysqli_fetch_array($resultm)) {
        $messid = $temp['mess_id'];
    }

    $sql = "select * from inventory_master where mess_id = '$messid'; ";
    $result = mysqli_query($sql, $con);

    ?>
    <html>

    <head>
        <title>View Inventory</title>
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
                background: blue;
                color: white;
                font-size: 1.2em;
                padding: 5px 30px;
                text-decoration: none;

            }

            .btn:hover {
                background: white;
                color: blue;
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
                        <th>Item Name</th>
                        <th>Quantity</th>
                        <th>Status</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    while ($datas = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $datas['in_id'] ?>
                            </td>
                            <td>
                                <?php echo $datas['in_name'] ?>
                            </td>
                            <td>
                                <?php echo $datas['in_quality'] ?>
                            </td>
                            <td>
                                <?php echo $datas['in_status'] ?>
                            </td>
                            <td><a class="btn" href=".php">Edit</a></td>
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
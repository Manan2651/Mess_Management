<?php require_once 'headers.php' ?>

<?php session_start();
    
    if($_SESSION['userlogin'] === '1')
    {
        ?>
            <?php 
                $con = mysql_connect("localhost","root","");
                if($con == false)
                {
                    die("connection failed ");
                }
        
                mysql_select_db("mess");
                $sql = "select * from menu_master where mess_id=(select mess_id from mess_master where mess_name='".$_SESSION['u_messname']."'); " ;
                $result = mysql_query($sql,$con);

            ?>
            <html>
                <head>
                    <title>Approve Hostellers</title>
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
                                border-bottom: 1px solid #f3f3f3;
                            }

                            .content-table tbody tr:nth-of-type(even) {
                                background-color: #f3f3f3;
                            }

                            .content-table tbody tr:last-of-type {
                                border-bottom: 2px solid #f3f3f3;
                            }

                            .content-table tbody tr.active-row {
                                font-weight: bold;
                                color: #f3f3f3;
                            }

                            .btn
                            {
                                background: blue;
                                color: white;
                                font-size: 1.2em;
                                padding: 5px 30px;
                                text-decoration: none;

                            }
                            .btn:hover
                            {
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
                            <th>Id</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Menu</th>
                            <th>Are you going?<th>
                        </tr>
                        </thead>
                        <tbody>
                        
                            <?php 
                                //session_start();
                                while($rows = mysql_fetch_array($result))
                                {
                                    ?>
                                    <tr>
                                        <td><?php echo $rows['menu_id']; ?> </td>
                                        <td><?php echo $rows['date']; ?></td>
                                        <td><?php echo $rows['time']; ?></td>
                                        <td><?php echo $rows['daily_menu']; ?></td>
                                        <td><a class="btn" href="yes.php">Yes</a><a class="btn" href="no.php">No</a></td>
                                    </tr>
                                    <?php
                                }
                            ?>
                        
                        
                        </tbody>
                    </table></center>
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


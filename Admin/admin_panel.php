<?php
session_start();
if ($_SESSION['userlogin'] == 1) { ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="admin_panel.css">
        <title>Document</title>

    </head>

    <body>
        <?php
        include("nav_bar.php");
        ?>
        <div class="container">

            <div class="main">
                <h1>
                    Mess Table</h1>
                <table>
                    <thead>
                        <tr>
                            <th>Mess Name</th>
                            <th>Date Of Registration</th>
                            <th>College Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("config.php");


                        $sql = "SELECT * FROM `mess_master` ";
                        $result = mysqli_query($con, $sql);

                        ?>

                        <?php
                        while ($rows = mysqli_fetch_array($result)) {
                            ?>
                            <tr>
                                <td>
                                    <?php echo $rows['mess_name'] ?>
                                </td>
                                <td>
                                    <?php echo $rows['mess_dor'] ?>
                                </td>
                                <td>
                                    <?php echo $rows['mess_collegename'] ?>
                                </td>
                                <td><a href="logic/mess_editing1.php?u_id=<?php echo $rows['mess_id'] ?>"
                                        class="button">Edit</a>
                                </td>
                                <td><a href="delete/delete.php?u_id=<?php echo $rows['mess_id'] ?>"
                                        class="button_delete">Delete</a></td>
                            </tr>
                            <?php
                        }
                        ?>


                    </tbody>
                </table>
            </div>
        </div>

        <script>
            const navToggle = document.querySelector('.nav-toggle');
            const navMenu = document.querySelector('.nav-menu');

            navToggle.addEventListener('click', function () {
                navToggle.classList.toggle('active');
                navMenu.classList.toggle('active');
            });
        </script>
    </body>

    </html>
    <?php
} else {
    header('Location: ../Home_Page.php');
    exit();
}
?>
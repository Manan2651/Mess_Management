<?php 
    session_start();
    
    if($_SESSION['userlogin'] === '1')
    {
        ?>

            <style>
                
                .welcome h2
                {
                    position: absolute;
                    color: #0A0000;
                    font-size: 45px;
                    left: 42%;
                    top: 22%;
                    font-family: Comic Sans MS;
                }

                .welcome1 h2
                {
                    position: absolute;
                    color: #0A0000;
                    font-size: 45px;
                    left: 40%;
                    top: 42%;
                    font-family: Comic Sans MS;
                }
                
                .title2 h1
                {
                    position: absolute;
                    color: #FF0000;
                    font-size: 50px;
                    left: 42%;
                    top: 33%;
                    font-family: sans-serif;
                }
            </style>
            
            <html>
            <head>
                <title></title>
                <link href="stylemesspage.css" rel="stylesheet" type="text/css" />
            </head>
            <body>

            <nav class="menu">
                <ol>
                    <li class="menu-item"><a href="Home_Page_Hostellers.php">Home</a></li>

                    
                    <li class="menu-item"><a href="Payments_Hostellers.php">Payment</a></li>

                    <li class="menu-item"><a href="Feedback_Hostellers.php">FeedBack</a></li>

                    <li class="menu-item">
                    <a href="#0">Daily</a>
                    <ol class="sub-menu">
                    <li class="menu-item"><a href="View_menu.php">Menu</a></li>
                        <li class="menu-item"><a href="Create_Poll.php">Count</a></li>
                    </ol>
                    </li>


                    <li class="menu-item">
                    <a href="#0">Polls</a>
                    <ol class="sub-menu">
                    <li class="menu-item"><a href="Result_Poll.php">Result</a></li>
                        <li class="menu-item"><a href="Create_Poll.php">View</a></li>
                    </ol>
                    </li>


                    <li class="menu-item">
                    <a href="Profile_Secretary.aspx">Profile</a>
                    <ol class="sub-menu">
                        <li class="menu-item"><a href="Updates_Hostellers.php">Update</a></li>
                    </ol>
                    </li>

                    <li class="menu-item"><a href="Mess_Auth_Logout.php">Logout</a></li>

                </ol>
                    </nav>

                    <div class="welcome">
                        <h2>Welcome</h2>
                    </div>

                    <div class="title2">
                        <h1>
                            <?php echo $_SESSION['u_name']; ?>
                        </h1>
                    </div>

                    <div class="welcome1">
                        <h2>Hostellers</h2>
                    </div>
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
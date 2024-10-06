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
        <form action="logic/mess_registration1.php" method="post">
            <div class="user_details">
                <div class="input_pox">
                    <span class="datails">Mess Name</span>
                    <input type="text" name="mess_name" placeholder="Enter Your name" required>
                </div>
                <div class="input_pox">
                    <span class="datails">College Name</span>
                    <input type="text" name="college_name" placeholder="Enter Your Username" required>
                </div>
                <div class="input_pox">
                    <span class="datails">Date Of Registration</span>
                    <input type="date" name="dor" id="myDate" value="<?= date('Y-m-d') ?>" readonly required>
                </div>

            </div>
            <div class="button">
                <input type="submit" value="Register">
            </div>
        </form>
    </div>
    <script>document.getElementById("myDate").defaultValue = getDate();</script>
</body>

</html>
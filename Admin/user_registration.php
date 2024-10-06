<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user_registration.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="title">Registation</div>
        <form action="logic/user_registration1.php" method="post">
            <div class="user_details">
                <div class="input_pox">
                    <span class="datails">Full Name</span>
                    <input type="text" id="name" name="fullname" placeholder="Enter Your name" required>
                </div>
                <div class="input_pox">
                    <span class="datails">Username</span>
                    <input type="text" name="username" placeholder="Enter Your Username" required>
                </div>
                <div class="input_pox">
                    <span class="datails">Email</span>
                    <input type="text" name="email" placeholder="Enter Your Email" required>
                </div>
                <div class="input_pox">
                    <span class="datails">Phone Number</span>
                    <input type="text" name="phone" id="phoneNumber" placeholder="Enter Your Phone" required>
                </div>
                <div class="input_pox">
                    <span class="datails">Date Of Birth</span>
                    <input type="date" name="dob" required>
                </div>
                <?php
                include("config.php");
                $sql = "SELECT * FROM `mess_master`";
                $result = mysqli_query($con, $sql);
                ?>
                <div class="input_pox">
                    <span class="datails">Mess Name</span>
                    <!-- <input type="text" placeholder="Mess Name" required> -->
                    <select name="messname">
                        <?php while ($rows = mysqli_fetch_array($result)) { ?>
                            <option value="<?php echo $rows['mess_id'] ?>"><?php echo $rows['mess_name'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="input_pox">
                    <span class="datails">Password</span>
                    <input type="password" name="password" placeholder="Enter Your Password" id="myInput" required>
                </div>
                <div class="input_pox">
                    <span class="datails">Select Role</span>
                    <!-- <input type="text" placeholder="Mess Name" required> -->
                    <select name="messname">
                        <option value="2">Mess</option>
                        <option value="3">Hosteller</option>
                    </select>
                </div>
            </div>
            <div class="gender_details">
                <input type="radio" name="gender" value="Male" id="dot-1">
                <input type="radio" name="gender" value="Female" id="dot-2">
                <input type="radio" name="gender" value="Prefer Not to say" id=" dot-3">
                <span class="gender_title"> Gender</span>
                <div class="category">
                    <label for="dot-1">
                        <span class="dot one"></span>
                        <span class="gender">Male</span>
                    </label>
                    <label for="dot-2">
                        <span class="dot two"></span>
                        <span class="gender">Female</span>
                    </label>
                    <label for="dot-3">
                        <span class="dot three"></span>
                        <span class="gender">Prefer not to say</span>
                    </label>
                </div>
            </div>
            <div class="button">
                <input type="submit" value="Register">
            </div>
        </form>
    </div>
    <script>
        function validateForm(event) {
            event.preventDefault(); // prevent the form from submitting

            // Get form values
            const name = document.getElementById('name').value;
            const phone = document.getElementById('phone').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm-password').value;
            function validateName(name) {
                // Check if name contains only letters
                if (/^[a-zA-Z]+$/.test(name)) {
                    return true;
                } else {
                    return false;
                }
            }

            function validatePhoneNumber(phoneNumber) {
                // Strip all non-numeric characters
                phoneNumber = phoneNumber.replace(/\D/g, '');

                // Check if phone number is exactly 10 digits
                if (phoneNumber.length === 10) {
                    return true;
                } else {
                    return false;
                }
            }

            function validateEmail(email) {
                // Check if email address is valid using a regular expression
                if (/^\S+@\S+\.\S+$/.test(email)) {
                    return true;
                } else {
                    return false;
                }
            }

            function validatePassword(password, confirmPassword) {
                // Check if password and confirm password are the same
                if (password === confirmPassword) {
                    return true;
                } else {
                    return false;
                }
            }
            // Validate form values
            if (!validateName(name)) {
                alert('Please enter a valid name');
                return;
            }

            if (!validatePhoneNumber(phone)) {
                alert('Please enter a valid phone number');
                return;
            }

            if (!validateEmail(email)) {
                alert('Please enter a valid email address');
                return;
            }

            if (!validatePassword(password, confirmPassword)) {
                alert('Passwords do not match');
                return;
            }

            // If form values are valid, submit the form
            alert('Form submitted successfully!');
            document.forms[0].submit();
        }


    </script>
</body>

</html>
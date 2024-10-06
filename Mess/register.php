<html>
                <head>
                    <title>Generate Menu</title>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link rel="stylesheet" href="styleform.css">
                </head>

                <body>
                <div class="title">Registation</div>
                        <form  method="post">
                            <div class="user_details">
                                <div class="input_pox">
                                    <span class="datails">Full Name</span>
                                    <input type="text" placeholder="Enter Your name" required>
                                </div>
                                <div class="input_pox">
                                    <span class="datails">Username</span>
                                    <input type="text" placeholder="Enter Your Username" required>
                                </div>
                                <div class="input_pox">
                                    <span class="datails">Email</span>
                                    <input type="text" placeholder="Enter Your Email" required>
                                </div>
                                <div class="input_pox">
                                    <span class="datails">Phone Number</span>
                                    <input type="text" placeholder="Enter Your Phone" required>
                                </div>
                                <div class="input_pox">
                                    <span class="datails">Date Of Birth</span>
                                    <input type="date" required>
                                </div>
                                <div class="input_pox">
                                    <span class="datails">Mess Name</span>
                                    <!-- <input type="text" placeholder="Mess Name" required> -->
                                    <select>
                                        <option value="example">Example</option>
                                    </select>
                                </div>
                                <div class="input_pox">
                                    <span class="datails">Password</span>
                                    <input type="password" placeholder="Enter Your Password" id="myInput" required>
                                </div>

                            </div>
                            <div class="gender_details">
                                <input type="radio" name="gender" id="dot-1">
                                <input type="radio" name="gender" id="dot-2">
                                <input type="radio" name="gender" id="dot-3">
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

                </body>
            </html>
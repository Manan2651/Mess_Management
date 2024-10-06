<html>
<head>
    <title>Registration Page</title>

    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
  
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">

    <link href="css/main.css" rel="stylesheet" media="all">

</head>
<body>
    <form id="form1" runat="server">

    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Register Your Mess Here !!</h2>
                    
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Mess Name</label>
                                    <input type="text" name='Messname' class="input--style-4"/>
                                </div>
                            </div>
                            
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">College Name</label>
                                    <input type="text" name='Collegename' class="input--style-4"/>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="p-t-15">
                            <input type="submit" name='submit' value="Register Mess"  class="btn btn--radius-2 btn--blue" />
                        </div>
                    
                    
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
    
    
    </form>
</body>
</html>

<?php 
    
?>


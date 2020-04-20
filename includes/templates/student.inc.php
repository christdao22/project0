<link rel="stylesheet" href="../css/main.css" type="text/css" />
<title>Profile</title>
</head>

<?php include '../utilities/dbconnect.util.php'; ?>

<body class="container-fluid wrapper p-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="profile.php">Profile</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="account.php">Account</a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0" action="../transactions/logout.php">
                <div class='form-group'>
                    <button class="btn logout" name="logout"
                        style='background-color:#f77042;color:white; display: block; margin-left: auto;'>logout</button>
                </div>
            </form>
        </div>
    </nav>



    <div class="card-body con" style="background-color:white">
        <div class="row mx-md-n1 main">
            <div class="col-lg-3 p-3 ml-auto border h-50" style="text-align:center;">
                <?php  
                    include '../transactions/user_fetch_data.php';
                    include '../includes/templates/sidebar.inc.php';
                ?>
            </div>


            <div class="col-lg-8 p-3 h-auto border m-auto">
                <div style="line-height:5px;">
                    <h3><span style="font-weight:bold"><?php echo $lname; ?></span>,
                        <?php echo $fname.' '; echo substr($mname, 0, 1).'.'; ?></h3>
                    <p><?php echo $course; ?></p>
                    <p><?php  echo $year_level;?></p>
                    <p><?php echo $school_year;?></p>
                </div>

                <hr>

                <h6>Personal Information</h6>
                <table class="table table-striped table-hover table-sm">
                    <tr>
                        <td style='width:150px'>Last Name</td>
                        <td><?php echo $lname;?></td>
                    </tr>
                    <tr>
                        <td style='width:150px'>First Name</td>
                        <td><?php echo $fname;?></td>
                    </tr>
                    <tr>
                        <td style='width:150px'>Middle Name</td>
                        <td><?php echo $mname.'.';?></td>
                    </tr>
                    <tr>
                        <td style='width:150px'>Gender</td>
                        <td><?php echo $gender;?></td>
                    </tr>
                    <tr>
                        <td style='width:150px'>Date of Birth</td>
                        <td><?php echo $DOB;?></td>
                    </tr>
                    <tr>
                        <td style='width:150px'>Place of Birth</td>
                        <td><?php echo $PlaceOfBirth;?></td>
                    </tr>
                    <tr>
                        <td style='width:150px'>Civil Status</td>
                        <td><?php echo $civilStatus;?></td>
                    </tr>
                    <tr>
                        <td style='width:150px'>Mobile Number</td>
                        <td><?php echo $contact_Number;?></td>
                    </tr>
                    <tr>
                        <td style='width:150px'>Address</td>
                        <td><?php echo $address;?></td>
                    </tr>
                    <tr>
                        <td style='width:150px'>Guardian</td>
                        <td><?php echo $guardian;?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <footer class="footer-style card-footer footer-copyright text-center">
        © 2020 Copyright: ChristianPDaohog
    </footer>
</body>


















<!-- <div class="col-md-4" style="border:1px solid red">
                <div class="card-body" style="border:1px solid red">
                    <div class="list-group nav nav-tabs" style='color:#333'>
                        <a class="list-group-item font-sm" href="#s1"
                            style='background-color:#333; color:white'>Profile</a>

                        <a href="#s3" class="list-group-item font-sm" style='color:#333'><i class="fa fa-picture-o"></i>
                            Profile Picture
                        </a>
                        <a class="list-group-item font-sm " href="#s4" style='color:#333'><i class="fa fa-lock "></i>
                            Change Password
                        </a>
                        <a class="list-group-item font-sm" href="#s5" style='color:#333'><i class="fa fa-envelope "></i>
                            Change Username
                        </a>
                        <a class="list-group-item font-sm" href="#s5" style='color:#333'><i class="fa fa-envelope "></i>
                            Logout
                        </a>

                    </div>
                </div>
            </div>

            <div class="" style="border:1px solid red">
                <div class="card-body " style="background-color:white; border:1px solid red">

                    <h6>Personal Information</h6>
                    <table class="table table-striped table-hover table-sm">
                        <tr>
                            <td style='width:150px'>Last Name</td>
                            <td>Daohog</td>
                        </tr>
                        <tr>
                            <td style='width:150px'>First Name</td>
                            <td>Christian</td>
                        </tr>
                        <tr>
                            <td style='width:150px'>Middle Name</td>
                            <td>Daohog</td>
                        </tr>
                        <tr>
                            <td style='width:150px'>First Name</td>
                            <td>Christian</td>
                        </tr>
                    </table>
                </div>
            </div> -->
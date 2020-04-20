<link rel="stylesheet" href="../css/main.css" type="text/css" />
<title>Account</title>
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
                <li class="nav-item ">
                    <a class="nav-link" href="profile.php">Profile</a>
                </li>
                <li class="nav-item active">
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
                <!-- <div class="col-lg-3 p-3 ml-auto border" style="text-align:center;">
                    <?php  
                    include '../transactions/user_fetch_data.php';
                    // include '../includes/templates/sidebar.inc.php';
                    ?>
                </div> -->

                <div class="col-md-4 p-3 h-auto border m-auto">
                    <div class="list-group nav nav-tabs" style='color:#333;'>
                        <a class="list-group-item font-sm" style='background-color:#333; color:white; text-align:center' disabled>Account
                            Settings</a>

                        <a href="../accountsettings/changeprofile.php?userid=<?php echo $uid; ?>"
                            class="list-group-item font-sm" style='color:#333'><i class="fas fa-user"></i>
                            Change Profile Picture
                        </a>
                        <a class="list-group-item font-sm "
                            href="../accountsettings/changepassword.php?userid=<?php echo $uid; ?>"
                            style='color:#333'><i class="fa fa-lock "></i>
                            Change Password
                        </a>
                        <a class="list-group-item font-sm"
                            href="../accountsettings/changeusername.php?userid=<?php echo $uid; ?>"
                            style='color:#333'><i class="fa fa-envelope "></i>
                            Change Username
                        </a>

                    </div>
                </div>

            </div>
        </div>

    </div>
    <footer class="footer-style card-footer footer-copyright text-center">
        © 2020 Copyright: ChristianPDaohog
    </footer>
</body>


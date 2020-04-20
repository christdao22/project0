<?php include '../includes/templates/header.inc.php';?>

<link rel="stylesheet" href="../css/main.css" type="text/css" />
<title>Account</title>
</head>


<?php
$cpass = True;
include '../utilities/dbconnect.util.php';
include '../utilities/validation.util.php';
include '../transactions/accountvalidate.val.php';
?>

<body class="jumbotron jumbotron-fluid body-size col-lg-4">
    <div class="container">
        <div class="head p-3">
            <h4 class="m-0 text-center" style="color:white">Change Password</h4>
        </div>

        <div class="card-body" style="background-color:white">
            <?php if ($passErrors != 0) {echo "<div class='alert alert-danger' role='alert'><p class='m-0'> <font color=red><i class='fas fa-exclamation-circle'></i> " . $err_array[$passErrors - 1] . "</font> </p></div>";}?>

            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">

                <div class="form-group text-left">
                    <label for="oldpassword">Current Password</label>
                    <input class="form-control" name="oldpassword" type="password" placeholder="Current Password"
                        required <?php if ($passErrors != 0) {echo 'style="border:2px solid red;"';}?>>

                </div>


                <div class="form-group text-left">
                    <label for="password">New Password</label>
                    <input class="form-control" name="password" type="password" placeholder="Password" required
                        <?php if ($passErrors != 0) {echo 'style="border:2px solid red;"';}?>>
                </div>


                <div class="form-group text-left">
                    <label for="repass">Retype Password</label>
                    <input class="form-control" name="repass" type="password" placeholder="Retype Password" required
                        <?php if ($passErrors != 0) {echo 'style="border:2px solid red;"';}?>>
                </div>


                <div class="form-group">
                    <button class="btn form-control" name='submit' style="background-color:#FB8122; color:white">Save
                        Changes</button>
                </div>

            </form>
            <div class="form-group" style=" text-align:center;">

                <a class="btn w-100" href="../admin/account.php?"
                    style="width:150px; background-color:#1D2228; color:white;">Cancel</a>
            </div>
        </div>

        <div class="footer-style card-footer footer-copyright text-center py-3 mt-0">
            © 2020 Copyright: ChristianPDaohog
        </div>
    </div>

</body>

<?php include '../includes/templates/footer.inc.php';?>
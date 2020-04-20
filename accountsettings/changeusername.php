<?php include '../includes/templates/header.inc.php';?>

<link rel="stylesheet" href="../css/main.css" type="text/css" />
<title>Account</title>
</head>



<?php 
$cusername = True;
include '../utilities/dbconnect.util.php';
include '../utilities/validation.util.php';
include '../transactions/accountvalidate.val.php';
?>


<body class="jumbotron jumbotron-fluid body-size col-lg-4">
    <div class="container">
        <div class="head p-3">
            <h4 class="m-0 text-center" style="color:white">Change Username</h4>
        </div>

        <div class="card-body" style="background-color:white">
        <?php if ($unErrors != 0) {echo "<div class='alert alert-danger' role='alert'> <p class='m-0'> <font color=red><i class='fas fa-exclamation-circle'></i> ".$err_array[$unErrors-1]."</font> </p></div>";}?>

            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">

            <div class="form-group text-left">
                    <label for="username">Change Username</label>
                    <input class="form-control" name="username" type="text" placeholder="Username"
                        value="<?PHP if(isset($_POST['username'])) {echo htmlspecialchars(trim($_POST['username']));}?>"
                        required <?php if ($unErrors != 0) {echo 'style="border:2px solid red;"';}?>>
                    
                </div>


                <div class="form-group mt-5">
                    <button class="btn btn-primary form-control" style=" font-weight:bold" type="submit"
                        name='submit'>Save Changes</button>
                </div>

            </form>
            <div class="form-group" style=" text-align:center;">
                <a class="btn w-100" href="../admin/account.php?"
                    style="width:150px; background-color:#f77042; color:white; font-weight:bold">Cancel</a>
            </div>
        </div>

        <div class="footer-style card-footer footer-copyright text-center py-3 mt-0">
            © 2020 Copyright: ChristianPDaohog
        </div>

    </div>

</body>

<?php include '../includes/templates/footer.inc.php';?>
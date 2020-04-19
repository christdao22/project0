<link rel="stylesheet" href="../css/main.css" type="text/css" />
<title>Register</title>
</head>

<?php 
    include '../utilities/dbconnect.util.php';
    include '../utilities/validation.util.php'; 
    include '../transactions/register.val.php'; 
?>

<body class="jumbotron jumbotron-fluid body-size col-lg-4">
    <div class="container">
        <div class="head p-3">
            <h4 class="m-0 text-center" style="color:white">Create My Account</h4>
        </div>

        <div class="card-body" style="background-color:white">
            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">

                <div class="form-group text-left">
                    <label for="username">Username</label>
                    <input class="form-control" name="username" type="text" placeholder="Username"
                        value="<?PHP if(isset($_POST['username'])) {echo htmlspecialchars(trim($_POST['username']));}?>"
                        required <?php if ($unErrors != 0) {echo 'style="border:2px solid red;"';}?>>
                    <?php if ($unErrors != 0) {echo "<p class='m-2'> <font color=red><i class='fas fa-exclamation-circle'></i> ".$err_array[$unErrors-1]."</font> </p>";}?>
                </div>


                <div class="form-group text-left">
                    <label for="password">Password</label>
                    <input class="form-control" name="password" type="password" placeholder="Password" required
                        <?php if ($passErrors != 0) {echo 'style="border:2px solid red;"';}?>>
                    <?php if ($passErrors != 0) {echo "<p class='m-2'> <font color=red><i class='fas fa-exclamation-circle'></i> ".$err_array[$passErrors-1]."</font> </p>";}?>
                </div>


                <div class="form-group text-left">
                    <label for="repass">Retype Password</label>
                    <input class="form-control" name="repass" type="password" placeholder="Retype Password" required
                        <?php if ($passErrors != 0) {echo 'style="border:2px solid red;"';}?>>
                </div>


                <div class="form-group">
                    <button class="btn form-control" name='submit' style="background-color:#FB8122; color:white"
                        type='submit'>Create Account</button>
                </div>
            </form>
            <div class="form-group" style=" text-align:center;">
                <a class="btn w-100" href="../" style="width:150px; background-color:#1D2228; color:white;">Cancel</a>
            </div>
        </div>

        <div class="footer-style card-footer footer-copyright text-center py-3">
            © 2020 Copyright: ChristianPDaohog
        </div>
    </div>
</body>
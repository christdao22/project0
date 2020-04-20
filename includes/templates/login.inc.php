<link rel="stylesheet" href="css/main.css" type="text/css" />
<title>Login</title>
</head>

<body class="jumbotron jumbotron-fluid body-size col-lg-4">
    <div class="container">
        <div class="head p-3">
            <h4 class="m-0 text-center" style="color:white">Student Information System</h4>
        </div>

        <div class="card-body" style="background-color:white">
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method='POST'>
                <label style="display:block; font-size:15px;">Enter your username and password.</label>

                <?php 
                    include 'utilities/dbconnect.util.php';
                    include 'transactions/login.val.php';
                ?>

                <div class="form-group text-left">
                    <label for="username">Username</label>
                    <input class="form-control" name="username" type="text" placeholder="Username">
                </div>
                <div class="form-group text-left">
                    <label for="password">Password</label>
                    <input class="form-control" name="password" type="password" placeholder="Password">
                </div>
                <div class="mb-3">
                    <div class="form-group" style="display:inline-block; float:left">
                        <input type="checkbox">
                        <label class="text-left ml-1" for="">Remember me?</label>
                    </div>
                    <div style="display:inline-block; float:right">
                        <a href="#">Forgot Password?</a>
                    </div>
                </div>

                <div class="form-group">
                    <button class="btn form-control" name='submit'
                        style="background-color:#FB8122; color:white">Login</button>
                </div>
            </form>
            
            <div class="form-group" style=" text-align:center;">
                <a class="btn w-100" href="register/" style="width:150px; background-color:#1D2228; color:white;">Create
                    Account</a>
            </div>
        </div>

        <div class="footer-style card-footer footer-copyright text-center py-3 mt-0">
            © 2020 Copyright: ChristianPDaohog
        </div>
    </div>
</body>
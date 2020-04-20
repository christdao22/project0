<link rel="stylesheet" href="../css/main.css" type="text/css" />
<title>Success</title>
</head>

<body class="jumbotron jumbotron-fluid body-size col-lg-4">
    <div class="container">
        <div class="head p-3">
            <h4 class="m-0 text-center" style="color:white">Congratulations</h4>
        </div>


         <div class="card-body" style="background-color:white; text-align:center">
            <div class="m-5">
                <i class="far fa-check-circle image_icon" style="color:#155724; font-size:10em!important;"></i>
            </div>

            <div class="alert alert-success" role="alert" style="margin:auto">
                <strong class="">You have succesfully registered!</strong>
            </div>
            <div class=" m-3 " style=" text-align:center; margin:auto; ">
                <?php 
                    session_start(); 
                    unset($_SESSION['username']);
                    unset($_SESSION['password']);
                    unset($_SESSION['usertype']);
                    unset($_SESSION['actionType']);
                    unset($_SESSION['profile_pic']);
                ?>
                <a class="btn" href="../"
                    style="width:150px; background-color:#f77042; color:white; font-weight:bold;">Login</a>
            </div>
        </div>
    </div>
</body>
<link rel="stylesheet" href="../css/main.css" type="text/css" />
<title>Account</title>
</head>

<?php 
    include '../utilities/dbconnect.util.php'; 
    include '../utilities/image_validation.util.php';
    include '../transactions/upload.val.php'; 
?>
 
<body class="jumbotron jumbotron-fluid body-size col-lg-4">
    <div class="container">
        <div class="head p-3">
            <h4 class="m-0 text-center" style="color:white">Upload Profile</h4>
        </div>

        <div class="card-body" style="background-color:white">

            <a class="btn btn-secondary" href="form.php?user=<?php echo $_SESSION['username']; ?>" style="float:right; width:90px" <?php if($_SESSION['actionType'] == 1){echo "hidden";} ?>>Skip</a>
            <div class="p-3 jumbotron"
                style="width:150px; height:160px; margin:40px auto 20px auto;  border-radius: 50%; text-align:center">
                <i class="fas fa-user" style="color:black; font-size:7em!important;"></i>

            </div>
            <?php   
                if($error != 0 ){
                    echo "<div class='alert alert-danger' role='alert'>
                    <i class='fas fa-exclamation-circle'></i>".$error_image_array[$error-1]." *</div>";
                }
            ?>
            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data">
                <div class="form-group input-group px-2 py-2 rounded-pill bg-white border"
                    <?php if($error!=0){echo 'style="border:2px solid red"';} ?>>
                    <input type="file" class="form-control border-0" name="imageToUpload">
                </div>

                <div class="form-group">
                    <button class="btn form-control" style="background-color:#FB8122; color:white"
                        type="submit">Upload</button>
                </div>
            </form>

            <div class="form-group mb-2" style=" text-align:center;">
                <a href="<?php if($_SESSION['actionType'] == 0){echo "index.php";}else{echo "../".$_SESSION['directory']."/account.php";} ?>" class="btn w-100" style="width:150px; background-color:#1D2228; color:white;">Back</a>
            </div>

        </div>

        <div class="footer-style card-footer footer-copyright text-center py-3 mt-0">
            © 2020 Copyright: ChristianPDaohog
        </div>
    </div>
</body>
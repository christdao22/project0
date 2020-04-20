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
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
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


    <!-- ************************************************** -->
    <div class="card-body con" style="background-color:white">
        <div class="row mx-md-n1 main">
            <div class="col-lg-3 p-3 ml-auto border h-50" style="text-align:center;">
                <?php  
                    include '../transactions/user_fetch_data.php';
                    include '../includes/templates/sidebar.inc.php';
                ?>
            </div>

            <div class="col-lg-8 p-3 border ml-auto mr-auto">
                <h1>Welcome Back!</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero aut aliquid maxime, unde consequatur
                    quas aspernatur molestiae esse doloribus provident reiciendis nobis, vero facere quam, optio maiores
                    minima quae? Quibusdam?</p>

                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti aliquid debitis voluptatum, eos
                    odio, adipisci facilis assumenda recusandae consectetur a, molestias dolores? Ex saepe odit maiores
                    quos incidunt. Eligendi, et?</p>
            </div>

        </div>

    </div>

    <footer class="footer-style card-footer footer-copyright text-center">
        © 2020 Copyright: ChristianPDaohog
    </footer>

</body>
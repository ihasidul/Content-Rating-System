<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.21/sp-1.1.0/datatables.min.css" />

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.21/sp-1.1.0/datatables.min.js"></script>
    <!--<script src="../includes/AdminTables.js"></script> -->
    <link rel="stylesheet" href="../css/userView.css">


</head>

<body style="background-color:rgba(255, 255, 255, 0) ">
    <header>
        <nav class="navbar sticky-top navbar-expand-lg navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Content-Rating-System</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ml-auto">
                    <li class="nav-item ml-auto mx-sm-5">
                        <form class="form-inline my-1 my-lg-0">
                            <input id="search" class="form-control mr-sm-3" type="search" placeholder="Search" aria-label="Search">

                        </form>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item text-white pt-1 mr-2">
                        <h4><?php echo $_SESSION["id"]; ?></h4>
                    </li>
                    <li class="nav-item active">
                        <a class="btn btn-primary mr-3" href="../LoginController/logout">Logout<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>


    <div class="h-100">
        <div class="row h-100 ">
            <div class="row h-100 ml-3 mr-2 col-md-2  mt-0" id="sidebar" style="background-color: rgba(128, 240, 147, 0)  ;">
                <div class="col " align="center">
                    <a name="watch_list" id="side_links" class="m-3 mt-5  p-2 btn btn-block btn-light">Watch list </a><br>
                    <a name="profile" id="side_links" class="m-3 p-2 btn btn-block btn-light">Profile</a><br>
                </div>
            </div>
            <div class="col-md-8   overflow-auto" style="height: 100%;">

                <h2> New Movies</h2>
                <MARQUEE SCROLLDELAY=50>
                    <a href="http://localhost:8080/Content-Rating-System/public/ContentController/content/<?= 'stupid' ?>" target="__blank"> <img src="../resources/poster/1.jpg" height="300px" width="200px"> </a>
                    <a href="http://localhost:8080/Content-Rating-System/public/ContentController/content/<?= 'stupid   ' ?>" target="__blank"> <img src="../resources/poster/<?= 'phpArray' ?>" height="300px" width="200px"></a>
                    <a href="http://localhost:8080/Content-Rating-System/public/ContentController/content/<?= 'stupid' ?>" target="__blank"> <img src="../resources/poster/3.jpg" height="300px" width="200px"> </a>
                    <a href="http://localhost:8080/Content-Rating-System/public/ContentController/content/<?= 'stupid' ?>" target="__blank"> <img src="../resources/poster/4.jpg" height="300px" width="200px"> </a>
                    <a href="http://localhost:8080/Content-Rating-System/public/ContentController/content/<?= 'stupid' ?>" target="__blank"> <img src="../../../public/resources/poster/5.jpg" height="300px" width="200px"> </a>
                </marquee>
                <br>
                <h2> New Natoks</h2>
                <marquee behavior="ALTERNATE" direction="left">
                    <a href="http://localhost/bach.php"><img src="../../../public/resources/poster/1.jpg" height="300px" width="200px"> </a>
                    <a href="http://localhost/vhalobasha101.php"> <img src="../../../public/resources/poster/2.jpg" height="300px" width="200px"> </a>
                    <a href="http://localhost/bokhate.php"><img src="../../../public/resources/poster/3.jpg" height="300px" width="200px"> </a>
                    <a href="http://localhost/lol.php"><img src="../../../public/resources/poster/4.jpg" height="300px" width="200px"></a>
                </marquee>
                <br>
                <h2> New Tv Series</h2>
                <marquee behavior="ALTERNATE" direction="left">
                    <a href="http://localhost/bach.php"><img src="../../../public/resources/poster/1.jpg" height="300px" width="200px"> </a>
                    <a href="http://localhost/vhalobasha101.php"> <img src="../../../public/resources/poster/2.jpg" height="300px" width="200px"> </a>
                    <a href="http://localhost/bokhate.php"><img src="../../../public/resources/poster/3.jpg" height="300px" width="200px"> </a>
                    <a href="http://localhost/lol.php"><img src="../../../public/resources/poster/4.jpg" height="300px" width="200px"></a>
                </marquee>
                <br>
                <h2> New Short Films</h2>
                <marquee behavior="ALTERNATE" direction="left">
                    <a href="http://localhost/bach.php"><img src="../../../public/resources/poster/1.jpg" height="300px" width="200px"> </a>
                    <a href="http://localhost/vhalobasha101.php"> <img src="../../../public/resources/poster/2.jpg" height="300px" width="200px"> </a>
                    <a href="http://localhost/bokhate.php"><img src="../../../public/resources/poster/3.jpg" height="300px" width="200px"> </a>
                    <a href="http://localhost/lol.php"><img src="../../../public/resources/poster/4.jpg" height="300px" width="200px"></a>
                </marquee>
                <br>
                <h2> New Video Contents</h2>
                <marquee behavior="ALTERNATE" direction="left">
                    <a href="http://localhost/bach.php"><img src="../../../public/resources/poster/1.jpg" height="300px" width="200px"> </a>
                    <a href="http://localhost/vhalobasha101.php"> <img src="../../../public/resources/poster/2.jpg" height="300px" width="200px"> </a>
                    <a href="http://localhost/bokhate.php"><img src="../../../public/resources/poster/3.jpg" height="300px" width="200px"> </a>
                    <a href="http://localhost/lol.php"><img src="../../../public/resources/poster/4.jpg" height="300px" width="200px"></a>
                </marquee>

            </div>

        </div>
    </div>

    </div>

</body>

<script>


</script>

</html>
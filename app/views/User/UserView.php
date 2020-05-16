<?php
// print_r($data['TopFiveMovies']['ID']);

$topMovies = $data["TopFiveMovies"];
$topNatoks = $data["TopFiveNatoks"];
$topTvSerieses = $data["TopFiveTvSerieses"];
$topVideoContents = $data["TopFiveVideoContents"];
//var_dump($topMovies);
// $ids = [];
// $posters = [];
// foreach ($topMovies as $movie) {
//     var_dump($movie);
//     // echo "<br>";
//     // echo "MOVIE ID: " . $movie["ID"];
//     // echo "POSHTAR: " . $movie["PosterName"];
//     // echo "<br>";
//     $ids[] = $movie["ID"];
//     $posters[] = $movie["PosterName"];
// }


?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>User Landing Page</title>
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

                <h2> Top Movies</h2>
                <MARQUEE SCROLLDELAY=50>
                    <a href="ContentController/content/<?= $topMovies[0]['ID'] ?>" target="__blank"> <img src="../resources/poster/<?php echo $topMovies[0]['PosterName'] ?>" height="300px" width="200px"> </a>
                    <a href="ContentController/content/<?= $topMovies[1]['ID'] ?>" target="__blank"> <img src="../resources/poster/<?php echo $topMovies[1]['PosterName'] ?>" height="300px" width="200px"></a>
                    <a href="ContentController/content/<?= $topMovies[2]['ID'] ?>" target="__blank"> <img src="../resources/poster/<?php echo $topMovies[2]['PosterName'] ?>" height="300px" width="200px"> </a>
                    <a href="ContentController/content/<?= $topMovies[3]['ID'] ?>" target="__blank"> <img src="../resources/poster/<?php echo $topMovies[3]['PosterName'] ?>" height="300px" width="200px"> </a>
                    <a href="ContentController/content/<?= $topMovies[4]['ID'] ?>" target="__blank"> <img src="../resources/poster/<?php echo $topMovies[4]['PosterName'] ?>" height="300px" width="200px"> </a>
                </marquee>
                <br>
                <h2> Top Natoks</h2>
                <MARQUEE SCROLLDELAY=50>
                    <a href="ContentController/content/<?= $topMovies[0]['ID'] ?>" target="__blank"> <img src="../resources/poster/<?php echo $topNatoks[0]['PosterName'] ?>" height="300px" width="200px"> </a>
                    <a href="ContentController/content/<?= $topMovies[1]['ID'] ?>" target="__blank"> <img src="../resources/poster/<?php echo $topNatoks[1]['PosterName'] ?>" height="300px" width="200px"></a>
                    <a href="ContentController/content/<?= $topMovies[2]['ID'] ?>" target="__blank"> <img src="../resources/poster/<?php echo $topNatoks[2]['PosterName'] ?>" height="300px" width="200px"> </a>
                    <a href="ContentController/content/<?= $topMovies[3]['ID'] ?>" target="__blank"> <img src="../resources/poster/<?php echo $topNatoks[3]['PosterName'] ?>" height="300px" width="200px"> </a>
                    <a href="ContentController/content/<?= $topMovies[4]['ID'] ?>" target="__blank"> <img src="../resources/poster/<?php echo $topNatoks[4]['PosterName'] ?>" height="300px" width="200px"> </a>
                </marquee>
                <br>
                <h2> Top Tv Series</h2>
                <<MARQUEE SCROLLDELAY=50>
                    <a href="ContentController/content/<?= $topMovies[0]['ID'] ?>" target="__blank"> <img src="../resources/poster/<?php echo $topTvSerieses[0]['PosterName'] ?>" height="300px" width="200px"> </a>
                    <a href="ContentController/content/<?= $topMovies[1]['ID'] ?>" target="__blank"> <img src="../resources/poster/<?php echo $topTvSerieses[1]['PosterName'] ?>" height="300px" width="200px"></a>
                    <a href="ContentController/content/<?= $topMovies[2]['ID'] ?>" target="__blank"> <img src="../resources/poster/<?php echo $topTvSerieses[2]['PosterName'] ?>" height="300px" width="200px"> </a>
                    <a href="ContentController/content/<?= $topMovies[3]['ID'] ?>" target="__blank"> <img src="../resources/poster/<?php echo $topTvSerieses[3]['PosterName'] ?>" height="300px" width="200px"> </a>
                    <a href="ContentController/content/<?= $topMovies[4]['ID'] ?>" target="__blank"> <img src="../resources/poster/<?php echo $topTvSerieses[4]['PosterName'] ?>" height="300px" width="200px"> </a>
                    </marquee>
                    <br>
                    <h2> Top Video Contents</h2>
                    <MARQUEE SCROLLDELAY=50>
                        <a href="ContentController/content/<?= $topMovies[0]['ID'] ?>" target="__blank"> <img src="../resources/poster/<?php echo $topVideoContents[0]['PosterName'] ?>" height="300px" width="200px"> </a>
                        <a href="ContentController/content/<?= $topMovies[1]['ID'] ?>" target="__blank"> <img src="../resources/poster/<?php echo $topVideoContents[1]['PosterName'] ?>" height="300px" width="200px"></a>
                        <a href="ContentController/content/<?= $topMovies[2]['ID'] ?>" target="__blank"> <img src="../resources/poster/<?php echo $topVideoContents[2]['PosterName'] ?>" height="300px" width="200px"> </a>
                        <a href="ContentController/content/<?= $topMovies[3]['ID'] ?>" target="__blank"> <img src="../resources/poster/<?php echo $topVideoContents[3]['PosterName'] ?>" height="300px" width="200px"> </a>
                        <a href="ContentController/content/<?= $topMovies[4]['ID'] ?>" target="__blank"> <img src="../resources/poster/<?php echo $topVideoContents[4]['PosterName'] ?>" height="300px" width="200px"> </a>
                    </marquee>

            </div>

        </div>
    </div>

    </div>

</body>

<script>


</script>

</html>
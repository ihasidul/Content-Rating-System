<?php
// print_r($data['TopFiveMovies']['ID']);

$topMovies = $data["TopFiveMovies"];
$topNatoks = $data["TopFiveNatoks"];
$topTvSerieses = $data["TopFiveTvSerieses"];
$topVideoContents = $data["TopFiveVideoContents"];
$movies = $data["Movies"];

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
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>



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
                            <select id="movies_search" name="movies[]" onchange="redirectMovie(this.value)">
                                <option value="NONE" disabled selected>Search...</option>
                                <?php
                                foreach ($movies as $movie) {
                                    echo '<option value=' . $movie["ID"] . '>' . $movie["MovieName"] . '</option>';
                                }
                                ?>
                            </select>
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
                    <a name="watch_list" href="../UserController/index" id="side_links" class="m-3 mt-5  p-2 btn btn-block btn-light">Home</a><br>
                    <a name="watch_list" href="../UserController/watchlistLoader" id="side_links" class="m-3 m-3  p-2 btn btn-block btn-light">Watch list </a><br>
                    <!-- <a name="profile" href="" id="side_links" class="m-3 p-2 btn btn-block btn-light">Profile</a><br> -->
                </div>
            </div>
            <div class="col-md-8 overflow-auto" style="height: 100%;">

                <h2> Top Movies</h2>
                <MARQUEE SCROLLDELAY=5>
                    <a href="../ContentController/content/<?= $topMovies[0]['ID'] ?>" target="_self"> <img src="../resources/poster/<?php echo $topMovies[0]['PosterName'] ?>" height="300px" width="200px"> </a>
                    <a href="../ContentController/content/<?= $topMovies[1]['ID'] ?>" target="_self"> <img src="../resources/poster/<?php echo $topMovies[1]['PosterName'] ?>" height="300px" width="200px"></a>
                    <a href="../ContentController/content/<?= $topMovies[2]['ID'] ?>" target="_self"> <img src="../resources/poster/<?php echo $topMovies[2]['PosterName'] ?>" height="300px" width="200px"> </a>
                    <a href="../ContentController/content/<?= $topMovies[3]['ID'] ?>" target="_self"> <img src="../resources/poster/<?php echo $topMovies[3]['PosterName'] ?>" height="300px" width="200px"> </a>
                    <a href="../ContentController/content/<?= $topMovies[4]['ID'] ?>" target="_self"> <img src="../resources/poster/<?php echo $topMovies[4]['PosterName'] ?>" height="300px" width="200px"> </a>
                </marquee>
                <br>
                <h2> Top Natoks</h2>
                <MARQUEE SCROLLDELAY=10>
                    <a href="../ContentController/content/<?= $topNatoks[0]['ID'] ?>" target="_self"> <img src="../resources/poster/<?php echo $topNatoks[0]['PosterName'] ?>" height="300px" width="200px"> </a>
                    <a href="../ContentController/content/<?= $topNatoks[1]['ID'] ?>" target="_self"> <img src="../resources/poster/<?php echo $topNatoks[1]['PosterName'] ?>" height="300px" width="200px"></a>
                    <a href="../ContentController/content/<?= $topNatoks[2]['ID'] ?>" target="_self"> <img src="../resources/poster/<?php echo $topNatoks[2]['PosterName'] ?>" height="300px" width="200px"> </a>
                    <a href="../ContentController/content/<?= $topNatoks[3]['ID'] ?>" target="_self"> <img src="../resources/poster/<?php echo $topNatoks[3]['PosterName'] ?>" height="300px" width="200px"> </a>
                    <a href="../ContentController/content/<?= $topNatoks[4]['ID'] ?>" target="_self"> <img src="../resources/poster/<?php echo $topNatoks[4]['PosterName'] ?>" height="300px" width="200px"> </a>
                </marquee>
                <br>
                <h2> Top Tv Series</h2>
                <<MARQUEE SCROLLDELAY=30>
                    <a href="../ContentController/content/<?= $topTvSerieses[0]['ID'] ?>" target="_self"> <img src="../resources/poster/<?php echo $topTvSerieses[0]['PosterName'] ?>" height="300px" width="200px"> </a>
                    <a href="../ContentController/content/<?= $topTvSerieses[1]['ID'] ?>" target="_self"> <img src="../resources/poster/<?php echo $topTvSerieses[1]['PosterName'] ?>" height="300px" width="200px"></a>
                    <a href="../ContentController/content/<?= $topTvSerieses[2]['ID'] ?>" target="_self"> <img src="../resources/poster/<?php echo $topTvSerieses[2]['PosterName'] ?>" height="300px" width="200px"> </a>
                    <a href="../ContentController/content/<?= $topTvSerieses[3]['ID'] ?>" target="_self"> <img src="../resources/poster/<?php echo $topTvSerieses[3]['PosterName'] ?>" height="300px" width="200px"> </a>
                    <a href="../ContentController/content/<?= $topTvSerieses[4]['ID'] ?>" target="_self"> <img src="../resources/poster/<?php echo $topTvSerieses[4]['PosterName'] ?>" height="300px" width="200px"> </a>
                    </marquee>
                    <br>
                    <h2> Top Video Contents</h2>
                    <MARQUEE SCROLLDELAY=10>
                        <a href="../ContentController/content/<?= $topVideoContents[0]['ID'] ?>" target="_self"> <img src="../resources/poster/<?php echo $topVideoContents[0]['PosterName'] ?>" height="300px" width="200px"> </a>
                        <a href="../ContentController/content/<?= $topVideoContents[1]['ID'] ?>" target="_self"> <img src="../resources/poster/<?php echo $topVideoContents[1]['PosterName'] ?>" height="300px" width="200px"></a>
                        <a href="../ContentController/content/<?= $topVideoContents[2]['ID'] ?>" target="_self"> <img src="../resources/poster/<?php echo $topVideoContents[2]['PosterName'] ?>" height="300px" width="200px"> </a>
                        <a href="../ContentController/content/<?= $topVideoContents[3]['ID'] ?>" target="_self"> <img src="../resources/poster/<?php echo $topVideoContents[3]['PosterName'] ?>" height="300px" width="200px"> </a>
                        <a href="../ContentController/content/<?= $topVideoContents[4]['ID'] ?>" target="_self"> <img src="../resources/poster/<?php echo $topVideoContents[4]['PosterName'] ?>" height="300px" width="200px"> </a>
                    </marquee>
                    <div id="first_time" class="modal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">First Time Login</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h1>This is Your ID: <?= $_SESSION["id"]; ?></h1>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>

        </div>
    </div>

    </div>

    <?php
    if ($data["First"] == "First")
        echo '<script>$(document).ready(function(){$("#first_time").modal("show");});</script>';
    ?>

</body>

<script>
    $(document).ready(function() {
        $('#movies_search').select2();
    });

    function redirectMovie(contentId) {
        window.location.href = `./../ContentController/content/${contentId}`;
    }
</script>

</html>
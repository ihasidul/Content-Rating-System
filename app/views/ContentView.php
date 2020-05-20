<?php
$content = $data["Content"];
$comments = $data["Comments"];
// echo $comments[0]["Comments"];
$movies = $data["Movies"];
$disabled = "";
$user_comment = "Enter a comment";
$user_rating = 0;

if (empty($comments)) {
    echo "No Comments found";
} else {
    foreach ($comments as $comment) {
        if ($comment["UserId"] == $_SESSION["id"]) {
            // echo "This user has already commented";
            $disabled = "disabled";
            $user_comment = $comment["comment"];
            $user_rating = $comment["Rating"];
        }
    }
}

?>



<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Content Page</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.21/sp-1.1.0/datatables.min.css" />

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.21/sp-1.1.0/datatables.min.js"></script>
    <!--<script src="../includes/AdminTables.js"></script> -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

    <style>
        .back-to-top {
            cursor: pointer;
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: none;
        }

        html,
        body {
            /* background-image: url("../../../public/resources/back2.jpg"); */
            height: 100%;
        }

        .dataTables_wrapper .dataTables_filter {
            float: right;
            text-align: right;
            visibility: hidden;
        }

        h2 {
            color: rgb(248, 245, 245);
            background-color: rgb(91, 92, 91);
        }

        #side_links {
            background-color: rgb(91, 92, 91);
            color: wheat;
        }

        .sidebar {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
        }

        .star-rating {
            line-height: 32px;
            font-size: 1.25em;
        }

        .star-rating .fa-star {
            color: green;
        }

        /* #previous_comments {
            color: white;
        } */
    </style>

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
                            <!-- <input id="search" class="form-control mr-sm-3" type="search" placeholder="Search" aria-label="Search"> -->
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
                        <a class="btn btn-primary mr-3" href="../../LoginController/logout">Logout<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>


    <div class="h-100">
        <div class="row h-100">
            <div class="row h-100 ml-3 mr-2 col-md-2  mt-0" id="sidebar" style="background-color: rgb(38,35,53)  ;">
                <div class="col " align="center">
                    <a name="watch_list" href="../../UserController/index" id="side_links" class="m-3 mt-5  p-2 btn btn-block btn-light">Home</a><br>

                    <a name="watch_list" href="../../UserController/watchlistLoader" id="side_links" class="m-3  p-2 btn btn-block btn-light">Watch list
                    </a><br>
                    <!-- <a name="profile" id="side_links" class="m-3 p-2 btn btn-block btn-light">Profile</a><br> -->
                </div>
            </div>
            <div class="col-md-8 overflow-auto" style="height: 100%;">
                <div class="w-100 h-100">
                    <div class="row">
                        <div class="col-xs-auto">
                            <img class="mt-5 p-2" src="../../resources/poster/<?php echo $content[0]['PosterName']; ?>" alt="" height="300px" width="200px">
                        </div>

                        <div class="col-xl-auto">
                            <div class="">
                                <h1 class="display"><?php echo $content[0]['Name']; ?></h1>
                                <div class="col-md-5 float-right">

                                    <h5 class="display">User's Rating:<?php echo $content[0]['Rating']; ?>/10</h5>
                                    <h5 class="display">Critic's Rating:<?php echo $content[0]['CriticRating']; ?>/10</h5>
                                </div>
                                <div class="ml-2">
                                    <h6>Genre : <?php echo $content[0]['Genre']; ?></h6>
                                    <h6>Category: <?php echo $content[0]['Type']; ?></h6>
                                    <h6>Release:<?php echo $content[0]['Date']; ?></h6>
                                </div>
                                <iframe width="560" height="315" src="http://www.youtube.com/embed/<?php
                                                                                                    $url = $content[0]["Link"];
                                                                                                    //used regex to get the pattern
                                                                                                    preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
                                                                                                    $youtube_id = $match[1];
                                                                                                    echo $youtube_id; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                <div>
                                    <form name="comment_form" action="../submitUserRatingAndComment" onsubmit="return validateForm()" method="post">
                                        <input type="hidden" name="content_id" value="<?= $data["ContentID"]; ?>">
                                        <input type="hidden" name="content_name" value="<?= $content[0]["Name"]; ?>">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <h5>Rate:</h5>
                                                    <div class="star-rating">
                                                        <span class="fa fa-star-o" data-rating="1"></span>
                                                        <span class="fa fa-star-o" data-rating="2"></span>
                                                        <span class="fa fa-star-o" data-rating="3"></span>
                                                        <span class="fa fa-star-o" data-rating="4"></span>
                                                        <span class="fa fa-star-o" data-rating="5"></span>
                                                        <span class="fa fa-star-o" data-rating="6"></span>
                                                        <span class="fa fa-star-o" data-rating="7"></span>
                                                        <span class="fa fa-star-o" data-rating="8"></span>
                                                        <span class="fa fa-star-o" data-rating="9"></span>
                                                        <span class="fa fa-star-o" data-rating="10"></span>
                                                        <input type="hidden" name="rating" class="rating-value" value="<?= $user_rating; ?>" <?= $disabled ?>>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row p-3">
                                            <h6 class="mr-2">Comment: </h6>

                                            <textarea name="comment" id="" cols="40" rows="2" <?= $disabled ?>></textarea>
                                            <button type="submit" class="btn ml-2 btn-primary" <?= $disabled ?>>Post Comment</button>

                                        </div>
                                    </form>

                                    <div class=" p-3" id="previous_comments">
                                        <h5 class="mr-2">Previous Comments: </h5>
                                        <?php

                                        // $comments = $data["Comments"];
                                        // for ($i = 0, $len = count($comments[]["Comments"]); $i < $len; $i++) {
                                        //     echo '
                                        //               <h5>' . $comments[$i]["Comments"] . '</h5>    
                                        //             ';
                                        // }
                                        if (empty($comments)) {
                                            echo "No Comments found";
                                        } else {
                                            foreach ($comments as $comment) {
                                                echo '<h5 class="float-right mr-3 mt-2">' . $comment["Rating"] . "/10" . '</h5>';
                                                if ($comment["UserId"] == $_SESSION["id"])
                                                    echo '<div class="ml-3 mb-1 border border-danger bg-warning">';
                                                else
                                                    echo '<div class="ml-3 mb-1 border border-info">';
                                                echo '<h3>' . $comment["UserId"] . '</h3>';
                                                echo '<h5 class="ml-3">' . $comment["comment"] . '</h5>';
                                                echo '</div>';
                                                //var_dump($comment);
                                            }
                                        }
                                        ?>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

<script>
    function redirectMovie(contentId) {
        window.location.href = `./${contentId}`;
    }
    var $star_rating = $('.star-rating .fa');

    var SetRatingStar = function() {
        return $star_rating.each(function() {
            if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
                return $(this).removeClass('fa-star-o').addClass('fa-star');
            } else {
                return $(this).removeClass('fa-star').addClass('fa-star-o');
            }
        });
    };

    $star_rating.on('click', function() {
        $star_rating.siblings('input.rating-value').val($(this).data('rating'));
        return SetRatingStar();
    });

    SetRatingStar();
    $(document).ready(function() {

    });

    $(document).ready(function() {
        $('#movies_search').select2();
    });

    function validateForm() {
        var comment = document.forms["comment_form"]["comment"].value;
        var rating = document.forms["comment_form"]["rating"].value;
        if (comment == "" || rating == 0) {
            alert("Please submit a comment with rating.");
            return false;
        }
    }
</script>

</html>
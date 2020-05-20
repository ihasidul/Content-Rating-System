<?php
//var_dump($data);
$WatchList = $data["Watchlist"];
// echo ($WatchList)

?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Watch List</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.21/sp-1.1.0/datatables.min.css" />

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.21/sp-1.1.0/datatables.min.js"></script>
    <!--<script src="../includes/AdminTables.js"></script> -->
    <link rel="stylesheet" href="../css/userView.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.21/sp-1.1.0/datatables.min.css" />

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.21/sp-1.1.0/datatables.min.js"></script>

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
            height: 100%;
        }

        .dataTables_wrapper .dataTables_filter {
            float: right;
            text-align: right;
            visibility: hidden;
        }
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
                    <a name="home" href="../UserController/index" id="side_links" class="m-3 mt-5  p-2 btn btn-block btn-light">Home</a><br>
                    <a name="watch_list" href="#" class="m-3 m-3  p-2 btn btn-block btn-light">Watch list </a><br>
                    <!-- <a name="profile" href="" id="side_links" class="m-3 p-2 btn btn-block btn-light">Profile</a><br> -->
                </div>
            </div>
            <div class="row mr-auto ml-2 col-md-8">


                <!-- here is content list -->
                <div name="important_tables" class="row mt-5" id="watchList_table_div">
                    <div>
                        <h2 style="background-color: rgba(255, 255, 255, 0)">Watch List</h2><br>
                    </div>

                    <table id="watch_list_table" class="table table-responsive table-body table-striped  table-bordered" cellspacing="0">

                        <thead>
                            <tr>
                                <th>Content Name</th>
                                <th>Your Rating</th>
                                <th>Your Comment</th>
                                <!-- Have not done the json part -->
                            </tr>
                        </thead>

                        <tbody>
                            <!--content table goes here table goes here. -->

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    </div>

    <!-- <?php
            // if ($data["First"] == "First")
            //     echo '<script>$(document).ready(function(){$("#first_time").modal("show");});</script>';
            ?> -->

</body>

<script>
    $(document).ready(function() {
        for (var i = 0; i < document.getElementsByName('important_tables').length; i++) {
            document.getElementsByName('important_tables')[i].style.display = "none";
        }
        document.getElementById('watchList_table_div').style.display = "inline";
    });
    var tableWatchlist = $('#watch_list_table').DataTable({
        // "ajax": {
        //     "url": "",
        // },
        "data": <?php echo json_encode($WatchList); ?>,
        "autoWidth": false,
        "columnDefs": [{
                "width": "32%",
                "targets": [0, 1, 2],


            },

        ],
        "columns": [{
            "data": "Content Name"
        }, {
            "data": "Your Rating"
        }, {
            "data": "Your Comment"
        }, ],
    });
    $(document).ready(function() {
        $('#movies_search').select2();
    });

    function redirectMovie(contentId) {
        window.location.href = `./../ContentController/content/${contentId}`;
    }
    //this is for searching 
    $('#search').on('keyup', function() {
        tableWatchlist.search(this.value).draw();

    });
</script>

</html>
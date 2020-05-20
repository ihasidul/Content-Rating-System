<?php
$ContentList = $data["ContentsOfThisCC"];
// var_dump($ContentList);
// var_dump(json_encode($ContentList));
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Content Creator Dashboard</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.21/sp-1.1.0/datatables.min.css" />

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.21/sp-1.1.0/datatables.min.js"></script>
    <!--<script src="../includes/AdminTables.js"></script> -->

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
    <script>

    </script>
</head>

<body style="background-color:#E4F1F2 ">
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
        <!-- <a href="../LoginController/loadSignUp" class="btn btn-primary">Sign Up Page</a> -->
        <div class="row h-100">
            <div class=" row h-100 ml-3 mr-2 col-md-2  mt-0" style="background-color: #4B94AF;">
                <div class="row " id="totalUserData">

                </div>

                <div class="col " align="center">
                    <a name="content_table_div" href="../ContentCreatorController/index" class="m-3 p-2 btn btn-block btn-light" onclick="toggleTable(this.name);">CONTENT LIST</a><br>
                    <a name="uploadcontent.php" href="../ContentCreatorController/contentUploadLoader" class="m-3 p-2 btn btn-block btn-light">UPLOAD CONTENT</a><br>
                    <a name=" profile" href="../ContentCreatorController/loadCCProfile" class="m-3 p-2 btn btn-block btn-light">CREATOR'S PROFILE</a><br>

                </div>
            </div>

            <div class="mr-auto ml-2 col-md-8">

                <!-- Here is ContentList Table -->


                <div name="important_tables" class="mt-5" id="content_table_div">

                    <div>
                        <h1 class="display-6">Content List</h2><br>
                    </div>


                    <table id="content_table" class="table table-responsive table-body table-striped table-dark table-bordered" cellspacing="0">

                        <thead>
                            <tr>

                                <th>Content Creator</th>
                                <th>Content Id</th>
                                <th>Content Name</th>
                                <th>Type</th>
                                <th>Genre</th>
                                <th>Poster</th>
                                <th>Cast</th>
                                <th>Date</th>
                                <th>User Rating</th>
                                <th>Critic Rating</th>
                                <th>Link</th>
                                <!-- Have not done the json part -->
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

<script>
    $(document).ready(function() {
        for (var i = 0; i < document.getElementsByName('important_tables').length; i++) {
            document.getElementsByName('important_tables')[i].style.display = "none";
        }
        document.getElementById('content_table_div').style.display = "inline";
    });
    var tableContentList = $('#content_table').DataTable({
        // "ajax": {
        //     "url": "getAllContentByCC/" 
        // },
        "data": <?php echo json_encode($ContentList); ?>,
        "autoWidth": false,
        "columnDefs": [{
            "width": "32%",
            "targets": [0, 1, 2, 3, ]
        }],


        "columns": [{
                "data": "Content Creator"
            },
            {
                "data": "Content Id"
            },
            {
                "data": "Content Name"
            },
            {
                "data": "Type"
            },
            {
                "data": "Genre"
            },
            {
                "data": "Poster"
            },
            {
                "data": "Cast"
            },
            {
                "data": "Date"
            },
            {
                "data": "User Rating"
            },
            {
                "data": "Critic Rating"
            },
            {
                "data": "Link"
            },
        ],
    }, );


    function toggleTable(id) {
        console.log(document.getElementsByName('important_tables'));

        for (var i = 0; i < document.getElementsByName('important_tables').length; i++) {
            document.getElementsByName('important_tables')[i].style.display = "none";
        }
        document.getElementById(id).style.display = "inline";

    }

    $('#search').on('keyup', function() {
        tableContentList.search(this.value).draw();

    });
</script>

</html>
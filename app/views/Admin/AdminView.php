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
                            <button class="btn btn-outline-success my-1 my-sm-0" type="submit">Search</button>
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
        <div class="row h-100">
            <div class=" row h-100 ml-3 mr-2 col-md-2  mt-0" style="background-color: #4B94AF;">
                <div class="row " id="totalUserData">

                    <table id="" class="table table-sm table-borderless table-dark" cellspacing="0" width="100%">
                        <thead>
                            <th>Total Users</th>
                            <th>Total Critics</th>
                            <th>Total ContentCreators</th>
                        </thead>
                        <tbody>
                            <td> <?php
                                    echo $data['totalUser'];
                                    ?></td>
                            <td><?php
                                echo $data['totalCritic'];
                                ?></td>
                            <td><?php
                                echo $data['totalContentCreator'];
                                ?></td>
                        </tbody>

                    </table>
                </div>

                <div class="col" align="center">

                    <button class="m-4 p-2 btn btn-primary">GENERAL USER</button><br>
                    <button class="m-3 p-2 btn btn-primary">CRITICS</button><br>
                    <button class="m-3 p-2 btn btn-primary">CONTENT CREATOR</button><br>
                    <button class="m-3 p-2 btn btn-primary">CONTENT LIST</button><br>


                </div>
            </div>

            <div class="mr-auto ml-2 col-md-8">
                <div class="row mt-5" id="table_div">
                    <h2 class="display-6">General User Dashboard</h2>
                    <table id="general_user_table" class="table table-striped table-dark table-bordered" cellspacing="0" style="width:100%">
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>

                            </tr>
                        </thead>

                        <tbody id="CourseTable">
                            <!-- User table goes here. -->

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

<script>
    var table = $('#general_user_table').DataTable({
        "ajax": {
            "url": "getAllUsers",
        },

        "columns": [{
                "data": "User ID"
            },
            {
                "data": "Name"
            },
            {
                "data": "Email"
            },
            {
                "data": "Phone"
            },
        ],
    }, );
    $('#search').on('keyup', function() {
        table.search(this.value).draw();
    });
</script>

</html>
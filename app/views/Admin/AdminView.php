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

                <div class="col " align="center">

                    <button name="user_table_div" class="m-3 p-2 btn btn-block btn-light" onclick="toggleTable(this.name);">GENERAL USER LIST</button><br>
                    <button name="critic_table_div" class="m-3 p-2 btn btn-block btn-light" onclick="toggleTable(this.name);">CRITICS LIST</button><br>
                    <button name="contentCreator_table_div" class="m-3 p-2 btn btn-block btn-light" onclick="toggleTable(this.name);">CONTENT CREATOR LIST</button><br>
                    <button name="content_table_div" class="m-3 p-2 btn btn-block btn-light" onclick="toggleTable(this.name);">CONTENT LIST</button><br>
                    <!-- <button name="registerCritic_table_div" class="m-3 p-2 btn btn-block btn-light" onclick="toggleTable(this.name);">REGISTER CRITIC</button><br> -->


                </div>
            </div>

            <div class="row-3 mr-auto ml-2 col-md-8">
                <!-- here is user table -->
                <div name="important_tables" class="mt-5" id="user_table_div">

                    <div>
                        <h2 class="display-6">General User List</h2><br>
                    </div>


                    <table id="general_user_table" class="table table-responsive table-body table-striped table-dark table-bordered" cellspacing="0">

                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Delete User</th>

                            </tr>
                        </thead>

                        <tbody id="CourseTable">
                            <!-- User table goes here. -->

                        </tbody>
                    </table>



                </div>
                <!-- Here is Critic table -->
                <div name="important_tables" class="mt-5" id="critic_table_div">

                    <div>
                        <h2 class="display-6">Critic List</h2><br>
                    </div>


                    <table id="critic_table" class="table table-responsive table-body table-striped table-dark table-bordered" cellspacing="0" style="width:100%">

                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Delete User</th>

                            </tr>
                        </thead>

                        <tbody id="CourseTable">
                            <!-- Critic table goes here. -->

                        </tbody>
                    </table>

                </div>

                <!-- Here is Content Creator Table -->
                <div name="important_tables" class="mt-5" id="contentCreator_table_div">

                    <div>
                        <h2 class="display-6">Content Creator List</h2><br>
                    </div>


                    <table id="contentCreator_table" class="table table-responsive table-body table-striped table-dark table-bordered" cellspacing="0">

                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Delete User</th>

                            </tr>
                        </thead>

                        <tbody id="CourseTable">
                            <!-- content creator  table goes here. -->

                        </tbody>
                    </table>
                </div>
                <!-- here is content list -->
                <div name="important_tables" class="mt-5" id="content_table_div">

                    <div>
                        <h2 class="display-6">Content List</h2><br>
                    </div>


                    <table id="content_table" class="table table-responsive table-body table-striped table-dark table-bordered" cellspacing="0">

                        <thead>
                            <tr>

                                <th>Content Creator</th>
                                <th>Id</th>
                                <th>Content Name</th>
                                <th>Type</th>
                                <th>Genre</th>
                                <th>Poster</th>
                                <th>Cast</th>
                                <th>Date</th>
                                <th>User Rating</th>
                                <th>Critic Rating</th>
                                <th>Link</th>
                                <th>Delete Content</th>
                                <!-- Have not done the json part -->
                            </tr>
                        </thead>

                        <tbody id="CourseTable">
                            <!--content table goes here table goes here. -->

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
        document.getElementById('user_table_div').style.display = "inline";
    });
    var tableGU = $('#general_user_table').DataTable({
        "ajax": {
            "url": "getAllUsers",
        },
        "autoWidth": false,
        "columnDefs": [{
                "width": "32%",
                "targets": [0, 1, 2, 3, 4],

            },

        ],


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
            {
                "data": null,
                "defaultContent": `<button  type="button" class="btn btn-danger">Delete</button>`
            },
        ],
    }, );

    var tableCritic = $('#critic_table').DataTable({
        "ajax": {
            "url": "getAllCritic",
        },
        "autoWidth": false,
        "columnDefs": [{
            "width": "32%",
            "targets": [0, 1, 2, 3, 4]
        }],

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
            {
                "data": null,
                "defaultContent": `<button  type="button" class="btn btn-danger">Delete</button>`
            },

        ],
    }, );



    var tableContentCreator = $('#contentCreator_table').DataTable({
        "ajax": {
            "url": "getAllContentCreator",
        },
        "autoWidth": false,
        "columnDefs": [{
            "width": "32%",
            "targets": [0, 1, 2, 3, 4]
        }],


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
            {
                "data": null,
                "defaultContent": `<button  type="button" class="btn btn-danger">Delete</button>`
            },
        ],
    }, );
    var tableContent = $('#content_table').DataTable({
        "ajax": {
            "url": "getAllContent",
        },
        "autoWidth": false,
        "columnDefs": [{
            "width": "32%",
            "targets": [0, 1, 2, 3, 4],

        }],


        "columns": [{
                "data": "Content Creator"
            },
            {
                "data": "Id"
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
            {
                "data": null,
                "defaultContent": `<button  type="button" class="btn btn-danger">Delete</button>`
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

    // this is
    // for searching
    $('#search').on('keyup', function() {
        tableGU.search(this.value).draw();
        tableCritic.search(this.value).draw();
        tableContentCreator.search(this.value).draw();
        tableContent.search(this.value).draw();
        // table.search(this.value).draw();
    });

    //this is for button action on General user table
    $('#general_user_table tbody').on('click', 'button', function() {
        var data = tableGU.row(this).data();
        console.log(data);
        if (data === undefined) {
            data = tableGU.row($(this).parents('tr')).data();
        }
        console.log(data);
        var userId = data["User ID"];

        $.ajax({
            url: "deleteContentFormUserTable/" + userId,
            success: function(result) {
                console.log(result);
                alert("User" + userId + " is deleted");
                location = location;
            }

        });

        console.log(data);
    });
    //this is for delete button on critic table
    $('#critic_table').on('click', 'button', function() {
        var data = tableCritic.row(this).data();
        console.log(data);
        if (data === undefined) {
            data = tableCritic.row($(this).parents('tr')).data();
        }
        console.log(data);
        var userId = data["User ID"];

        $.ajax({
            url: "deleteCriticFromCriticTable/" + userId,
            success: function(result) {
                console.log(result);
                alert("User" + userId + " is deleted");
                location = location;
            }

        });

        console.log(data);
    });

    //this is for delete button on Content Creator  table
    $('#contentCreator_table').on('click', 'button', function() {
        var data = tableContentCreator.row(this).data();
        console.log(data);
        if (data === undefined) {
            data = tableContentCreator.row($(this).parents('tr')).data();
        }
        console.log(data);
        var userId = data["User ID"];

        $.ajax({
            url: "deleteContentCreatorFormContentCreatorTable/" + userId,
            success: function(result) {
                console.log(result);
                alert("User" + userId + " is deleted");
                location = location;
            }

        });

        console.log(data);
    });



    //this is for button action on content table
    $('#content_table tbody').on('click', 'button', function() {
        var data = tableContent.row(this).data();
        console.log(data);
        if (data === undefined) {
            data = tableContent.row($(this).parents('tr')).data();
        }
        //console.log(data["Id"]);
        var contentId = data["Id"];

        $.ajax({
            url: "deleteContentFromContentTable/" + contentId,
            success: function(result) {
                console.log(result);
                alert("Content " + contentId + " is deleted");
                location = location;
            }

        });

        console.log(data);
    });
</script>

</html>
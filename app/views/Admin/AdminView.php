<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" />

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

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
                            <input class="form-control mr-sm-3" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-1 my-sm-0" type="submit">Search</button>
                        </form>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item pt-1 mr-2">
                        <h4><?php echo $_SESSION["id"]; ?></h4>
                    </li>
                    <li class="nav-item active">
                        <a class="btn btn-primary mr-3" href="../LoginController/logout">Logout<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="h-75">
        <div class="row h-100">
            <div class="h-100 ml-auto mr-2 col-md-2 border mt-5" style="background-color: #4B94AF;">
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
                <div class="row mt-5" id="courses_table">
                    <h1 class="display-4">Critic Dashboard</h1>
                    <table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>Name</th>
                                <th>Content</th>
                                <th>AAA</th>
                                <th>AAA</th>
                                <th>AAA</th>
                                <th>AAA</th>
                                <th>AAA</th>
                                <th>AAA</th>
                                <th>AAA</th>
                                <th>AAA</th>

                            </tr>
                        </thead>
                        <tbody id="CourseTable">
                            <!-- User table goes here. -->
                            <td>Gay</td>
                            <td>Gay</td>
                            <td>Gay</td>
                            <td>Gay</td>
                            <td>Gay</td>
                            <td>Gay</td>
                            <td>Gay</td>
                            <td>Gay</td>
                            <td>Gay</td>
                            <td>Gay</td>
                            <td>Gay</td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
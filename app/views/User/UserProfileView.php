<?php


?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>User Profile</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.21/sp-1.1.0/datatables.min.css" />

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.21/sp-1.1.0/datatables.min.js"></script>
    <!--<script src="../includes/AdminTables.js"></script> -->
    <link rel="stylesheet" href="../css/userView.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

    <style>
        input[type=text],
        select,
        textarea,


        .pass {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: black;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        input[type=submit]:hover {
            background-color: white;
        }

        .profile {
            border-radius: 5px;
            background-color: #303435;
            padding: 20px;

        }

        .change {
            margin: center;
        }

        label {
            color: white;
            font-weight: bold;
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
                    <a name="profile" href="" id="side_links" class="m-3 p-2 btn btn-block btn-light">Profile</a><br>
                </div>
            </div>
            <div class="mr-auto ml-2 col-md-8">
                <div>
                    <h2 class="display-6">Profile</h2><br>
                </div>



                <div class="profile">


                    <label for="name">Name</label>
                    <label class="row ml-1" type="text" id="name" name="name" readonly><?php echo $CCinfo[0]['Name']; ?></label>
                    <label>Email</label>
                    <label class="row ml-1" type="text" id="email" name="email" readonly><?php echo $CCinfo[0]['Email']; ?></label>
                    <!-- bring php and print on the label -->

                    <label>Phone Number</label>
                    <label class="row ml-1" type="text" id="phone" name="phone" readonly><?php echo $CCinfo[0]['Phone']; ?></label>

                    <h5 class="change label-primary" style="color:white;">Change Password</h5>
                    <br>
                    <form name="profile" action="../ContentCreatorController/changePassword" method="post" onsubmit="return passwordvalidation()">
                        <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">
                        <label>Password</label>
                        <input type="password" id="pass" class="pass" name="pass">

                        <label> Confirm Password</label>
                        <input type="password" id="conpass" class="pass" name="conpass">


                        <input type="submit" value="Change Password">
                    </form>
                </div>

            </div>

        </div>
    </div>

    </div>



</body>

<script>
    $(document).ready(function() {
        $('#movies_search').select2();
    });

    function redirectMovie(contentId) {
        window.location.href = `./../ContentController/content/${contentId}`;
    }

    function passwordvalidation() {

        var password = document.profile.pass.value;
        var conpassword = document.profile.conpass.value;

        if (password == "") {
            alert("Fill up Password Field");
            return true;
        } else if (conpassword == "")

        {

            alert(" Please Confrim Password");
            document.profile.pass.focus();
        } else if (password == conpassword) {


            alert("Password Changed Successfully")
            document.profile.conpass.focus();
        } else {
            alert("Password Doesn't Match");

            return false;
        }

    }
</script>

</html>
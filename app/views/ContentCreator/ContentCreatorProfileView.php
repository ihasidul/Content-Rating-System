<?php
$CCinfo = $data["CreatorInformation"];

?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Creator Profile</title>
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
            font-family: Arial, Helvetica, sans-serif;
        }

        .dataTables_wrapper .dataTables_filter {
            float: right;
            text-align: right;

            visibility: hidden;
        }

        * {
            box-sizing: border-box;
        }

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

    <script>
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

                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <h4 class="mr-3" style="color: white"><?php echo $_SESSION["id"]; ?></h4>

                    <li class="nav-item active">
                        <a class="btn btn-primary mr-3" href="../LoginController/logout">Logout<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>


    <!-- <a href="../LoginController/loadSignUp" class="btn btn-primary">Sign Up Page</a> -->
    <div class="row h-100">
        <div class=" row h-100 ml-3 mr-2 col-md-2  mt-0" style="background-color: #4B94AF;">

            <div class="col " align="center">
                <a name="content_table_div" href="../ContentCreatorController/index" class="m-3 p-2 btn btn-block btn-light">CONTENT LIST</a><br>
                <a name="uploadcontent" href="../ContentCreatorController/contentUploadLoader" class="m-3 p-2 btn btn-block btn-light">UPLOAD CONTENT</a><br>
                <a name="profile" href="../ContentCreatorController/loadCCProfile" class="m-3 p-2 btn btn-block btn-light">CREATOR'S PROFILE</a><br>
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

</body>

</html>
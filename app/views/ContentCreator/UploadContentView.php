<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Upload Content</title>
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
        file {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        .file {
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

        .content {
            border-radius: 5px;
            background-color: #303435;
            padding: 20px;

        }

        label {
            color: white;
            font-weight: bold;
        }
    </style>

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

    <!-- <div class="h-100"> -->
    <!-- <a href="../LoginController/loadSignUp" class="btn btn-primary">Sign Up Page</a> -->
    <div class="row h-100">
        <div class=" row h-100 ml-3 mr-2 col-md-2  mt-0" style="background-color: #4B94AF;">


            <div class="col " align="center">
                <a name="content_table_div" href="../ContentCreatorController/index" class="m-3 p-2 btn btn-block btn-light">CONTENT LIST</a><br>
                <a name="uploadcontent.php" ref="../ContentCreatorController/contentUploadLoader" class="m-3 p-2 btn btn-block btn-light">UPLOAD CONTENT</a><br>
                <a name="profile" href="../ContentCreatorController/loadCCProfile" class="m-3 p-2 btn btn-block btn-light">CREATOR'S PROFILE</a><br>
            </div>
        </div>
        <div class="mr-auto ml-2 col-md-8">

            <div>
                <h2 class="display-6">Upload Content</h2><br>
            </div>


            <div class="content">
                <form name="content" action="uploadContent" onsubmit="return validateContent()" enctype="multipart/form-data" method="post">
                    <input type="hidden" name="ccName" value="<?php echo $_SESSION['id']; ?>">
                    <label for="name">Content Name</label>
                    <input type="text" id="name" name="name" placeholder="Content name..">

                    <label for="lname">Content Type</label>

                    <select id="type" name="type">
                        <option selected disabled>Select your Content Type</option>
                        <option value="Movie">Movie</option>
                        <option value="Natok">Natok</option>
                        <option value="Video content">Video Content</option>
                        <option value="Tv series">Tv Series</option>
                    </select>

                    <label for="genre">Content Genre</label>
                    <select id="genre" name="genre">
                        <option selected disabled>Select Genre</option>
                        <option value="Romance">Romance</option>
                        <option value="Drama">Drama</option>
                        <option value="Crime">Crime </option>
                        <option value="Action">Action</option>
                        <option value="Thriller">Triller</option>
                        <option value="Comdey">Comedy</option>
                    </select>

                    <label for="image">Content Poster</label>
                    <input type="file" class="file" id="poster" name="poster">


                    <label>Content Link</label>
                    <input type="text" id="link" name="link" placeholder="Content link..">


                    <label>Cast Info</label>
                    <textarea id="cast" name="cast" placeholder="Provide your cast Information..." style="height:80px"></textarea>

                    <label>Release Date</label>
                    <input type="date" id="date" name="date" class="file">


                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</body>
<script>
    function validateContent() {
        var contentName = document.content.name.value;
        var contentType = document.content.type.value;

        var contentGenre = document.content.genre.value;
        var contentPoster = document.content.poster.value;
        var contentLink = document.content.link.value;
        var contentCast = document.content.cast.value;
        var contentDate = document.content.date.value;

        if (contentName == "") {
            alert("Fill up All the Filde");
            document.content.name.focus();
            return false;
        } else if (contentType == "") {
            alert("Please pick a Type");
            document.content.type.focus();
            return false;
        } else if (contentGenre == "") {
            alert("Please pick a Genre");
            document.content.genre.focus();
            return false;
        } else if (contentPoster == "") {
            alert("Fill up All the Filde");
            document.content.ImageToUpload.focus();
            return false;
        } else if (contentLink == "") {
            alert("Fill up All the Filde");
            document.content.link.focus();
            return false;
        } else if (contentCast == "") {
            alert("Fill up All the Filde");
            document.content.cast.focus();
            return false;
        } else if (contentDate == "") {
            alert("Fill up All the Filde");
            document.content.date.focus();
            return false;
        } else {
            alert("Validation is Successfull")
            return true;
        }

    }
</script>

</html>
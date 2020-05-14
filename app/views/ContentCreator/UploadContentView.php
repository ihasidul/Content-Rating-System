<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="uploadcontent.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Ulpoad Content</title>
<script src="validateContent.js"></script>
<style>
    body {
        background-color: #D9FCFD;
        font-family: Bookman Old Style;

    }


    li {
        float: left;
        padding: 3px;
        width: 450px;

    }



    li a {

        margin: 5% 2%;
        color: rgb(43, 90, 99);
        font-size: 35px;
        width: 600px;
        font-family: Matura MT Script Capitals;
        padding: 14px 40px;

    }




    .cc {
        width: 450px;
        float: right;
        margin: right;
    }




    #rcorners1 {
        border-radius: 15px;
        background: #FFFFFF;
        padding: 15px;
        width: 180px;
        height: 15;
        color: #00767A;
        font-size: 15px;
    }


    #rcorners3 {
        margin: 2% 10%;
        border-radius: 20px;
        background: #6EDDAC;
        padding: 80px;
        width: 800px;
        height: 950px;
        font-size: 20px;
    }

    th {
        width: 20%;
    }

    .col-25 {
        float: left;
        width: 15%;
        margin-top: 0px;
    }

    .row {
        margin: 0%;
    }

    label {
        padding: 15px 10px 10px 5;
        display: inline-block;
        width: 250%;
    }



    div {
        border-radius: 5px;
        background-color: #cff8eb;
        padding: 15px;
        float: center;

    }

    table {
        border-collapse: collapse;
        width: 150%;

    }

    th {
        width: 10%;
    }

    button {
        margin: 2% 10%;
        border-radius: 5px;
        background: aquamarine;
        font-family: Bookman Old Style;
        font-size: 16px;
        text-align: center;
        padding: 8px;
        width: 60px;
    }

    .search {
        margin: 2% 10%;
        width: 450px;
        font-family: Bookman Old Style;
        font-size: 15px;
        padding: 9px;
        text-align: center;
        border-radius: 10px;
    }



    input,
    textarea,
    select {
        font-family: candara;

        font-size: 15px;
        background-color: white;
        width: 250px;
        padding: 10px;
        border: 3px solid #ccc;
        border-radius: 6px;
        box-sizing: border-box;
        resize: vertical;
        margin: -1% 15%;


    }

    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;

    }



    .dropbtn {
        background-color: #22C197;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;


    }


    .dropdown-content {
        display: none;
        position: absolute;
        right: 0;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
        border-radius: 15px;
        background: #1EAC86;
        margin: -0% 5%;

    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;

    }

    .dropdown {
        margin: -4.5% 2%;
        width: 300px;
        padding: 7px;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: #23DDAC;
    }
</style>

<body>
    <ul>
        <li><a class="active">Content Rating Site</a></li>


        <div class="dropdown" style="float:right;">

            <button style="width:250px;" class="dropbtn">Content Creator</button>

            <div class="dropdown-content">
                <a href="upload_content.php" id="rcorners1">Upload Content</a> <br>
                <a href="#" id="rcorners1">Content List</a><br>
                <a href="Creatorprofile.php" id="rcorners1">Profile</a><br>
                <a href="#" id="rcorners1">Log Out</a><br>
            </div>
        </div>

    </ul>

    <table>


        <tr>
            <th>


                <div style="font-size:20px;" id="rcorners3">
                    Upload Content
                    <form name="content" action="upload.js" onsubmit="return validateContent()">


                        <div class="row">
                            <div class="col-25">
                                <label>Content Name : </label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="fname" name="name" placeholder="Enter content name..">
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-25">
                                <label>Content Type : </label>
                            </div>
                            <div class="col-75">
                                <select name="type">
                                    <option value="Natok">Natok</option>
                                    <option value="Cinema">Cinema</option>
                                    <option value="Tvseries">Tv Series</option>
                                    <option value="shortf">Short Flim</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Genre : </label>
                            </div>
                            <div class="col-75">
                                <select name="genre">
                                    <option value="Thriller">Thriller & Mystrey </option>
                                    <option value="Action ">Action & Crime </option>
                                    <option value="Comedy">Comedy</option>
                                    <option value="Animation">Animation</option>
                                    <option value="Romance">Romance</option>
                                    <option value="Horror">Horror</option>
                                    <option value="War">War</option>
                                </select>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-25">
                                <label>Upload Poster of Content : </label>
                            </div>
                            <div class="col-75">
                                <input type="file" name="ImageToUpload" id="ImageToUpload">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label for="link">Content Link : </label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="flink" name="link" placeholder="Enter content link..">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label for="Cast">Cast Info : </label>
                            </div>
                            <div class="col-75">
                                <textarea name="cast" rows="2" cols="20"> </textarea>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-25">
                                <label for="fdate">Release Date</label>
                            </div>
                            <div class="col-75">
                                <input type="date" id="fdate" name="date" placeholder="Enter release date..">
                            </div>
                        </div>

                        <br><br>
                        <input type="submit" value="Submit">
                        <br><br>
            </th>
        </tr>
        </form>
        </div>
        </div>
        </td>
        </tr>
    </table>

</body>

</html>
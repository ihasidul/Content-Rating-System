<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/contentCreatorView.css">
<title>Content List</title>

<body>
    <ul>
        <li><a class="active" href="LoginView.php">Content Rating Site</a></li>
        <li><input class="search" type="search" placeholder="Search.." name="search"> </input></li>
        <li><button id="icon" type="submit"><i class="fa fa-search"></i></button></li>



        <div class="dropdown" style="float:right;">

            <button style="width:250px;" class="dropbtn">Menu</button>

            <div class="dropdown-content">
                <a href="UploadContentView.php" id="rcorners1">Upload Content</a> <br>
                <a href="ContentListView.php" id="rcorners1">Content List</a><br>
                <a href="ContentCreatorProfileView.php" id="rcorners1">Profile</a><br>
                <a href="#" id="rcorners1">Log Out</a><br>
            </div>
        </div>
    </ul>


    <table>


        <tr>
            <th>


                <div style="font-size:23px;" id="rcorners3">
                    <lable style="font-size:23px;margin:-25% 5%">Content List</lable>


                    <div style="font-size:17px;" id="rcorners2">

                        <table id="content">
                            <tr>
                                <th>Content Id</th>
                                <th>Content Name</th>
                                <th>Type</th>
                                <th>Genre</th>
                                <th>Date</th>
                                <th>Rating</th>
                            </tr>


                            <?php
                            $conn = mysqli_connect("localhost", "root", "", "crsdb");
                            // Check connection
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }
                            $sql = "SELECT id, name, type , genre , date , ratting FROM content";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>"
                                        . $row["type"] . "</td><td>" . $row["genre"] . "</td><td>" . $row["date"] . "</td><td>" . $row["ratting"] . "</td></tr>";
                                }
                                echo "</table>";
                            } else {
                                echo "0 results";
                            }
                            $conn->close();
                            ?>
                        </table>

                    </div>

                </div>
                </td>
        </tr>
    </table>
</body>

</html>
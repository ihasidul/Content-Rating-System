<?php
class ContentCreatorController extends Controller
{
    public function index($first = "")
    {
        $data = [
            "Id" => $_SESSION['id'],
            "Password" => $_SESSION['password'],
            "ContentsOfThisCC" => $this->getAllContentByCC($_SESSION['id'])

        ];
        $this->view("ContentCreator/ContentCreatorView", $data);
    }
    public function getAllContentByCC($id)
    {

        //var_dump($this->model("ContentModel")->getContentsByCC($_SESSION['id']));
        return $this->model("ContentModel")->getContentsByCC($id);
    }
    public function contentUploadLoader()
    {
        // var_dump($_SESSION['id']);
        $data = [
            "Id" => $_SESSION['id'],
            "Password" => $_SESSION['password'],
        ];
        //var_dump($this->getWatchListInfo($_SESSION['id']));


        $this->view("ContentCreator/UploadContentView", $data);
    }
    public function uploadContent()
    {
        if ($_FILES["poster"]["error"]) {
            echo "File can not be uploaded";
        } else {
            $contentCreator = $_POST['ccName'];
            $contentName = $_POST['name'];
            $type = $_POST['type'];
            $genre = $_POST['genre'];
            $link = $_POST['link'];
            $cast = $_POST['cast'];
            $date = $_POST['date'];
            //upload to my defined folder
            //just file name as string//this will be on my db
            //need to do the file upload thing
            $uploadOk = 1;
            $target_directory = POSTERS;
            $filename = basename($_FILES["poster"]["name"]);
            // var_dump($filename[1]);
            $target_file = $target_directory  . $filename;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


            // Check if file already exists
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }

            // Check file size
            if ($_FILES["poster"]["size"] > 5000000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }

            // Allow certain file formats
            if (
                $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif"
            ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                echo "Provided file type: " . $imageFileType;
                $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
            } else {
                if (copy($_FILES["poster"]["tmp_name"], $target_file)) {
                    echo "The file " . basename($_FILES["poster"]["name"]) . " has been uploaded.";

                    // SQL and View/Header here.
                    $this->model("ContentModel")->creatContent($contentCreator, $contentName, $type, $genre, $filename, $cast, $date, 0, 0, $link);
                    header("Location: index");
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }




            var_dump($contentCreator);
        }
    }

    public function loadCCProfile()
    {
        //$ccInfo = $this->model('ContentCreatorModel')->getContentCreatroById($_SESSION['id']);
        $data = [
            "CreatorInformation" => $this->model('ContentCreatorModel')->getContentCreatroById($_SESSION['id']),
        ];

        $this->view("ContentCreator/ContentCreatorProfileView", $data);
    }

    public function changePassword()
    {

        $id = $_POST['id'];
        $pass = $_POST['pass'];
        $this->model('LoginModel')->changePassword($id, $pass);
        $data = [
            "CreatorInformation" => $this->model('ContentCreatorModel')->getContentCreatroById($_SESSION['id']),
        ];

        $this->view("ContentCreator/ContentCreatorProfileView", $data);
    }
}

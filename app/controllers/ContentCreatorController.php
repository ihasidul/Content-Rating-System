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
        $contentCreator = $_POST['ccName'];
        $contentName = $_POST['name'];
        $type = $_POST['type'];
        $genre = $_POST['genre'];
        //need to do the file upload thing
        $link = $_POST['link'];
        $cast = $_POST['cast'];
        $date = $_POST['date'];
        var_dump($contentCreator);
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

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
}

<?php
//todo:amdklasdadansd
class ContentController extends Controller
{
    public function index()
    {
        $data = [
            "Id" => $_SESSION['id'],
            "Password" => $_SESSION['password']

        ];
        $this->view("ContentCreator/ContentCreatorView", $data);
    }

    public function content($content_id)
    {

        $contentObj = $this->model('ContentModel');
        $content = $contentObj->getContentInfoById((int) $content_id);
        $comments = $contentObj->getComments((int) $content_id);
        //echo $content_id;
        //echo var_dump($content_id);
        //new

        //  echo $content;
        // return $topMovies;
        $data = [
            "Id" => $_SESSION['id'],
            "Password" => $_SESSION['password'],
            "Content" => $content,
            "Comments" => $comments
        ];


        $this->view("ContentView", $data);
    }
}

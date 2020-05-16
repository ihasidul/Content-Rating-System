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
        //get Content Using content_id from Content Model 
        $modelObj = $this->model(['ContentModel']);
        $modelObj->getContentInfoById($content_id);
        $data = [
            // "Id" => $_SESSION['id'],
            // "Password" => $_SESSION['password'],
            // "ContentId" => $content_id
        ];

        $this->view("ContentView", $data);
    }
}

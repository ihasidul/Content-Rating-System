<?php
//todo:amdklasdadansd
class ContentController extends Controller
{
    public function index()
    {
        $data = [
            "AdminName" => $_SESSION['id'],
            "Password" => $_SESSION['password'],

        ];
        $this->view("ContentCreator/ContentCreatorView", $data);
    }

    public function content($content_id)
    {
        //get Content Using content_id from Content Model 
        $content_id;
    }
}

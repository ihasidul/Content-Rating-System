<?php
class CriticController extends Controller
{
    public function index()
    {
        $data = ["CriticName" => $_SESSION['id'], "Password" => $_SESSION['password']];
        $this->view("Critic/CriticView", $data);
    }
}

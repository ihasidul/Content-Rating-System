<?php
class CriticController extends Controller
{
    public function index($first = "")
    {
        $data = [
            "CriticName" => $_SESSION['id'],
            "Password" => $_SESSION['password'],
            "First" => $first
        ];
        $this->view("Critic/CriticView", $data);
    }
}

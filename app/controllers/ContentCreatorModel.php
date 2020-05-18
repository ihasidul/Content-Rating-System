<?php
class AdminController extends Controller
{
    public function index($first = "")
    {
        $data = [
            "AdminName" => $_SESSION['id'],
            "Password" => $_SESSION['password'],
            "First" => $first
        ];
        $this->view("AdminView", $data);
    }
}

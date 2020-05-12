<?php
class AdminController extends Controller
{
    public function index()
    {
        $data = ["AdminName" => $_SESSION['id'], "Password" => $_SESSION['password']];
        $this->view("AdminView", $data);
    }
}

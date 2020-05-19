<?php
require_once CONTROLLERS . 'CriticController.php';
class AdminController extends Controller
{
    public function index()
    {

        $data = [
            "Id" => $_SESSION['id'],
            "Password" => $_SESSION['password'],
            "totalCritic" => $this->getTotalNumberOfCritic(),
            "totalUser" => $this->getTotalNumberOfUser(),
            "totalContentCreator" => $this->getTotalNumberOfContentCreator()
        ];
        $this->view("Admin/AdminView", $data);
    }

    public function getTotalNumberOfCritic() // brings toltal number of Critic on database
    {
        $critic = $this->model('CriticModel');
        return $critic->getTotalNumberOfCritic();
    }
    public function getTotalNumberOfUser() //brings total number of normal user on database
    {
        $user = $this->model('UserModel');
        return $user->getTotalNumberOfUser();
    }
    public function getTotalNumberOfContentCreator() //brings total number of Content Creator on database
    {
        $cc = $this->model('ContentCreatorModel');
        return $cc->getTotalNumberOfContentCreator();
    }

    public function getAllUsers() //Get all the Users with their info
    {
        $users = $this->model('UserModel')->getAllUsers();
        echo json_encode(["data" => $users]);
    }

    public function getAllContentCreator() //Get all the Content creator with their info
    {
        $users = $this->model('ContentCreatorModel')->getAllContentCreator();
        echo json_encode(["data" => $users]);
    }

    public function getAllCritic() //Get all the Critic with their info
    {
        $users = $this->model('CriticModel')->getAllCritic();
        echo json_encode(["data" => $users]);
    }

    public function getAllPendingCritic()
    {
        $users = $this->model('CriticModel')->getAllPendingCritic();
        echo json_encode(["data" => $users]);
    }

    public function TestingButton()
    {
        echo "Hoise toh hasidul eto dum ken";
    }

    public function getAllContent()
    {
        $content = $this->model('ContentModel')->getAllContent();
        echo json_encode(["data" => $content]);
    }
    public function deleteContentFromContentTable($contentId)
    {
        $this->model('ContentModel')->deleteContent($contentId);
    }
    public function deleteContentFormUserTable($userId)
    {
        $this->model('UserModel')->deleteUser($userId);
        // $this->model('LoginMode')->deleteUser($userId); //baki ase
    }
    public function deleteCriticFromCriticTable($userId)
    {
        $this->model('CriticModel')->deleteCritic($userId);
    }
    public function deleteContentCreatorFormContentCreatorTable($userId)
    {
        $this->model('ContentCreatorModel')->deleteContentCreator($userId);
    }
}

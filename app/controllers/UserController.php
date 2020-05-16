
<?php
class UserController extends Controller
{
    public function index()
    {
        // Return a 'view' or do nothing.
        $data = [
            "AdminName" => $_SESSION['id'],
            "Password" => $_SESSION['password'],
            "TopFiveMovies" => $this->getTopMovies()
        ];
        // Top Movies: [0] => [Movie id, postername]
        $this->view("User/UserView", $data);
    }

    public function getTopMovies()
    {
        $contentObj = $this->model('ContentModel');
        $topMovies = $contentObj->getTopMovies();
        return $topMovies;
    }
    public function getTopNatoks()
    {
        $contentObj = $this->model('ContentModel');
        $topMovies = $contentObj->getTopNatoks();
        return $topMovies;
    }
}
?>
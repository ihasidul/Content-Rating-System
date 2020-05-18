
<?php
class UserController extends Controller
{
    public function index()
    {
        // Return a 'view' or do nothing.
        $contentObj = $this->model('ContentModel');
        $movies = $contentObj->getAllMovies();
        $data = [
            "AdminName" => $_SESSION['id'],
            "Password" => $_SESSION['password'],
            "TopFiveMovies" => $this->getTopMovies(),
            "TopFiveNatoks" => $this->getTopNatoks(),
            "TopFiveTvSerieses" => $this->getTopTvSeries(),
            "TopFiveVideoContents" => $this->getTopVideoContent(),
            "First" => $_SESSION["First"],
            "Movies" => $movies
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
    public function getTopTvSeries()
    {
        $contentObj = $this->model('ContentModel');
        $topMovies = $contentObj->getTopTvSeries();
        return $topMovies;
    }
    public function getTopVideoContent()
    {
        $contentObj = $this->model('ContentModel');
        $topMovies = $contentObj->getTopVideoContent();
        return $topMovies;
    }
}
?>
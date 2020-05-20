
<?php
class UserController extends Controller
{
    public function index()
    {
        // Return a 'view' or do nothing.
        $contentObj = $this->model('ContentModel');
        $movies = $contentObj->getAllMovies();
        $data = [
            "id" => $_SESSION['id'],
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
    public function watchlistLoader()
    {
        // var_dump($_SESSION['id']);
        $data = [
            "Id" => $_SESSION['id'],
            "Password" => $_SESSION['password'],
            "Watchlist" => $this->getWatchListInfo($_SESSION['id'])
        ];
        //var_dump($this->getWatchListInfo($_SESSION['id']));


        $this->view("User/WatchlistView", $data);
    }
    public function getWatchListInfo($userId)
    {
        $contentObj = $this->model('ContentModel');
        $watchlist = $contentObj->getWatchlistByUserId($userId);
        return $watchlist;
    }
    // public function loadUserProfile()
    // {
    //     //$ccInfo = $this->model('ContentCreatorModel')->getContentCreatroById($_SESSION['id']);
    //     $data = [

    //         "UserInformation" => $this->model('UserModel')->getContentCreatroById($_SESSION['id']),
    //     ];

    //     $this->view("ContentCreator/ContentCreatorProfileView", $data);
    // }

}
?>
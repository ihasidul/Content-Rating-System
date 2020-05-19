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

        $contentObj = $this->model('ContentModel');
        $content = $contentObj->getContentInfoById((int) $content_id);
        $comments = $contentObj->getComments((int) $content_id);
        $movies = $contentObj->getAllMovies();
        //echo $content_id;
        //echo var_dump($content_id);
        //new


        //  echo $content;
        // return $topMovies;
        $data = [
            "Id" => $_SESSION['id'],
            "Password" => $_SESSION['password'],
            "Content" => $content,
            "Comments" => $comments,
            "Movies" => $movies,
            "ContentID" => $content_id

        ];


        $this->view("ContentView", $data);
    }



    public function submitUserRatingAndComment()
    {
        echo $_POST["comment"];
        echo $_POST["rating"];
        echo $_POST["content_id"];

        echo $_SESSION["id"];
        $idType = explode("-", $_SESSION["id"]);
        $idSubstring = $idType[0];
        $contentObj = $this->model('ContentModel');
        $didUserComented = $contentObj->ifUserCommented($_SESSION["id"], $_POST["content_id"]);

        if ($idSubstring == "u") //This is user
        {
            $userType = "user";
            $contentObj = $this->model('ContentModel');

            $contentObj->insertCommentAndRating($_POST["content_id"], $_POST["content_name"], $_SESSION["id"], $userType, $_POST["comment"], $_POST["rating"]); //watchlist

            $updatedRating = $this->calculateRating($_POST["rating"], $userType, $_POST["content_id"]);
            $updatedRating = round($updatedRating, 1);
            $contentObj->updateUserRating($_POST["content_id"], $updatedRating); //content table
        } else if ($idSubstring == "c") //This is user
        {
            $userType = "critic";
            $contentObj = $this->model('ContentModel');

            $contentObj->insertCommentAndRating($_POST["content_id"], $_POST["content_name"], $_SESSION["id"], $userType, $_POST["comment"], $_POST["rating"]);
            $updatedRating = $this->calculateRating($_POST["rating"], $userType, $_POST["content_id"]);
            $updatedRating = round($updatedRating, 1);
            $contentObj->updateCriticRating($_POST["content_id"], $updatedRating);
        }




        header("Location: content/" . $_POST["content_id"]);
    }

    public function calculateRating($postedRating, $userType, $contentId)
    {
        $contentObj = $this->model('ContentModel');

        $totalRating = $contentObj->getTotalRating($userType, $contentId);
        $toatalUser = $contentObj->getTotalUser($userType, $contentId);
        return $totalRating / $toatalUser;
    }
}

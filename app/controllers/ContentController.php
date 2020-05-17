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
        $contentObj = $this->model('ContentModel');
        $contentObj->updateCommentAndRating($_POST["content_id"], $_SESSION["id"], $_POST["comment"], $_POST["rating"]);
        header("Location: content/" . $_POST["content_id"]);
    }
}

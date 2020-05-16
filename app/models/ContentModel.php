<?php
require_once INCLUDES . "DataAccess.php";
class ContentModel
{
    public $id;
    public $contentCreator;
    public $name;
    public $type;
    public $genre;
    public $posterName;
    public $cast;
    public $date;
    public $link;
    public $userRating;
    public $criticRating;



    public function getLatestAutoId() //this will get latest auto id of login table
    {
        $sql = "SELECT MAX(id) AS autoId FROM content";
        $db =  new DataAccess();
        $result = $db->getData($sql);


        while ($row = $result->fetch_assoc()) {
            $data =  $row['autoId'];
        }
        return $data;
    }


    public function setContentInfo($contentCreator, $name, $type, $genre, $posterName, $cast, $date, $link, $userRating, $criticRating)
    {
        $this->contentCreator = $contentCreator;
        $this->name = $name;
        $this->type = $type;
        $this->genre = $genre;
        $this->posterName = $posterName;
        $this->cast = $cast;
        $this->date = $date;
        $this->link = $link;
        $this->userRating = $userRating;
        $this->criticRating = $criticRating;
    }

    public function insertContent($contentCreator, $name, $type, $genre, $posterName, $cast, $date, $link, $userRating, $criticRating)
    {

        try {
            //this function will be needing to insert user in login table
            $sql = "insert into content (content_creator,name,type,genere,posterName,cast,date,rating,criticRating,link) values ('" . $contentCreator . "','" . $name . "','" . $type . "','" . $genre . "','" . $posterName . "','" . $cast . "','" . $date . "','" . $userRating . "','" . $criticRating . "','" . $link . "');";
            $db =  new DataAccess();
            $db->executeQuery($sql);
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }
    public function deleteContentCreator($contentid)
    {

        try {
            //this function will be needing to insert user in login table
            $sql = "delete from content where id='" . $contentid . "'";
            $db =  new DataAccess();
            $db->executeQuery($sql);
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }
    public function getTopMovies()
    {
        $sql = "SELECT id,posterName FROM content WHERE type='Movie' ORDER BY rating DESC LIMIT 5"; //this will give top 5 movies
        $db = new DataAccess();

        $result = $db->getData($sql);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                $topMovies[] =  array("ID" => $row["id"], "PosterName" => $row["posterName"]);
            }
            return $topMovies;
        } else {
            echo "0 results";
        }
    }
}

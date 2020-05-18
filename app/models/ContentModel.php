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
    public function getAllMovies()
    {
        $sql = "SELECT id,name FROM content";
        $db =  new DataAccess();
        $result = $db->getData($sql);
        while ($row = $result->fetch_assoc()) {
            $Movies[] =  array("ID" => $row["id"], "MovieName" => $row["name"]);
        }
        return $Movies;
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

    public function getTopNatoks() //send the id and postreName of top Natoks
    {
        $sql = "SELECT id,posterName FROM content WHERE type='Natok' ORDER BY rating DESC LIMIT 5"; //this will give top 5 movies
        $db = new DataAccess();

        $result = $db->getData($sql);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                $top[] =  array("ID" => $row["id"], "PosterName" => $row["posterName"]);
            }
            return $top;
        } else {
            echo "0 results";
        }
    }

    public function getTopTvSeries() //send the id and postreName of top Tv seris
    {
        $sql = "SELECT id,posterName FROM content WHERE type='Tv series' ORDER BY rating DESC LIMIT 5"; //this will give top 5 movies
        $db = new DataAccess();

        $result = $db->getData($sql);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                $top[] =  array("ID" => $row["id"], "PosterName" => $row["posterName"]);
            }
            return $top;
        } else {
            echo "0 results";
        }
    }

    public function getContentInfoById($content_id)
    {
        $sql = "SELECT * FROM content WHERE id = '{$content_id}'"; //this will give top 5 movies
        $db = new DataAccess();

        $result = $db->getData($sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $content[] = array(
                    "ContentCreator" => $row["content_creator"],
                    "Name" => $row["name"],
                    "Type" => $row["type"],
                    "Genre" => $row["genre"],
                    "PosterName" => $row["posterName"],
                    "Cast" => $row["cast"],
                    "Date" => $row["date"],
                    "Rating" => $row["rating"],
                    "CriticRating" => $row["criticRating"],
                    "Link" => $row["link"]
                );
            }
            return $content;
        }
    }
    public function getComments($content_id)
    {
        $sql = "SELECT * FROM watchlist WHERE contentId = '{$content_id}'"; //this will give top 5 movies
        $db = new DataAccess();

        $result = $db->getData($sql);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                $top[] =  array("UserId" => $row["userId"], "ContentId" => $row["contentId"], "Rating" => $row["rating"], "UserType" => $row["userType"], "comment" => $row["comment"]);
            }
            return $top;
        } else {
            // echo "0 results";
        }
    }



    public function getTopVideoContent() //send the id and postreName of top Natoks
    {
        $sql = "SELECT id,posterName FROM content WHERE type='Video content' ORDER BY rating DESC LIMIT 5"; //this will give top 5 movies
        $db = new DataAccess();

        $result = $db->getData($sql);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                $top[] =  array("ID" => $row["id"], "PosterName" => $row["posterName"]);
            }
            return $top;
        } else {
            echo "0 results";
        }
    }

    public function insertCommentAndRating($contentId, $userId, $userType, $comment, $rating)
    {
        try {
            //this function will be needing to insert user in login table
            $sql = "insert into watchlist (userId,contentId,usertype,rating,comment) values ('" . $userId . "','" . $contentId . "','" . $userType . "','" . $rating . "','" . $comment . "');";
            var_dump($sql);
            $db =  new DataAccess();
            $db->executeQuery($sql);
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }
    public function getTotalRating($userType, $contentId) //this will sum up the total rating based on the user type
    {
        $sql = "SELECT SUM(rating) as value_sum FROM watchlist WHERE userType = '{$userType}' and contentId = '{$contentId}'"; //this will give top 5 movies
        $db = new DataAccess();

        $result = $db->getData($sql);

        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            $sum = $row['value_sum'];
        }
        return $sum;
    }
    public function getTotalUser($userType, $contentId)
    {
        $sql = "SELECT *  FROM watchlist WHERE userType = '{$userType}' and contentId = '{$contentId}'"; //this will give top 5 movies
        var_dump($sql);
        $db = new DataAccess();

        $result = $db->getData($sql);
        return $result->num_rows;
    }
    public function updateUserRating($contentId, $updatedRating)
    {
        $sql = "UPDATE content SET rating='{$updatedRating}' WHERE id ='{$contentId}'";
        var_dump($sql);
        $db = new DataAccess();

        $db->executeQuery($sql);
    }
    public function updateCriticRating($contentId, $updatedRating)
    {
        $sql = "UPDATE content SET criticRating='{$updatedRating}' WHERE id ='{$contentId}'";
        var_dump($sql);
        $db = new DataAccess();

        $db->executeQuery($sql);
    }
}

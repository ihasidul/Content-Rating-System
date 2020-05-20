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

    public function getAllContent()
    {
        $sql = "SELECT * FROM content";
        $db =  new DataAccess();
        $result = $db->getData($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $contents[] = array(
                    "Content Creator" => $row["content_creator"],
                    "Id" => $row["id"],
                    "Content Name" => $row["name"],
                    "Type" => $row["type"],
                    "Genre" => $row["genre"],
                    "Poster" => $row["posterName"],
                    "Cast" => $row["cast"],
                    "Date" => $row["date"],
                    "User Rating" => $row["rating"],
                    "Critic Rating" => $row["criticRating"],
                    "Link" => $row["link"]
                );
            }
            return $contents;
        } else {
            echo "THere is no contetn on the table";
        }
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

    public function creatContent($contentCreator, $contentName, $type, $genre, $posterName, $cast, $date, $userRating, $criticRating, $link)
    {

        try {
            //this function will be needing to insert user in login table
            $sql = "insert into content (content_creator,name,type,genre,posterName,cast,date,rating,criticRating,link) values ('" . $contentCreator . "','" . $contentName . "','" . $type . "','" . $genre . "','" . $posterName . "','" . $cast . "','" . $date . "','" . $userRating . "','" . $criticRating . "','" . $link . "');";
            $db =  new DataAccess();
            $db->executeQuery($sql);
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }
    public function deleteContent($contentId)
    {

        try {
            //this will be needing to delete content from content  table
            $sql = "delete from content where id='" . $contentId . "'";
            $db =  new DataAccess();
            $db->executeQuery($sql);
            $sql = "delete from watchlist where contentId='" . $contentId . "'";
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
                $allFromWatchlist[] =  array("UserId" => $row["userId"], "ContentId" => $row["contentId"], "Rating" => $row["rating"], "UserType" => $row["userType"], "comment" => $row["comment"]);
            }
            return $allFromWatchlist;
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

    public function insertCommentAndRating($contentId, $contentName, $userId, $userType, $comment, $rating)
    {
        try {
            //this function will be needing to insert user in login table
            $sql = "insert into watchlist (userId,contentId,contentName,usertype,rating,comment) values ('" . $userId . "','" . $contentId . "','" . $contentName . "','" . $userType . "','" . $rating . "','" . $comment . "');";
            var_dump($sql);
            //throw new Exception($sql);
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
        //var_dump($sql);
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

    public function ifUserCommented($userId, $contentId)
    {
        $sql = "SELECT *  FROM watchlist WHERE userId = '{$userId}' and contentId = '{$contentId}'"; //this will give top 5 movies
        //var_dump($sql);
        $db = new DataAccess();
        $result = $db->getData($sql);
        if ($result->num_rows > 0) {
            // echo "I am in row 1 er beshi";

            return true;
        } else {
            return false;
        }
    }
    public function getWatchlistByUserId($userId)
    {

        $sql = "SELECT contentName,rating,comment FROM watchlist where userId = '{$userId}'";
        $db = new DataAccess();
        // var_dump($sql);
        $result = $db->getData($sql);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                //var_dump($row);
                $allFromWatchlist[] =  array("Content Name" => $row["contentName"], "Your Rating" => $row["rating"], "Your Comment" => $row["comment"]);
            }
            return $allFromWatchlist;
        } else {
            // echo "0 results";
        }
    }

    public function getContentsByCC($ContentCreatorId)
    {
        $sql = "SELECT * FROM content where content_creator = '{$ContentCreatorId}'";
        $db =  new DataAccess();
        $result = $db->getData($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $contents[] = array(
                    "Content Creator" => $row["content_creator"],
                    "Content Id" => $row["id"],
                    "Content Name" => $row["name"],
                    "Type" => $row["type"],
                    "Genre" => $row["genre"],
                    "Poster" => $row["posterName"],
                    "Cast" => $row["cast"],
                    "Date" => $row["date"],
                    "User Rating" => $row["rating"],
                    "Critic Rating" => $row["criticRating"],
                    "Link" => $row["link"]
                );
            }
            return $contents;
        } else {
            // echo "THere is no contetn on the table";
        }
    }
}

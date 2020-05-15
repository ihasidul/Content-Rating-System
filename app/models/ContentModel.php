<?php
require_once INCLUDES . "DataAccess.php";
class ContentModel
{
    public $contentid;
    public $contentname;
    public $type;
    public $genre;
    public $poster;
    public $link;
    public $castinfo;
    public $date;



    public function setContentInfo($contentid, $contentname, $type, $genre, $poster, $link, $castinfo, $date)
    {
        $this->id = $contentid;
        $this->name = $contentname;
        $this->type = $type;
        $this->genre = $genre;
        $this->poster = $poster;
        $this->link = $link;
        $this->castinfo = $castinfo;
        $this->date = $date;
    }
    public function getCid()
    {
        return $this->id;
    }
    public function getCname()
    {
        return $this->name;
    }
    public function getCtype()
    {
        return $this->type;
    }
    public function getCgenre()
    {
        return $this->genre;
    }
    public function getCposter()
    {
        return $this->poster;
    }
    public function getClink()
    {
        return $this->link;
    }
    public function getCcast()
    {
        return $this->castinfo;
    }
    public function getCdate()
    {
        return $this->date;
    }

    public function insertContent($contentid, $contentname, $type, $genre, $poster, $link, $castinfo, $date)
    {

        try {
            //this function will be needing to insert user in login table
            $sql = "insert into content (contentid,contentname,type,genre,poster,link,castinfo,date) values ('" . $contentid . "','" . $contentname . "','" . $type . "','" . $genre . "','" . $poster . "','" . $link . "','" . $castinfo . "','" . $date . "');";
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
}

<?php
require_once INCLUDES . "DataAccess.php";
class ContentCreatorModel
{


    public $Email;
    public $Userid;
    public $passward;

    public function setContentCreatorInfo($Email, $Userid, $password)
    {
        $this->id = $Email;
        $this->name = $Userid;
        $this->genre = $password;
    }
    public function getTotalNumberOfContentCreator()
    {
        $sql = "SELECT * FROM contentcreator";
        $db = new DataAccess();

        $result = $db->getData($sql);

        return $result->num_rows;
    }
}

<?php
class AdminModel
{

    public $name;
    public $id;
    public $password;
    public $email;
    public $phone;

    function setAdminInformation($name, $id, $password, $email, $phone)
    {
        $this->$name = $name;
        $this->$id = $id;
        $this->$password = $password;
        $this->$email = $email;
        $this->$phone = $phone;
    }
}

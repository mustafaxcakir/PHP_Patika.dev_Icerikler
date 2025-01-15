<?php

class Hash{

    public function md5Hash($string)
    {
        return md5($string);
    }

    public function sha1Hash($string)
    {
        return sha1($string);
    }
}

class User extends Hash{

    public $username;
    public $password;

    public function saveUser($username, $password){

        $this->username = $username;
        $this->password = $this->md5Hash($password);

    }

    public function showUser(){

        echo $this->username . "<br>" . $this->password;

    }

}

$User = new User();

$User->saveUser("mustafacakir", "123456");
$User->showUser();

?>
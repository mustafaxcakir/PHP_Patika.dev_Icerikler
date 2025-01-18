<?php

class User
{

    public function List()
    {
        $UserModel = new UserModel();
        $data = $UserModel->listUsers();

      require DIR. '/view/UserList.php';
    }


}
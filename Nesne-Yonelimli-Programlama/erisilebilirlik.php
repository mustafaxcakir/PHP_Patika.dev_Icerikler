<?php

/*
Erişilebilirlik

public
Her yerden erişilebilir.

private
Sadece sınıf içerisinden erişilebilir.

protected
Dışarıdan erişilmez.
Sınıf içinde erişilebilir.
Miras alma yoluyla kullanılabilir.

*/

class User{
    public $email;
    private $name;
    protected $surname;


    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname): void
    {
        $this->surname = $surname;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }


}

$User = new User();

$User->setName("Mustafa");
$User->setSurname("Yilmaz");
$User->setEmail("email@deneme.com");

echo $User->getEmail();
echo "<br>";
echo $User->getName();
echo "<br>";
echo $User->getSurname();

?>


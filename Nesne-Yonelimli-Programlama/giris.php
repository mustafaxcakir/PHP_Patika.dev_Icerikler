<?php


class User {

  public $isim;
  public $soyisim;
  public $eposta;
  public $yas;

  public function addUser($isim, $soyisim, $eposta, $yas)
  {
      $this->isim = $isim;
      $this->soyisim = $soyisim;
      $this->eposta = $eposta;
      $this->yas = $yas;
  }

}

$User = new User();
$User->addUser("Wusta", "Yilmaz", "email@deneme.com", 25);
echo $User->isim . " " . $User->soyisim . " " . $User->eposta . " " . $User->yas;

?>
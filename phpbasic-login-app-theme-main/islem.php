<?php
session_start();

include 'fonksiyon/helper.php';

$user = [
    'mustafacakir' => 
    [
        'eposta' => 'mustafa@can.com',
        'password' => '123456'
    ],

    'ahmetcan' => 
    [
        'eposta' => 'ahmet@can.com',
        'password' => '654321'
  ]
];

if (get('islem') == 'giris') {
    $_SESSION['username'] = post('username');
    $_SESSION['password'] = post('password');

    if (!post('username')){
        $_SESSION['error'] = 'Lütfen kullanıcı adınızı giriniz.';
        header('Location: login.php');
        exit;
    }elseif (!post('password')){
        $_SESSION['error'] = 'Lütfen şifrenizi giriniz.';
        header('Location: login.php');
        exit;
    }else {
        if (array_key_exists(post('username'),$user)){
            if($user[post('username')]['password'] == post('password')){

                $_SESSION['login'] = true;
                $_SESSION['kullanici_adi'] = post('username');
                $_SESSION['eposta'] = $user[post('username')]['eposta'];
                header('Location:index.php');
                exit();
 
            }else{
                $_SESSION['error'] = 'Kullanıcı adınız sistemde kayıtlı değil.'; 
                header('Location: login.php');
                exit(); 
            }
        }else {
            $_SESSION['error'] = 'Kullanıcı adınız sistemde kayıtlı değil.'; 
            header('Location: login.php');
            exit();
        }
    }
}

$hakkimda = post('hakkimda');

if ($hakkimda) {
    // Dosyayı yazmaya çalış
    $islem = file_put_contents('./db/'.$_SESSION['kullanici_adi'].'.txt', htmlspecialchars($hakkimda));

    if ($islem === false) {
        // Yazma işlemi başarısız olduysa, hata mesajını göster
        $_SESSION['error'] = 'Dosya yazma hatası. Yazma işlemi başarısız oldu.';
        header('Location: index.php?islem=false');
        exit;
    } else {
        // Yazma başarılı olduysa
        header('Location: index.php?islem=true');
        exit;
    }
} else {
    $_SESSION['error'] = 'Veri boş olamaz.';
    header('Location: index.php?islem=false');
    exit;
}


if (get('islem') == 'cikis') {
    session_destroy(); // Oturumu sonlandırır
    session_start(); // Oturum verilerini temizler
    header('Location: login.php?islem=true');
    exit;
}

    <?php
    error_reporting(E_ALL);

    require 'config.php';
    require DIR. '/helpers/app.php';
    require DIR. '/controller/User.php';
    require DIR. '/model/UserModel.php';
    require DIR. '/view/UserList.php';

    $route = get('route');

    $route = explode('@', $route);

    $Class = $route[0];
    $Method = $route[1];

    $Run = new $Class();
    $Run->$Method();

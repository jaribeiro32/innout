<?php
loadModel('Login');
$exception = null;
$user = new User([]);
$user->email = null;

if (count($_POST) > 0) {

    $login = new Login($_POST);
    try{

        $user = $login->checkLogin();
        echo "Há muleque #### Usuário {$user->name} logado";
    }catch(AppException $e){
        $exception = $e;
    }
}


loadView('login', $_POST + ['exception' => $exception, 'email' => $user->email]);

<?php
loadModel('Login');

if (count($_POST) > 0) {

    $login = new Login($_POST);
    try{

        $user = $login->checkLogin();
        echo "Há muleque #### Usuário {$user->name} logado";
    }catch(AppException $e){
        echo $e->getMessage();
    }
}


loadView('login', $_POST);

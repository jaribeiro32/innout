<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');
require_once(dirname(__FILE__, 2) . '/src/models/User.php');

$user  = new User(['name' => 'Jhonny', 'email' => 'jaribeiro32@gmail.com']);
//echo $user->getSelect('name' => 'Jhow', 'nome, email');


print_r(User::get(['name' => 'Chaves'], 'name, email'));
echo '<br><br><br><br>';
//echo User::getSelect(['name' => 'Jhow', 'email'=> 'sunofabith']);
foreach(User::get([], 'name') as $user){
    echo $user->name;
    echo '<br>';
}
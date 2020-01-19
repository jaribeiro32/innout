<?php

loadModel('User');

class Login extends Model
{
    public function checkLogin()
    {
        $user = User::getOne(['email' => $this->email]);

        if ($user) {
            if (password_verify($this->password, $user->password)) {
                if ($user->end_date) {
                    throw new AppException('Usuário sem acesso ao sistema');
                }
                return $user;
            }
        }

        throw new AppException('Usuário e senha inválidos');
    }
}

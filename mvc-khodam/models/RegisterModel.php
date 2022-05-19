<?php
namespace App\models ;
use App\core\Model;
class RegisterModel extends Model{

    public string $firstname ;
    public string $lastname ;
    public string $email ;
    public string $password;
    public string $passwordConfirm ;
     
    public function regiter()
    {

    }
    public function roules(): array
    {
        return [
            'firstname' =>[self::RULE_REQUIRED],
            'lastname' =>[self::RULE_REQUIRED],
            'email' =>[self::RULE_REQUIRED , self::RULE_EMAIL],
            'password' =>[self::RULE_REQUIRED ,[self::RULE_MIN , 'min'=>8],[self::RULE_MAX , 'max' => 24]],
            'paswordconfirm' =>[self::RULE_REQUIRED,[self::RULE_MATCH , 'match'=>'pasword']
        ];
        
    }
}

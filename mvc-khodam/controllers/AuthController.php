<?php 
namespace App\controllers ; 
use App\core\Controller ;
use App\core\Request ;
use App\model\RegisterModle ;
class AuthController extends Controller{

    public function login(Request $request)
    {
        if ($request->isPost()){
            $registerModel = new RegisterModel() ;
            return "handle submited data " ;
        }
            $this->setLayout('Auth') ;
            return $this->render('login') ;
    }  
    public function register(Request $request)
    {
        if ($request->isPost()){

            return "handle submited data " ;
        }
            $this->setLayout('Auth') ;
            return $this->render('register') ;
    }
    

}
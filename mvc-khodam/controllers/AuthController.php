<?php 
namespace App\controllers ; 
use App\core\Controller ;
use App\core\Request ;
use App\core\Model ;
use App\models\RegisterModel;

class AuthController extends Controller{

    public function login(Request $request)
    {
        
            
        
            $this->setLayout('Auth') ;
            return $this->render('login') ;
    }  

    public function register(Request $request)
    {
        $registerModel = new RegisterModel() ;
        if ($request->isPost()){
            $registerModel->loadData($request->getBody()) ;
            echo "<pre>" ;
                var_dump($registerModel);
            echo "</pre>" ;
            exit ;

            // if ($registerModel->validation() && $registerModel->register()){
            //     return "success" ;
            // }
            return $this->render('register');
        }
            
        
            $this->setLayout('Auth') ;
            return $this->render('register');
    }
    //hj+Q8f6mt3cpxoKv6DuW2VpnZzY0PDufsrj2b70aqVQ


}
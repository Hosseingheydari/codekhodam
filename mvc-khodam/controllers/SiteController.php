<?php
namespace App\controllers ;

use App\core\Application;
use App\core\Controller ;
use App\core\Request;

class SiteController extends Controller{

    public function contact()
    {
        $params=[
            "name"=>"hossein" 
        ];
       
        return $this->render('contact',$params) ;
        
    }
    public function home()
    {
        $params=[
            "name"=>"hossein" 
        ];
        return $this->render('home',$params) ;
    }
    public function handleContact(Request $request)
    {
        $body =  $request->getBody();
        var_dump($_POST);
         
        
    }
}
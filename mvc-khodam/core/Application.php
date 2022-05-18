<?php
namespace App\core ;
class Application {
    public $router ;
    public $request ;
    public RESPONSE $response ; 
    public static string $ROOT_DIR ;
    public static $app ;
    public Controller $controller ;
    public function __construct($rootPath)
    {
        self::$app =$this;
        self::$ROOT_DIR = $rootPath ;
        $this->request = new Request() ;
        $this->response = new Response() ;
        $this->router = new Router($this->request,$this->response);
    }
    public function run()
    {

        echo $this->router->resolve() ;
    }
}
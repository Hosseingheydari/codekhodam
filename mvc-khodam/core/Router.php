<?php
namespace App\core ;
class Router{
    public $routes  ;
    public $request ;
    public $response ;
    public function __construct(Request $request,Response $response )
    {
        $this->request =$request ;
        $this->response = $response ;
    }
    public function get($path , $callback)
    {
        // $this->routes['get']["hsdfhvkd"] ="ssss"
      return  $this->routes['get'][$path]=$callback ;
      
    }
    public function post($path ,$callback){

        return $this->routes['post'][$path] =$callback ;
    }
    public function resolve()
    {
        $path =$this->request->getpath() ;
        $method = $this->request->method() ;
        $callback =$this->routes[$method][$path] ?? false;
        if (is_string($callback)){
            // var_dump($_POST);
            // echo "<pre>" ;
            // var_dump($this->routes) ;
            // echo "</pre>" ;
           return $this->renderView($callback,$params=[]);
         
        }
        if($callback===false){
            $this->response->setStatusCode("404") ;
           
            // var_dump($this->request->method()) ;
            return $this->renderView(404);  
           
        }
        if(is_array($callback)){
            Application::$app->controller =new $callback[0]() ;
            $callback[0] = Application::$app->controller  ;
        }
        var_dump($callback) ;
        return call_user_func($callback,$this->request) ;    
    }
    public function renderView($view,$params=[])
    {
        $layoutContent = $this->layoutContent();
        $viewContent = $this->renderOnlyView($view,$params) ;
        return str_replace('{{content}}', $viewContent ,$layoutContent);
    }
    // public function renderContent($error)
    // {
    //     $layoutContent = $this->layoutContent();
    //     return str_replace('{{content}}' ,$error,$layoutContent);
    // }
    protected function layoutContent()

    {
        $layout = Application::$app->controller->layout ;
        ob_start();
        include_once Application::$ROOT_DIR."/views/layouts/$layout.php" ;
        return ob_get_clean();
    }
    protected function renderOnlyView($view,$params)
    {
        // var_dump($params);
        ob_start();
        include_once Application::$ROOT_DIR."/views/$view.php" ;
        return ob_get_clean();
    }
}

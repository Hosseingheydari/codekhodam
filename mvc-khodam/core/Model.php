 <?php
namespace App\core ;

abstract class Model{
    public const RULE_REQUIRED = 'required' ;
    public const RULE_EMAIL = 'required' ;
    public const RULE_MIN = 'min' ;
    public const RULE_MAX = 'max' ;
    public const RULE_MATCH = 'matched' ;


    public function loadData($data)
    {
        foreach ($data as $key=>$value){

            if(property_exists($this,$key)){
                $this->{$key}=$value ;
            }
        }
    }
    abstract public function roules():array
    {
        
    }
    public function validation()
    {

    }
    public function register()
    {

    }
}

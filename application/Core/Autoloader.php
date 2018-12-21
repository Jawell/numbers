<?php
class Autoloader
{
    protected static $instance;
    protected static $map = [];

    protected function __construct(){
        spl_autoload_register([$this, 'load']);
    }

    public function addNamspacePath($namespace, $root_path){
        self::$map[$namespace] = $root_path;
    }

    public function load($classname){
        if($path = $this->getClassPath($classname) ){
            require_once $path;
        }
    }

    protected function getClassPath($classname){
        $class_path = $classname . '.php';
        if( !empty(self::$map) ){
            foreach(self::$map as $name => $path){
                $lookup_pattern = sprintf('/^%s/', $name);
                if(preg_match($lookup_pattern, $classname)){
                    $class_path = preg_replace($lookup_pattern, $path, $class_path);
                    break;
                }
            }
        }

        return realpath(str_replace('\\', '/', $class_path));
    }

    public static function getInstance(){
        if(null === self::$instance){
            self::$instance = new self;
        }

        return self::$instance;
    }

    private function __clone(){}
    private function __wakeup(){}
}

return Autoloader::getInstance();

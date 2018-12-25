<?php

/**
 * Class Autoloader
 */
class Autoloader
{
    /**
     * @var
     */
    protected static $instance;
    /**
     * @var array
     */
    protected static $map = [];

    /**
     * Define "load" as autoloader method
     *
     * Autoloader constructor.
     */
    protected function __construct()
    {
        spl_autoload_register([$this, 'load']);
    }

    /**
     * Add namespace to autoloader map
     *
     * @param $namespace
     * @param $root_path
     */
    public function addNamespacePath($namespace, $root_path)
    {
        self::$map[$namespace] = $root_path;
    }

    /**
     * Autoloader
     *
     * @param $className
     */
    public function load($className)
    {
        if ($path = $this->getClassPath($className)) {
            require_once $path;
        }
    }

    /**
     * Get path to php file
     *
     * @param $className
     * @return bool|string
     */
    protected function getClassPath($className)
    {
        $class_path = $className . '.php';
        if (!empty(self::$map)) {
            foreach (self::$map as $name => $path) {
                $lookup_pattern = sprintf('/^%s/', $name);
                if (preg_match($lookup_pattern, $className)) {
                    $class_path = preg_replace($lookup_pattern, $path, $class_path);
                    break;
                }
            }
        }

        return realpath(str_replace('\\', '/', $class_path));
    }

    /**
     * Get instance if exist
     *
     * @return Autoloader
     */
    public static function getInstance()
    {
        if (null === self::$instance) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}

return Autoloader::getInstance();

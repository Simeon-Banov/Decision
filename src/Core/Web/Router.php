<?php
namespace Decision\Core\Web;

/**
 * @author Simeon Banov <svbmonny@gmail.com>
 */
class Router {
    
    /**
     * Singleton design pattern
     * @var Decision\Core\Web\Router
     * @author Simeon Banov <svbmony@gmail.com>
     */
    private static $instance = NULL;
    
    /**
     * Singleton design pattern
     * @author Simeon Banov <svbmony@gmail.com>
     */
    private function __construct() {}
    
    /**
     * Singleton design pattern
     * @return Decision\Core\Web\Router
     * @author Simeon Banov <svbmony@gmail.com>
     */
    public static function getInstance() {
        if(self::$instance == NULL) {
            self::$instance = new Router();
        }
        return self::$instance; 
    }
    
    /**
     *
     * @var array
     * @author Simeon Banov <svbmony@gmail.com>
     */
    private $routes = array();
    
    public function set($uri) {
        
    }
    
}
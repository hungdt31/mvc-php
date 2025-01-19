<?php
class App {
    private $__controller, $__action, $__params;
    function __construct()
    {
        global $routes;
        if (!empty($routes['default_controller'])) {
            $this->__controller = $routes['default_controller'];
        }
        // default action for controller
        $this->__action = 'index';
        $this->__params = [];
        $this->handleUrl();
    }
    public function getUrl()
    {
        if (!empty($_SERVER['PATH_INFO'])) {
            $url = $_SERVER['PATH_INFO'];
        }
        else {
            $url = '/';
        }
        return $url;
    }
    public function handleUrl() {
        $url = $this->getUrl();
        $urlArr = array_filter(explode('/', $url));
        $urlArr = array_values($urlArr);

        // handle controller
        if (!empty($urlArr[0])){
            // convert to lowercase string
            $this->__controller = ucfirst($urlArr[0]);
            // file_exists using for root directory, require_once using for current directory
        } else {
            $this->__controller = ucfirst($this->__controller);
        }
        if (file_exists('app/controllers/'.$this->__controller.'.php')) {
            require_once 'controllers/'.($this->__controller).'.php';
            // check class $this->__controller exist
            if (class_exists($this->__controller)) {
                $this->__controller = new $this->__controller();
                unset($urlArr[0]);
            } else {
                $this->loadError();
            }
        } else {
            $this->loadError();
        }
        // handle action
        if (!empty($urlArr[1])){
            $this->__action = ucfirst($urlArr[1]);
            unset($urlArr[1]);
        }
        // handle params
        $this->__params = array_values($urlArr);

        // check method exist
        if (method_exists($this->__controller, $this->__action)) {
            call_user_func_array([$this->__controller, $this->__action], $this->__params);
        } else {
            $this->loadError();
        }
//        echo '<pre>';
//        print_r($this->__params);
//        echo '</pre>';
    }
    public function loadError($name='404')
    {
        require_once 'errors/'.$name.'.php';
    }
}

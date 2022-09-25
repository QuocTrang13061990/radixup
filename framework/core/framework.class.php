<?php
// framework/core/framework.class.php

class framework {

    public static function run() {
        self::init();
        self::autoload();
        self::dispath();
    }

    // Initialization
    private static function init() {
        // Define path constants
        define('DS', DIRECTORY_SEPARATOR);
        define('ROOT_PATH', getcwd() . DS);
        define('APP_PATH', ROOT_PATH . 'application' . DS);
        define('FRAMEWORK_PATH', ROOT_PATH . 'framework' . DS);
        define('PUBLIC_PATH', ROOT_PATH . 'public' . DS);

        define('CONFIG_PATH', APP_PATH . 'config' . DS);
        define('CONTROLLER_PATH', APP_PATH . 'controller' . DS);
        define('MODEL_PATH', APP_PATH . 'model' . DS);
        define('VIEW_PATH', APP_PATH . 'view' . DS);

        define('CORE_PATH', FRAMEWORK_PATH . 'core' . DS);
        define('DB_PATH', FRAMEWORK_PATH . 'database' . DS);
        define('HELPER_PATH', FRAMEWORK_PATH . 'helpers' . DS);
        define('LIB_PATH', FRAMEWORK_PATH . 'libraries' . DS);
        define('UPLOAD_PATH', PUBLIC_PATH . 'uploads' . DS);

        // Define platform, controller, action, for example: index.php?p=admin&c=Goods&a=add
        define("PLATFORM", isset($_REQUEST['p']) ? $_REQUEST['p'] : 'home');
        define("CONTROLLER", isset($_REQUEST['c']) ? $_REQUEST['c'] : 'Index');
        define("ACTION", isset($_REQUEST['a']) ? $_REQUEST['a'] : 'index');
        define("CURR_CONTROLLER_PATH", CONTROLLER_PATH . PLATFORM . DS);
        define("CURR_VIEW_PATH", VIEW_PATH . PLATFORM . DS);

        // Load core classes
        require CORE_PATH . "Controller.class.php";
        require CORE_PATH . "Loader.class.php";
        require DB_PATH . "Mysql.class.php";
        require CORE_PATH . "Model.class.php";

        // Load configuration file
        // $GLOBALS['config'] = include CONFIG_PATH . "config.php";
        // Start session
        session_start();
    }

    private static function autoload() {
        spl_autoload_register(array(__CLASS__, 'load'));
    }

    private static function load($className){
        // $className = xxxController or xxxModel
        if (substr($className, -10) === 'Controller') {
            // Controller
            require_once CURR_CONTROLLER_PATH . $className . '.class.php';
        }
        if (substr($className, -5) === 'Model') {
            // Model
            require_once MODEL_PATH . $className . '.class.php';
        }
    }
    private static function dispath() {
    }
}
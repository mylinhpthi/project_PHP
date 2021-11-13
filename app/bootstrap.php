<?php
    session_start();
    define("BASE_PATH",__DIR__);
    define('ENCRYPTION_KEY', '!@@#%_my_serect_key_for_encryption_@#$!&');
    require "../vendor/autoload.php";
    use Illuminate\Config\Repository;
    $configPath = BASE_PATH.DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR;
    $config = new Repository();
    foreach(glob($configPath."*.php") as $file){
        $config->set(
            basename($file, '.php'),
            require_once "$file"
        );
    }

    $routersPath = BASE_PATH.DIRECTORY_SEPARATOR."routers".DIRECTORY_SEPARATOR;
    foreach(glob($routersPath."*.php") as $phpFile){
        require_once "$phpFile";
    }

    $dbConfig = $config->get('app.db');

     use Illuminate\Database\Capsule\Manager as Capsule;
    $capsule = new Capsule();
    $capsule->addConnection($dbConfig);
    $capsule->setAsGlobal();
    $capsule->bootEloquent();
?> 
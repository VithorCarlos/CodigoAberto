<?php

/**
 * SITE CONFIG
 */
    define("SITE",[
        "name" => "TutoMaster",
        "desc" => "Aprenda tudo sobre tutoriais em um só lugar!",
        "lang" => "pt_BR",
        "domain" => "https://www.tutomaster.com.br",
        "author" => "TutoMaster",
        "root" => "http://localhost/tutomaster/project"
    ]);

    /**
     * SITE MINIFY
     */

     if($_SERVER["SERVER_NAME"]=="localhost")
     {
         require __DIR__ . "/Minify.php";
     }

     /**
      * DATABASE CONNECT
      */

      define("DATA_LAYER_CONFIG", [
        "driver" => "mysql",
        "host" => "localhost",
        "port" => "3306",
        "dbname" => "tutomaster_db",
        "username" => "root",
        "passwd" => "",
        "options" => [
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_CASE => PDO::CASE_NATURAL
        ]
    ]);

    /**
     * SOCIAL PAGE
    */

    define("SOCIAL", [
        "facebook_page" => "TutoMasterYT",
        "facebook_author" => "TutoMaster",
        "facebook_appId" => "",
        "twitter_page" => "@_TutoMaster",
        "twitter_author" => "TutoMaster"
    ]);

    /**
     * MAIL CONNECT 
     */

    define("MAIL", []);

    /*
     * FACEBOOK LOGIN
     */

    define("FACEBOOK_LOGIN",[]);

    /*
     * GOOGLE LOGIN
     */

     define("GOOGLE_LOGIN", []);



?>
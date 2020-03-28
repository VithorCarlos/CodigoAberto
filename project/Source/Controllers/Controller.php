<?php

namespace Source\Controllers;

use CoffeeCode\Optimizer\Optimizer;
use CoffeeCode\Router\Router;
use League\Plates\Engine;

abstract class Controller
{
    /**@var Router*/
    protected $router;
    /**@var Engine*/
    protected $view;
    /**@var Optimizer*/
    protected $seo;

    public function __construct($router)
    {
        $this->router = $router;

        $this->view = Engine::create(dirname(__DIR__, 2). "/views", "php");
        $this->view->addData(["router" => $this->router]);

        $this->seo = new Optimizer;
        $this->seo->openGraph(site("name"),site("locale"), "article")
                ->publisher(social("facebook_page"), social("facebook_author"))
                ->twitterCard(social("twitter_page"),social("twitter_author"), site("domain"))
                ->facebook(social("facebook_appId"));
    }

    /**
     * @param string $param
     * @param string $values
     * return string
     */

    public function ajaxResponse(string $param, array $values): string
    {
       return json_encode([$param => $values]); 
    }
}
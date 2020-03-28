<?php

namespace Source\Controllers;

class Web extends Controller
{
    public function construct($router)
    {
        parent::__construct($router);

        if (!empty($_SESSION["user"]))
        {
            $this->router->redirect("app.home");
        }
    }

    public function login(): void
    {
        $head = $this->seo->optimize(
            "Faça login para continuar | ". site("name"),
            site("desc"),
            $this->router->route("web.login"),
            routeImage("Login")    
        )->render();

        echo $this->view->render("theme/login", ["head" => $head]);
    }

    public function register(): void
    {
        $head = $this->seo->optimize(
            "Crie sua conta para começar | ". site("name"),
            site("desc"),
            $this->router->route("web.register"),
            routeImage("Register")    
        )->render();

        echo $this->view->render("theme/register", ["head" => $head]);
    }

    public function forget(): void
    {
       
    }

    
    public function reset(): void
    {
       
    }

}

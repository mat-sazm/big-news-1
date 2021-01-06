<?php 

if (!function_exists("url"))
{
    function url( string $routeName, bool $absolute = false ): string
    {
        global $routes;
        global $env;
        global $base;

        $url = "";
        $domain = "";

        if ($absolute) 
        {
            // Le schema : http ou https
            $scheme = "http";
            if (isset($_SERVER['REQUEST_SCHEME'])) {
                $scheme = $_SERVER['REQUEST_SCHEME'];
            }
            
            // Le domaine : site.com
            $host = "127.0.0.1";
            if (isset($_SERVER['HTTP_HOST'])) {
                $host = $_SERVER['HTTP_HOST'];
            }
        
            // Création de la base de l'adresse absolue
            $domain = $scheme."://".$host;
        }

        if (is_array($routes))
        {
            foreach ($routes as $route)
            {
                if ($route[0] == $routeName)
                {
                    $url = $route[1];

                    if ($env == "dev")
                    {
                        $url = $base.$route[1];
                    }

                    if (substr($url, -1) === "/")
                    {
                        $url = substr($url, 0, -1);
                    }
                    
                    break;
                }
            }
        }

        return $domain.$url;
    }
}
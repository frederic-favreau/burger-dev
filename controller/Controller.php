<?php

abstract class Controller
{
    private static $loader;
    private static $twig;
    private static $render;

    private static function getLoader()
    {
        if (self::$loader === null) {
            self::$loader = new \Twig\Loader\FilesystemLoader('./view');
        }
        return self::$loader;
    }

    protected static function getTwig(){
        if (self::$twig === null) {
          $loader = self::getLoader();
          self::$twig = new \Twig\Environment($loader);
          self::$twig->addGlobal('session', $_SESSION);
          self::$twig->addGlobal('get', $_GET);
        
          self::$twig->addFunction(new \Twig\TwigFunction('path', function ($routeName) {
          global $router;
          return $router->generate($routeName);
          }));
        }
         return self::$twig;
        }

    protected static function setRender(string $template, $datas)
    {
        //LINKS
        echo self::getTwig()->render($template, $datas);
    }

    protected static function getRender($template, $datas)
    {
        if (self::$render === null) {
            self::setRender($template, $datas);
        }
        return self::$render;
    }
}

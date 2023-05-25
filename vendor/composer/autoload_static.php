<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit53797d8e81503f0b7342e733925464b1
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
    );

    public static $classMap = array (
        'AltoRouter' => __DIR__ . '/..' . '/altorouter/altorouter/AltoRouter.php',
        'Category' => __DIR__ . '/../..' . '/class/Category.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Controller' => __DIR__ . '/../..' . '/controller/Controller.php',
        'Favorite' => __DIR__ . '/../..' . '/class/Favorite.php',
        'HomeController' => __DIR__ . '/../..' . '/controller/HomeController.php',
        'Ingredient' => __DIR__ . '/../..' . '/class/Ingredient.php',
        'Model' => __DIR__ . '/../..' . '/model/Model.php',
        'Recipe' => __DIR__ . '/../..' . '/class/Recipe.php',
        'RecipeController' => __DIR__ . '/../..' . '/controller/RecipeController.php',
        'RecipeModel' => __DIR__ . '/../..' . '/model/RecipeModel.php',
        'SearchController' => __DIR__ . '/../..' . '/controller/SearchController.php',
        'SearchModel' => __DIR__ . '/../..' . '/model/SearchModel.php',
        'User' => __DIR__ . '/../..' . '/class/User.php',
        'UserController' => __DIR__ . '/../..' . '/controller/UserController.php',
        'UserModel' => __DIR__ . '/../..' . '/model/UserModel.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit53797d8e81503f0b7342e733925464b1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit53797d8e81503f0b7342e733925464b1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit53797d8e81503f0b7342e733925464b1::$classMap;

        }, null, ClassLoader::class);
    }
}

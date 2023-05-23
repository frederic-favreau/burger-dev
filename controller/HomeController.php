<?php

class HomeController extends Controller

{
    public function homePage()
    {
        $recipeModel = new RecipeModel();
        $recipes = $recipeModel->getLastTenRecipes();
        echo self::getRender('homepage.html.twig', ['recipes' => $recipes]);
    }
}

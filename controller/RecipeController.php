<?php
class RecipeController extends Controller
{

    public function getOne($id){
        global $router;
        $model = new RecipeModel();
        $recipe = $model->getOneRecipe($id);
        $oneRecipe = $router->generate('baseRecipe');
        echo self::getRender('recipe.html.twig', ['recipe' => $recipe,'oneRecipe' => $oneRecipe]);
    }

    public function createRecipe()
    {
        global $router;
        if (!$_POST) {
            echo self::getRender('addrecipe.html.twig', []);
        } else {
            if (isset($_POST['submit'])) {
                $name = $_POST['name'];
                $preparationTime = $_POST['preparationTime'];
                $content = $_POST['content'];
                $author = $_SESSION['uid'];

                $recipe = new Recipe([
                    'name' => $name,
                    'preparationTime' => $preparationTime,                    'content' => $content,
                    'author' => $author,
                ]);

                $model = new RecipeModel();
                $model->addRecipe($recipe);
                header('Location: ' . $router->generate('home'));
            } else {
                echo 'Pas marcher, rÃ©essaye donc encore une fois';
            }
        }
    }
}

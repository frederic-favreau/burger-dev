<?php
class RecipeModel extends Model
{
    public function getLastTenRecipes()
    {
        $recipes = [];

        $req = $this->getDb()->query('SELECT `recipe_id`, `description`, `name` FROM `recipe` ORDER BY `recipe_id` DESC LIMIT 10');

        while ($recipe = $req->fetch(PDO::FETCH_ASSOC)) {
            $recipes[] = new Recipe($recipe);
        }

        $req->closeCursor();

        return $recipes;
    }

    public function addRecipe (Recipe $recipe){
        $author = $recipe->getAuthor();
        $name = $recipe->getName();
        $preparationTime = $recipe->getPreparationTime();
        $content = $recipe->getContent();

        $req = $this->getDb()->prepare('INSERT INTO `recipe`(`author`, `name`, `preparationTime`, `content`) VALUES (:author, :name, :preparationTime, :content)');

        $req->bindParam('author', $author, PDO::PARAM_INT);
        $req->bindParam('name', $name, PDO::PARAM_STR);
        $req->bindParam('preparationTime', $preparationTime, PDO::PARAM_STR);
        $req->bindParam('content', $content, PDO::PARAM_STR);

        $req->execute();
    }
}

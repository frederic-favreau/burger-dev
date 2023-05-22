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
}

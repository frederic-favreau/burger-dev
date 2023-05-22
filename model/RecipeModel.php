<?php
class RecipeModel extends Model {
    public function getLastTenRecipes() {
        $recipes = [];

        $req = $this->getDb()->query('SELECT `recipe_id`, `description`, `name` FROM `recipe` ORDER BY `recipe_id` DESC LIMIT 10');

        while($recipes = $req->fetch(PDO::FETCH_ASSOC)) {
            $recipes[] = new Recipe($recipes);
            $req->closeCursor();

        return $recipes;
        }
    }
}
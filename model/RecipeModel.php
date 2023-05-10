<?php
class PostModel extends Model {
    public function getLastTenRecipes() {
        $recipes = [];

        $req = $this->getDb()->query('SELECT * FROM `POST` ORDER BY `id` DESC LIMIT 10');

        while($recipes = $req->fetch(PDO::FETCH_ASSOC)) {
            $recipes[] = new Recipe($recipes);
            $req->closeCursor();

        return $recipes;
        }
    }
}
<?php

class SearchModel extends Model
{

    public function getSearchResult($searchTerm)
    {

        $searchTerm = '%' . strtolower($searchTerm) . '%';

        $req = $this->getDb()->prepare("SELECT `recipeId`, `author`, `name`, `preparationTime`, `content`, `publicationDate` 
        FROM `recipe`  
        WHERE `name` LIKE :search_term 
        OR `preparationTime` LIKE :search_term 
        OR `content` LIKE :search_term  
        ORDER BY recipeId");

        $req->bindValue(':search_term', $searchTerm, PDO::PARAM_STR);
        $req->execute();

        $result = $req->fetchAll(PDO::FETCH_ASSOC);

        $req->closeCursor();
        return $result;
    }
}

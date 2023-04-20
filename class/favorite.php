<?php
class favorite
{

    private $userId;
    private $recipeId;
    private $favoriteId;

    public function __construct(array $datas)
    {
        $this->hydrate($datas);
    }

    private function hydrate(array $datas)
    {
        foreach ($datas as $key => $value) {
            $method = 'set' . ucfirst($key);

            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    //GETTERS
    public function getRecipeId()
    {
        return $this->recipeId;
    }
    public function getUserId()
    {
        return $this->userId;
    }
    public function getFavoriteId()
    {
        return $this->favoriteId;
    }

    //SETTERS  
    public function setRecipeId(int $recipeId)
    {
        $this->recipeId = $recipeId;
    }
    public function setUserId(int $userId)
    {
        $this->userId = $userId;
    }
    public function setFavoriteId(int $favoriteId)
    {
        $this->favoriteId = $favoriteId;
    }
}

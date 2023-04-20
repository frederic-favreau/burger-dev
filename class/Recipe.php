<?php
class recipe
{
    private $name;
    private $description;
    private $preparationTime;
    private $cookingTime;
    private $numberOfServings;
    private $publication_date;
    private $recipeId;
    private $userId;

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
    public function getName()
    {
        return $this->name;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getPreparationTime()
    {
        return $this->preparationTime;
    }
    public function getCookingTime()
    {
        return $this->cookingTime;
    }
    public function getNumberOfServings()
    {
        return $this->numberOfServings;
    }
    public function getPublication_date()
    {
        return $this->publication_date;
    }
    public function getRecipeId()
    {
        return $this->recipeId;
    }
    public function getUserId()
    {
        return $this->userId;
    }

    //SETTERS
    public function setName(string $name)
    {
        $this->name = $name;
    }
    public function setDescription(string $description)
    {
        $this->description = $description;
    }
    public function setPreparationTime(DateTime $preparationTime)
    {
        $this->preparationTime = $preparationTime;
    }
    public function setCookingTime(DateTime $cookingTime)
    {
        $this->cookingTime = $cookingTime;
    }
    public function setNumberOfServings(int $numberOfServings)
    {
        $this->numberOfServings = $numberOfServings;
    }
    public function setRecipeId(int $recipeId)
    {
        $this->recipeId = $recipeId;
    }
    public function setUserId(int $userId)
    {
        $this->userId = $userId;
    }
}

<?php
class Recipe
{
    private $name;
    private $description;
    private $content;
    private $preparationTime;
    private $cookingTime;
    private $numberOfServings;
    private $publication_date;
    private $recipeId;
    private $author;

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
    public function getContent()
    {
        return $this->content;
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
    public function getRecipe_id()
    {
        return $this->recipeId;
    }
    public function getAuthor()
    {
        return $this->author;
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
    public function setContent(string $content)
    {
        $this->content = $content;
    }
    public function setPreparationTime(string $preparationTime)
    {
        $this->preparationTime = $preparationTime;
    }
    public function setCookingTime(string $cookingTime)
    {
        $this->cookingTime = $cookingTime;
    }
    public function setNumberOfServings(int $numberOfServings)
    {
        $this->numberOfServings = $numberOfServings;
    }
    public function setRecipe_id(int $recipeId)
    {
        $this->recipeId = $recipeId;
    }
    public function setAuthor(int $author)
    {
        $this->author = $author;
    }
}

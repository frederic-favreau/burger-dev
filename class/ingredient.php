<?php
class ingredient
{

    private $name;
    private $ingredientId;

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
    public function getIngredientId()
    {
        return $this->ingredientId;
    }

    //SETTERS  
    public function setName(int $name)
    {
        $this->name = $name;
    }
    public function setIngredientId(int $ingredientId)
    {
        $this->ingredientId = $ingredientId;
    }

}

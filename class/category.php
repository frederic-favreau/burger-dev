<?php
class Category
{

    private $name;
    private $categoryId;

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
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    //SETTERS  
    public function setName(string $name)
    {
        $this->name = $name;
    }
    public function setCategoryId(int $categoryId)
    {
        $this->categoryId = $categoryId;
    }

}

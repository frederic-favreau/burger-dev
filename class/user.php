<?php
class User
{
    private $lastname;
    private $firstname;
    private $email;
    private $password;
    private $uid;

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
    public function getLastname()
    {
        return $this->lastname;
    }
    public function getFirstname()
    {
        return $this->firstname;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getUid()
    {
        return $this->uid;
    }

    //SETTERS
    public function setLastname(string $lastname)
    {
        $this->lastname = $lastname;
    }
    public function setFirstname(string $firstname)
    {
        $this->firstname = $firstname;
    }
    public function setEmail(string $email)
    {
        $this->email = $email;
    }
    public function setUid(int $uid)
    {
        $this->uid = $uid;
    }
    public function setPassword(string $password)
    {
        $this->password = $password;
    }
}

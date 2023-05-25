<?php //MODEL
class UserModel extends Model
{
    public function save(User $user)
    {
        $firstname = $user->getFirstname();
        $lastname = $user->getLastname();
        $email = $user->getEmail();
        $password = $user->getPassword();


        $req = $this->getDb()->prepare("INSERT INTO `user` (`password`, `firstname`, `lastname`, `email`) VALUES (:password, :firstname, :lastname, :email)");
        $req->bindValue(":firstname", $firstname, PDO::PARAM_STR);
        $req->bindValue(":lastname", $lastname, PDO::PARAM_STR);
        $req->bindValue(":email", $email, PDO::PARAM_STR);
        $req->bindValue(":password", $password, PDO::PARAM_STR);

        $req->execute();

        $req->closeCursor();
    }

    public function getOneUserByEmail(string $email)
    {
        $req = $this->getDb()->prepare("SELECT `uid`, `password`, `firstname`, `lastname`, `email` FROM `user` WHERE `email` = :email");
        $req->bindValue(":email", $email, PDO::PARAM_STR);
        $req->execute();

        return $req->rowCount() === 1 ? new User($req->fetch(PDO::FETCH_ASSOC)) : false;

        $req->closeCursor();
    }
}

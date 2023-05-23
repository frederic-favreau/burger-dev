<?php //CONTROLLER
class UserController extends Controller
{
    public function createUser()
    {

        $model = new UserModel();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
            $rawPass = $_POST['password'];
            $password = password_hash($rawPass, PASSWORD_DEFAULT);

            $userData = new User([
                'firstname' => $firstname,
                'lastname' => $lastname,
                'email' => $email,
                'password' => $password,
            ]);

            $result = $model->save($userData);

            global $router;
            header('Location:' . $router->generate('home'));
            exit();

        } else {
            global $router;
            $link = $router->generate('registration');
            echo self::getRender('registration.html.twig', ['link' => $link]);
        }
    }

    public function login()
    {
        global $router;

        if(!$_POST){
            echo self::getRender('signpage.html.twig' , []); }
            else {
             $email = $_POST['email'];
             $password = $_POST['password'];
            
            $model = new UserModel();
            $user = $model->getOneUserByEmail($email); 
            var_dump($user);

            if($user){
                $password = $_POST['password'];
                // var_dump(password_hash('123', PASSWORD_DEFAULT));
            if(password_verify($password, $user->getPassword())){
            $_SESSION['uid'] = $user->getUser_id();
            $_SESSION['email'] = $user->getEmail();
            var_dump('tito');
            header('Location: ./');
            exit();

            }else{
            echo 'Courage mec, ne lâche pas !! bizz';
            }
            }else{
            $message = "Email / mot de passe incorrect !";
            echo self::getrender('signpage.html.twig', [ 'message' => $message]); }
            }
    }

    public function logout()
    {
        session_start();
        session_destroy();

        header('Location: ./' );
        exit();
    }
}

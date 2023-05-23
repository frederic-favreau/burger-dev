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
            $rawPass = $_POST['psw'];
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
            $link = $router->generate('baseLog');
            echo self::getRender('signpage.html.twig', ['link' => $link]);
        }
    }

    public function loginUser()
    {
        session_start();
        global $router;

        if (isset($_POST['email'], $_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $model = new UserModel();
            $user = $model->getUserByEmail($email);

            if ($user && password_verify($password, $user->getPassword())) {
                // Start the user session
                $_SESSION['email'] = $user->getEmail();
                $_SESSION['connect'] = true;

                // Redirect to the home page or any other page you want
                header('Location: ' . $router->generate('home'));
                exit();
            } else {
                $message = "Invalid email or password.";
            }
        } else {
            $message = "Please enter a username and password.";
        }

        $link = $router->generate('connect');

        // Render the login page with an error message if applicable
        echo self::getRender('signpage.html.twig', ['message' => $message, 'signin' => $link]);
    }




    public function logout()
    {
        session_start();
        session_destroy();

        global $router;
        header('Location: ' . $router->generate('home'));
        exit();
    }
}

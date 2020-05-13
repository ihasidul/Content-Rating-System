<?php
class LoginController extends Controller
{

    public function index()
    {
        // Return a 'view' or do nothing.
        $this->view('LoginView');
    }

    public function loginUser()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if (empty($_POST['id']) || empty($_POST['password'])) {
                // echo "Incorrect password.";
                $error = "Username or Password is invalid";
            } else {
                $user = $this->model('LoginModel');
                $user->setId($_POST['id']);
                $user->setPassword($_POST['password']);


                if ($user->validateLogin($user->id, $user->password)) {

                    // echo "tesing validation";
                    //not here yet
                    $_SESSION["id"] = $user->id;
                    $_SESSION["password"] = $user->password;

                    // echo $_SESSION["id"];
                    //echo $_SESSION["id"];

                    if (isset($_SESSION["id"])) {
                        echo gettype($user->getPermissionType($user->id, $user->password));
                        switch ($user->getPermissionType($user->id, $user->password)) {
                            case "admin":
                                echo " after permission done";
                                header("Location: ../AdminController/index");
                                break;
                            case "user":
                                header("Location: ../UserController/index");
                            case "critic":
                                header("Location: ../CriticController/index");
                            case "contentCreator":
                                header("Location: ../ContentCreatorController/index");
                        }




                        // header("Location: ../views/admin.php");
                    }
                } else {
                    // $this->index();
                    // $this->view('LoginView');
                    // header("Location: ../index");
                    header("Location: ../index");

                    // echo "Username or Password is invalid";
                }
            }
        }
    }
}

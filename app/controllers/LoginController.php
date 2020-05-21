<?php
class LoginController extends Controller
{

    public function index()
    {
        // Return a 'view' or do nothing.
        $this->view('LoginView');
    }
    public function phpAlert($msg)
    {
        echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }

    public function loginUser()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if (empty($_POST['id']) || empty($_POST['password'])) {
                // echo "Incorrect password.";
                header("Location: ../index");
                //$this->phpAlert($error);
            } else {
                $user = $this->model('LoginModel');
                $user->setId($_POST['id']);
                $user->setPassword($_POST['password']);


                if ($user->validateLogin($user->id, $user->password)) {

                    // echo "tesing validation";
                    //not here yet
                    $_SESSION["id"] = $user->id;
                    $_SESSION["password"] = $user->password;
                    $_SESSION["First"] = "";



                    // echo $_SESSION["id"];
                    //echo $_SESSION["id"];

                    if (isset($_SESSION["id"])) {
                        echo gettype($user->getPermissionType($user->id, $user->password));
                        switch ($user->getPermissionType($user->id, $user->password)) {
                            case "admin":
                                //echo " after permission done";
                                header("Location: ../AdminController/index");
                                break; //break is needed.Otherwise it will break
                            case "user":
                                header("Location: ../UserController/index");
                                break;
                            case "critic":
                                header("Location: ../CriticController/index");
                                break;
                            case "contentCreator":
                                header("Location: ../ContentCreatorController/index");
                                break;
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

    public function makeId($userType)
    {
        $idVal = 1 + $this->model('LoginModel')->getLatestAutoId();
        if ($userType == "admin") {
            //get autoIncriment value of login table add some prefix then return 
            $id = "a-" . $idVal;
            return  $id;
        } else if ($userType == "user") {
            //get autoIncriment value of login table add some prefix then return 
            $id = "u-" . $idVal;
            return  $id;
        } else if ($userType == "critic") {
            //get autoIncriment value of login table add some prefix then return 
            $id = "c-" . $idVal;
            return  $id;
        } else if ($userType == "contentCreator") {
            //get autoIncriment value of login table add some prefix then return 
            $id = "cc-" . $idVal;
            return  $id;
        }
    }

    public function signUpUser()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($_POST["user_type"] == "user") {
                //write user object using post data and send it there 
                //echo "I am at user";
                $userObj = $this->model('UserModel');
                $id = $this->makeId($_POST['user_type']);
                //insertUser($name, $id, $email, $phone)
                $userObj->insertUser($_POST['user_name'], $id, $_POST['user_email'], $_POST['user_phone']); //userTable
                $loginObj = $this->model('LoginModel');
                //insertUser($id, $password, $permissionType)
                $loginObj->insertUser($id, $_POST['user_password'], "user"); //login table

            } else if ($_POST["user_type"] == "contentCreator") {
                //write content Creator object using post data

                $contentCreatorObj = $this->model('ContentCreatorModel');
                //function insertContentCreator($name, $id, $email, $phone)
                $id = $this->makeId($_POST['user_type']);
                $loginObj = $this->model('LoginModel');
                //insertUser($id, $password, $permissionType)
                $loginObj->insertUser($id, $_POST['user_password'], "contentCreator");
                //insertUser($name, $id, $email, $phone)
                $contentCreatorObj->insertContentCreator($_POST['user_name'], $id, $_POST['user_email'], $_POST['user_phone']);
            } else if ($_POST["user_type"] == "critic") {
                //write content critic object using post data
                $userObj = $this->model('CriticModel');
                //function insertContentCreator($name, $id, $email, $phone)
                $id = $this->makeId($_POST['user_type']);
                //insertUser($name, $id, $email, $phone)
                $userObj->insertCritic($_POST['user_name'], $id, $_POST['user_email'], $_POST['user_phone']);
                $loginObj = $this->model('LoginModel');
                //insertUser($id, $password, $permissionType)
                $loginObj->insertUser($id, $_POST['user_password'], "user");
            }
            echo "Registration successful. Loggin you in automatically...";
            echo "Credentials: " . $id . " Password: " . $_POST['user_password'];
            //sleep(5);

            header("Location: autoLogin/" . $id . '/' . $_POST['user_password']);
        }
    }

    public function autoLogin($id, $password)
    {
        $user = $this->model('LoginModel');
        $user->setId($id);
        $user->setPassword($password);
        $_SESSION["id"] = $id;
        $_SESSION["password"] = $password;
        $_SESSION["First"] = "First";
        switch ($user->getPermissionType($user->id, $user->password)) {
            case "admin":
                //echo " after permission done";
                header("Location: ../../../AdminController/index");
                break; //break is needed.Otherwise it will break
            case "user":
                header("Location: ../../../UserController/index");
                break;
            case "critic":
                header("Location: ../../../CriticController/index");
                break;
            case "contentCreator":
                header("Location: ../../../ContentCreatorController/index");
                break;
        }
    }

    public function logout()
    {
        session_unset();
        session_destroy();

        header("Location: ../index");

        //$this->view('LoginView');
    }

    public function loadSignUp()
    {
        $this->view('SignUpView');
    }
}

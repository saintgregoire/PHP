<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class AuthController extends AbstractController
{
    public function login() : void
    {
        $this->render("login", []);
    }

    public function checkLogin() : void
    {
        // si le login est valide => connecter puis rediriger vers la home
        // $this->redirect("index.php");
        $email = '';
        $password = '';
        $userManager = new UserManager();
        $pattern = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[\W_]).{8,}$/';
        
        if (isset($_POST['email']) && !empty($_POST['email'])){
            $email = $_POST['email'];
        }
        if (isset($_POST['password']) && !empty($_POST['password'])){
            $password = $_POST['password'];
        }
        
        if(preg_match($pattern, $password)){
            $user = $userManager->findByEmail($email);
            
            if($user !== null){
            $user_password = $user->getPassword();
            $isPasswordCorrect = password_verify($password, $user_password);
                if ($isPasswordCorrect){
                    $_SESSION['user'] = $user;
                    $this->redirect("index.php");
                }
                else {
                    echo "wrong password";
                }
            }
            else {
                echo 'User not found';
            }
        }
        // sinon rediriger vers login
        // $this->redirect("index.php?route=login");
        else{
            $this->redirect("index.php?route=login");
            echo "Les mots de passe doivent faire 8 caractères au minimum, avec au moins une majuscule, une minuscule, un chiffre et un caractère spécial.";
        }
        
    }

    public function register() : void
    {
        $this->render("register", []);
    }

    public function checkRegister() : void
    {
        // si le register est valide => connecter puis rediriger vers la home
        // $this->redirect("index.php");
        $username = '';
        $email = '';
        $password = '';
        $conf_password ='';
        $pattern = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[\W_]).{8,}$/';
        
        if(isset($_POST['username']) && !empty($_POST['username']) ){
            $username = $_POST['username'];
        }
        if (isset($_POST['email']) && !empty($_POST['email']) ){
            $email = $_POST['email'];
        }
        if (isset($_POST['password']) && !empty($_POST['password']) ){
            $password = $_POST['password'];
        }
        if (isset($_POST['confirm-password']) && !empty($_POST['confirm-password']) ){
            $conf_password = $_POST['confirm-password'];
        }
        
        
        
        
        
        if($password === $conf_password){
            if(preg_match($pattern, $password)){
                $userManager = new UserManager();
                $userCheck = $userManager->findByEmail($email);
                
                if($userCheck === null){
                    $password_hash = password_hash($password, PASSWORD_DEFAULT);
                    $currentDateTime = new DateTime();
                    $created_at = $currentDateTime->format('Y-m-d H:i:s');
                    $user = new User(null, $username, $email, $password_hash, "USER", $created_at);
                    $userManager->create($user);
                    
                    $_SESSION['user'] = $user;
                    $this->redirect("index.php");
                }
                else{
                    $this->redirect("index.php?route=register");
                    echo "User already exists";
                }
            }
            else{
                $this->redirect("index.php?route=register");
                echo "Les mots de passe doivent faire 8 caractères au minimum, avec au moins une majuscule, une minuscule, un chiffre et un caractère spécial."; 
            }
        }
        else{
            $this->redirect("index.php?route=register");
            echo "check your password";
        }
        // sinon rediriger vers register
        // $this->redirect("index.php?route=register");
    }

    public function logout() : void
    {
        session_destroy();

        $this->redirect("index.php");
    }
}
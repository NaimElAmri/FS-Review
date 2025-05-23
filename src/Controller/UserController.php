<?php

namespace App\Controller;

use App\Repository\UserRepository;
use App\View\View;

/**
 * Siehe Dokumentation im DefaultController.
 */
class UserController
{
    public function index()
    {
        $userRepository = new UserRepository();

        $view = new View('user/index');
        $view->title = 'Benutzer';
        $view->heading = 'Benutzer';
        $view->users = $userRepository->readAll();
        $view->display();
    }

    public function create()
    {
        $view = new View('user/create');
        $view->title = 'Benutzer erstellen';
        $view->heading = 'Benutzer erstellen';
        $view->display();
    }

    public function doCreate()
    {
        if(empty($firstName) && empty($lastName) && empty($email) && empty($password) && !filter_var($email, FILTER_VALIDATE_EMAIL)){ // Validierung auf Controller verschieben!
            header("location: login");
            exit;
        }
        else 
        {
            $firstName = $_POST['fname'];
            $lastName = $_POST['lname'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $userRepository = new UserRepository();
            $userRepository->create($firstName, $lastName, $email, $password);

            // Anfrage an die URI /user weiterleiten (HTTP 302)
            header('Location: /user');
        }

        // Anfrage an die URI /user weiterleiten (HTTP 302)
        header('Location: /user');
    }

    public function delete()
    {
        //Verbindung zum UserRepository herstellend und die Methode deleteById ausführen.
        $userRepository = new UserRepository();
        $userRepository->deleteById($_GET['id']);
        
        // Anfrage an die URI /user weiterleiten (HTTP 302)
        header('Location: /user');
    }

    public function login(){
        $view = new View('user/login');
        $view->title = 'Login';
        $view->heading = 'Login';
        $view->display();
    }

    public function doLogin(){
        //Damit man auf das Repository zugreifen kann
        $userRepository = new UserRepository();
        //führt die Methode aus userRepository aus
        $userRepository->login($_POST['email'], $_POST['password']);
        //Geht zum Header zurück wenn man eingeloggt ist
        if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true){
            
            header("location: login");
            exit;
        }
        else{
            
            header("location: /");
        }
    }

    public function signup(){
        $view = new View('user/signup');
        $view->title = 'Sign Up';
        $view->heading = 'Sign Up';
        $view->display();
    }

    public function logout(){

        unset($_SESSION);
        // Finally, destroy the session.
        session_destroy();

        header("location: /");

    }

    public function change(){

        $userRepository = new UserRepository();
        $view = new View('user/change');
        $view->title = 'Ändern';
        $view->heading = 'Ändern';
        $view->user = $userRepository->readbyID($_GET['id']);
        $view->display();
    }

    public function doChange(){
        $userRepository = new UserRepository();
		$userRepository->change($_POST['fname'], $_POST['lname'], $_POST['password'], $_POST['id']);

		header("location: /user");
    }
}

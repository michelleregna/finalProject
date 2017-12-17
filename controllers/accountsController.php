<?php

class accountsController extends http\controller
{

    // login function
    public static function login()
    {
        $user = accounts::findUserbyEmail($_REQUEST['uname']);
        
        if ($user == FALSE) {
            $error = 'user not found';
            self::getTemplate('error', $error);
        } else {
            if($user->checkPassword($_POST['psw']) == TRUE) {
                echo 'login';
                session_start();
                $_SESSION["userID"] = $user->id;
                header("Location: index.php?page=tasks&action=all");
            } else {
                $error = 'password does not match';
                self::getTemplate('error', $error);
            }
        }

    }
    // logout function
    public static function logout() 
    {   session_start();
        unset($_SESSION["userID"]);
        header('Location: index.php');
    }
    
    // gets register form template
    public static function register()
    {
        self::getTemplate('register');
        
    }

    // stores the email to accounts
    public static function store()
    {
        $user = accounts::findUserbyEmail($_REQUEST['email']);
        
        if ($user == FALSE) {
            $user = new account();
            $user->email = $_POST['email'];
            $user->fname = $_POST['fname'];
            $user->lname = $_POST['lname'];
            $user->phone = $_POST['phone'];
            $user->birthday = $_POST['birthday'];
            $user->gender = $_POST['gender'];
           
            $user->password = $user->setPassword($_POST['password']);
            $user->save();
            header("Location: index.php");

            
        } else {
                $error = 'already registered';
                self::getTemplate('error', $error);
        }

    }

    /* Use code below if you ever want to reinstate the ablity to view all, one, or edit/delete an account

    public static function show()
    {
        $record = accounts::findOne($_REQUEST['id']);
        self::getTemplate('show_account', $record);
    }
    public static function all()
    {

        $records = accounts::findAll();
        self::getTemplate('all_accounts', $records);

    }

    public static function edit()
    {
        $record = accounts::findOne($_REQUEST['id']);

        self::getTemplate('edit_account', $record);

    }

    public static function delete()
    {
        $record = accounts::findOne($_REQUEST['id']);
        $record->delete();
        header('Location: index.php?page=accounts&action=all');

    }
*/

}
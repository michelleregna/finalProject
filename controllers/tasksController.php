<?php
//each page extends controller and the index.php?page=tasks causes the controller to be called
class tasksController extends http\controller
{
    public static function show()
    {
        $record = todos::findOne($_REQUEST['id']);
        self::getTemplate('show_task', $record);
    }

    public static function all()
    {
        session_start();
        $userID = $_SESSION['userID'];
        $records = todos::findTasksById($userID);
        self::getTemplate('all_tasks', $records);
       

    }

    public static function create()
    {
        self::getTemplate('add_task');
    }

    public static function edit()
    {
        $record = todos::findOne($_REQUEST['id']);
        self::getTemplate('edit_task', $record);
    }

    public static function store()
    {
        $record = new todo();
        session_start();
        date_default_timezone_set('America/New_York');

        $record->owneremail = $_POST['owneremail'];
        $record->ownerid = $_SESSION['userid'];
        $record->createddate = date('F j, Y, g:i a');
        $record->duedate = $_POST['duedate'];
        $record->message = $_POST['message'];
        $record->isdone = $_POST['isdone'];
        $lastInsertedId=$record->save();
        header('Location: index.php?page=tasks&action=all');
    }

    public static function update() 
    { 
        $records = todos::findOne($_REQUEST['id']);
        $record = new todo();
        $record->id=$records->id;
        $record->owneremail = $_POST['owneremail'];
        $record->ownerid = $_POST['ownerid'];
        $record->createddate = $_POST['createddate'];
        $record->duedate = $_POST['duedate'];
        $record->message = $_POST['message'];
        $record->isdone = $_POST['isdone'];
        $record->save();
        header('Location: index.php?page=tasks&action=all');
    }

    public static function delete()
    {
        $record = todos::findOne($_REQUEST['id']);
        $record->delete();
        header('Location: index.php?page=tasks&action=all');

    }

}
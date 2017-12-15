<?php

class todos extends database\collection
{
    protected static $modelName = 'todo';

    //This is the function to write to find tasks by user ID for listing on their homepage.
    //Don't forget to return the record set see findAll in the collection class
    public static function findTasksByID($userid) 
    {
		$tableName = get_called_class();
		$sql = 'SELECT id,owneremail,createddate,duedate,message,isdone FROM ' . $tableName . ' WHERE ownerid = ?';
		$recordsSet = self::getResults($sql, $userid);
		if (is_null($recordsSet)) {
			return FALSE;
		} else {
			return $recordsSet;
		}

    }
}

?>

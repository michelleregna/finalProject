<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Add Task</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>

 <form action="index.php?page=tasks&action=create" method="get">
                <table>
                    <tr>
                        <th><label for="owneremail">Owner Email</label></th>
                        <td><input type="text" id="title" name="title" value="" /></td>
                    </tr>
                    <tr>
                    	<th><label for="ownerid">Owner Id</label></th>
                        <td><input type="text" id="ownerid" name="ownerid" value="" /></td>    
                    </tr>
                    <tr>
                    	<th><label for="createddate">Date Created</label></th>
                        <td><input type="text" id="createddate" name="createddate" value="" /></td>    
                    </tr>
                     <tr>
                    	<th><label for="duedate">Due Date</label></th>
                        <td><input type="text" id="duedate" name="duedate" value="" /></td>    
                    </tr>
                    <tr>
                    	<th><label for="message">Message</label></th>
                        <td><input type="text" id="message" name="message" value="" /></td>    
                    </tr>
                    <tr>
                    	<th><label for="isdone">Completed?</label></th>
                        <td><input type="text" id="isdone" name="isdone" value="" /></td>    
                    </tr>
                </table>
               
                <input type="submit" value="Submit" />
</form>

<?php
//this is how you print something

print utility\htmlTable::genarateTableFromMultiArray($data);

?>

<!-- <form action="index.php?page=tasks&action=create" method="get">
    <button type="submit" value="Add task">Add Task</button>
</form> -->
<!-- <a href="index.php?page=' . $referingPage . '&action=show&id=' . $value . '">View</a></td>'
 -->

<script src="js/scripts.js"></script>
</body>
</html>
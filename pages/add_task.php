<?php 
include 'header.php';
include 'nav.php';
?>


 <form action="index.php?page=tasks&action=create" method="post">
                               
    Owner Email: <input type="text" name="owneremail"><br>
    Due Date: <input type="text" name="duedate"><br> 
    Message: <input type="text" name="message"><br> 
    Completed?: <input type="text" name="isdone"><br> 
                     
    <input type="submit" value="Submit" />
</form>

<?php include 'footer.php';?>
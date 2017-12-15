<?php 
include 'header.php';
include 'nav.php';
?>

<h1> Edit task <?php echo $data->id?> </h1>

<form action="index.php?page=tasks&action=edit&id=<?php echo $data->id; ?>" method="post">
                               
    Owner Email: <input type="text" name="owneremail" value= "<?php echo $data->owneremail ?>"/><br>
    Due Date: <input type="text" name="duedate" value="<?php echo $data->duedate ?>"><br> 
    Message: <input type="text" name="message" value="<?php echo $data->message ?>"><br> 
    Completed?: <input type="text" name="isdone" value="<?php echo $data->isdone ?>"><br> 
                     
    <input type="submit" value="Save" />
</form>



<?php include 'header.php';?>
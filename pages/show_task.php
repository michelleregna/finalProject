<?php 
include 'header.php';
include 'nav.php';
?>

<h1>View Task</h1>

<?php
print utility\htmlTable::generateTableFromOneRecord($data);

?>
<form action="index.php" method="get">
    <input type="hidden" name ="page" value ="tasks"/>
    <input type="hidden" name = "action" value = "edit"/>
    <input type="hidden" name = "id" value = <?php echo "$data->id";?> />
    <button class="btn btn-primary" type="submit">Edit task</button>
</form>

<form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button class="btn btn-danger" type="submit" form="form1" value="delete">Delete</button>
</form>



<?php include 'footer.php';?>
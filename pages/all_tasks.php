<?php include 'header.php';
include 'nav.php';

;?>

<h1>All Tasks</h1>

<?php
//this is how you print something
if($data == false) {
    echo 'You currently have no tasks!';
} else {
    print utility\htmlTable::genarateTableFromMultiArray($data);
}


?>

<form action="index.php" method="get">
    <input type="hidden" name ="page" value ="tasks"/>
    <input type="hidden" name = "action" value = "create"/>
    <button class="btn btn-primary" type="submit">Add task</button>
</form>





<?php include 'footer.php';?>
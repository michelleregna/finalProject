<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>

<?php
//this is how you print something

print utility\htmlTable::genarateTableFromMultiArray($data);

?>

<!-- <button type="submit" value="Add task">Add Task</button>
 -->

<!-- <form action="index.php" method="get">
    <button type="submit" value="Add task">Add Task</button>
</form>
 -->
<form action="index.php" method="get">
    <input type="hidden" name ="page" value ="tasks"/>
    <input type="hidden" name = "action" value = "create"/>
    <input type="submit" value="Add task">
</form>

<!-- <a href="index.php?page=' . $referingPage . '&action=show&id=' . $value . '">View</a></td>'
 -->

<script src="js/scripts.js"></script>
</body>
</html>
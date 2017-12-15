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

<h1>All Tasks</h1>

<?php
//this is how you print something
if($data == false) {
    echo 'There are currently no tasks';
} else {
    print utility\htmlTable::genarateTableFromMultiArray($data);
}


?>

<form action="index.php" method="get">
    <input type="hidden" name ="page" value ="tasks"/>
    <input type="hidden" name = "action" value = "create"/>
    <input type="submit" value="Add task">
</form>


<script src="js/scripts.js"></script>
</body>
</html>
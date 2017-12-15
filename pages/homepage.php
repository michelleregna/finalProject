<?php include 'header.php'; ?>


<?php session_start();
      if (key_exists('userID', $_SESSION)) {
        // echo '<h1><a href="index.php?page=accounts&action=all">Show All Accounts</a></h1>';
        // echo '<h1><a href="index.php?page=tasks&action=all">Show All Tasks</a></h1>';
        // echo '<h1><a href="index.php?page=accounts&action=logout">Logout</a></h1>';
        include 'nav.php';
    } else {

        include 'login_form.php';
    } 
?>

<?php include 'footer.php'; ?>
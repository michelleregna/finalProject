<?php include 'header.php'; ?>


<?php

    //this how to print some data;
    echo $data['site_name'];

    ?> </h1>

<?php session_start();
      if (key_exists('userID', $_SESSION)) {
        echo '<h1><a href="index.php?page=accounts&action=all">Show All Accounts</a></h1>';
        echo '<h1><a href="index.php?page=tasks&action=all">Show All Tasks</a></h1>';
        echo '<h1><a href="index.php?page=accounts&action=logout">Logout</a></h1>';
    } else {
        echo '<form action="index.php?page=accounts&action=login" method="POST">

        <div class="container">
            <label><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit">Login</button>
        </div>


    </form>';

    echo '<h1><a href="index.php?page=accounts&action=register">Register</a></h1>';
    } 
?>

<?php include 'footer.php'; ?>

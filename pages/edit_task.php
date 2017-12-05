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

<h1> Edit record <?php echo $data->id?> </h1>

 <form action="index.php?page=tasks&action=edit&id=<?php echo $data->id; ?>" method="post">
                <table>
                    <tr>
                        <th><label for="owneremail">Owner Email</label></th>
                        <td><input type="text" id="owneremail" name="owneremail" value= "<?php echo $data->owneremail ?>"/></td>
                    </tr>
                    <tr>
                        <th><label for="ownerid">Owner Id</label></th>
                        <td><input type="text" id="ownerid" name="ownerid" value="<?php echo $data->ownerid ?>" /></td>    
                    </tr>
                    <tr>
                        <th><label for="createddate">Date Created</label></th>
                        <td><input type="text" id="createddate" name="createddate" value="<?php echo $data->createddate ?>" /></td>    
                    </tr>
                     <tr>
                        <th><label for="duedate">Due Date</label></th>
                        <td><input type="text" id="duedate" name="duedate" value="<?php echo $data->duedate ?>" /></td>    
                    </tr>
                    <tr>
                        <th><label for="message">Message</label></th>
                        <td><input type="text" id="message" name="message" value="<?php echo $data->message ?>" /></td>    
                    </tr>
                    <tr>
                        <th><label for="isdone">Completed?</label></th>
                        <td><input type="text" id="isdone" name="isdone" value="<?php echo $data->isdone ?>" /></td>    
                    </tr>
                </table>
               
                <input type="submit" value="Save" />
</form>



<script src="js/scripts.js"></script>
</body>
</html>

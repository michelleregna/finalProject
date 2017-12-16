<?php 
include 'header.php';
include 'nav.php';
?>

<h1>Edit Task</h1>
 <form action="index.php?page=tasks&action=edit&id=<?php echo $data->id; ?>" method="post">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Owner Email</label>
    <div class="col-sm-10">
      <input type="email" name="owneremail" class="form-control" id="inputEmail3" value="<?php echo $data->owneremail ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Due Date</label>
    <div class="col-sm-10">
      <input type="text" name="duedate" class="form-control" id="inputPassword3" value="<?php echo $data->duedate ?>">
    </div>
  </div>
    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Message</label>
    <div class="col-sm-10">
      <input type="text" name="message" class="form-control" id="inputPEmail3" value="<?php echo $data->message ?>">
    </div>
  </div>
   <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Completed?</label>
    <div class="col-sm-10">
      <input type="text" name="isdone" class="form-control" id="inputPEmail3" value="<?php echo $data->isdone ?>">
    </div>
  </div>
   <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </div>
</form>


<?php include 'header.php';?>

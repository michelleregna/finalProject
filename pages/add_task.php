<?php 
include 'header.php';
include 'nav.php';
?>

<h1>Add Task</h1>
 <form action="index.php?page=tasks&action=create" method="post">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Owner Email</label>
    <div class="col-sm-10">
      <input type="email" name="owneremail" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Due Date</label>
    <div class="col-sm-10">
      <input type="text" name="duedate" class="form-control" id="inputPassword3" placeholder="YYYY/DD/M 00:00:00">
    </div>
  </div>
    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Message</label>
    <div class="col-sm-10">
      <input type="text" name="message" class="form-control" id="inputPEmail3" placeholder="Message">
    </div>
  </div>
   <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Completed?</label>
    <div class="col-sm-10">
      <input type="text" name="isdone" class="form-control" id="inputPEmail3" placeholder="Yes/No">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Add Task</button>
    </div>
  </div>
</form>

<?php include 'footer.php';?>
<?php include 'header.php';?>

<!-- <form action="index.php?page=accounts&action=register" method="post">
    First name: <input type="text" name="fname"><br>
    Last name: <input type="text" name="lname"><br>
    Email: <input type="text" name="email"><br>
    Phone: <input type="text" name="phone"><br>
    Birthday: <input type="text" name="birthday"><br>
    Gender: <input type="text" name="gender"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="Submit">
</form> -->
<h1>Register</h1>

<form action="index.php?page=accounts&action=register" method="post">
  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault01">First name</label>
      <input type="text" name="fname" class="form-control" id="validationDefault01" placeholder="First name" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault02">Last name</label>
      <input type="text" name="lname" class="form-control" id="validationDefault02" placeholder="Last name" required>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">Email</label>
      <input type="text" name="email" class="form-control" id="validationDefault03" placeholder="Email" required>
      <div class="invalid-feedback">
        Please provide a valid email.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault04">Phone Number</label>
      <input type="text" name="phone" class="form-control" id="validationDefault04" placeholder="555-555-5555" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">Birthday</label>
      <input type="text" name="birthday" class="form-control" id="validationDefault05" placeholder="YYYY/D/M" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault06">Gender</label>
      <input type="text" name="gender" class="form-control" id="validationDefault06" placeholder="Gender" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault07">Password</label>
      <input type="password" name="password" class="form-control" id="validationDefault07" placeholder="Password" required>
    </div>
  </div>

  <button class="btn btn-primary" type="submit">Submit form</button>
</form>

<?php include 'footer.php';?>
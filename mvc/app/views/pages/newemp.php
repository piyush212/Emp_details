<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style1.css">
 <?php
if(!isset($_SESSION['admin']))
{
  header('location: http://localhost/mvc/pages/index');
  exit;
}
?>
<form method="post" action="<?php echo URLROOT . 'Pages/insert' ?>" enctype="multipart/form-data" >
  <p>Add New Employee</p>
  <br>
  <br>
  <h4>Emp Id</h4>
  <input type="text" name="id" id="empid" placeholder="Enter Emp  id" required>
  <br>
  <h4>First Name</h4>
  <br>
  <input type="text" name="fname" id="empid"placeholder="Enter Emp First name" required >
  <h4>Last Name</h4>
  <input type="text" name="lname" id="empid" placeholder="Enter Emp Last name" required>
  <br>
  <h4>Email</h4>
  <input type="Email" name="email" id="empid" placeholder="Enter Emp Email-id" required>
  <br>
  <h4>Mobile Number</h4>
  <input type="tel" name="num" id="empid" placeholder="Enter Emp Mobile No" maxlength="10" minlength="10"required>
  <br>
  <h4>Street</h4>
  <input type="text" name="street" id="empid" placeholder="Enter Emp Street"required>
  <br>
  <h4>City</h4>
  <input type="text" name="city" id="empid" placeholder="Enter Emp City"required>
  <br>
  <h4>State</h4>
  <input type="text" name="state" id="empid" placeholder="Enter Emp State" required>
  <br>
  <h4>Country</h4>
  <label for="Country" ></label>
  <select name="country" id="count" required>
    <option value="India" India >India</option>
    <option value="pakistan">Pakistan</option>
    <option value="srilanka">Srilanka</option>
    <option value="usa">USA</option>
  </select>
  <br>
  <h4>Zip</h4>
  <input type="tel" name="zip" id="empid"placeholder="Enter Emp Area code" maxlength="6" minlength="6" required>
  <br>
  <h4>photo</h4>
  <input type="file" name="file" accept="image/png, image/gif, image/jpeg" id="empidz" required>
  <br>
  <input type="submit" name="btn" id="empid" value="Add Emp">
  </form>
  
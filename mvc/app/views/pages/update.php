<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style2.css">
<?php

if(!isset($_SESSION['admin']))
{
  header('location: http://localhost/mvc/pages/index');
  exit;
}
?>

<form method="post" action="<?php echo URLROOT . 'pages/edit/?id='.$data->S_No ?>" >
 
  <br>
  <br>
  <div id="update">
  <h4>Emp Id</h4>
  <input type="text" name="id" id="empid"value='<?=$data->Emp_id ?>' placeholder="Enter Emp  id">
  <br>
  <h4>First Name</h4>
  <input type="text" name="fname" id="empid" value='<?=$data->Fname ?>'>
  <br>
  <h4>Last Name</h4>
  <input type="text" name="lname" id="empid"value='<?=$data->Lname ?>' >
  <br>
  <h4>Email</h4>
  <input type="Email" name="email" id="empid"value='<?=$data->Email ?>' >
  <br>
  <h4>Mobile Number</h4>
  <input type="tel" name="num" id="empid" value='<?=$data->Number ?>' maxlength="10" minlength="10">
  <br>
  <h4>Street</h4>
  <input type="text" name="street" id="empid" value='<?=$data->Street ?>'>
  <br>
  <h4>City</h4>
  <input type="text" name="city" id="empid" value='<?=$data->City ?>'>
  <br>
  <h4>State</h4>
  <input type="text" name="state" id="empid"value='<?=$data->State ?>' >
  <br>
  <h4>Country</h4>
  <label for="country" value='<?=$data->Country  ?>'>  </label>
  <select name="country" id="empid" >
    <option value="India" <?php if($data->Country == "India") echo "selected" ?> >India</option>
    <option value="pakistan" <?php if($data->Country == "pakistan") echo "selected" ?>>Pakistan</option>
    <option value="srilanka" <?php if($data->Country == "srilanka") echo "selected" ?>>Srilanka</option>
    <option value="usa" <?php if($data->Country == "usa") echo "selected" ?>>USA</option>
  </select>
  <br>
  <h4>Zip</h4>
  <input type="tel" name="zip" id="empid"value='<?=$data->Zip ?>' maxlength="6" minlength="6">
  <br>
  <h4>photo</h4>
  <input type="file" name="file" accept="image/png, image/gif, image/jpeg" id="empid"value='<?=$data->Photo ?>' require>
  <br>
  <input type="submit" name="btn" id="empid" value="Update">
  </div>
  </form>

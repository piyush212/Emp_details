<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style1.css">
<form method="post" action="<?php echo URLROOT . 'pages/verify' ?>" >
  <p>Login as Admin</p>
  <input type="text" name="name" id="user" placeholder="Enter your id">
  <br>
  <?php
  if(isset($data['title']));
  {
    print_r($data['title']);
  }
  ?>
  <br>
  <input type="password" name="pass" id="pas" placeholder="Enter your password">
  <br>
  
  <input type="submit" name="btn" id="btt" value="login">
  </form>
    
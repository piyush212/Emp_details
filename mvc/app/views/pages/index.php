<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style1.css">
<div class="body">
 
  <form method="post" action="<?php echo URLROOT . 'pages/srch1' ?>" >
  <input type="text" name="srch1" id="user" placeholder="Enter employee first name" required minlength="1">
  <input type="submit" name="btn1" id="btt" value="search">
  </form>
  <form method="post" action="<?php echo URLROOT . 'pages/export' ?>" >
  <input type="submit" name="btn1" id="btt" value="export">
  </form>
  <div id="admin">
  <form method="post" action="<?php echo URLROOT . 'pages/login' ?>" >
  <input type="submit" name="btn1" id="btt" value="Login as admin">
  </form>
  </div>
  </div>
  <br>
  <table border= 1px>
   <tr>
      <th>S_No</th>
      <th>Emp_id</th>
      <th>Firxxt Nmae</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Mobile Number</th>
      <th>Street</th>
      <th>City</th>
      <th>State</th>
      <th>Country</th>
      <th>Zip</th>
      <th>photo</th>
    
   </tr>
 <?php foreach ($data ['post']as $post): ?>
  
   <tr>
    <td><?= $post->S_No ?></td>
   <td><?= $post->Emp_id ?></td>
    <td><?= $post->Fname ?></td>
    <td><?= $post->Lname?></td>
    <td><?= $post->Email ?></td>
    <td><?= $post->Number?></td>
    <td><?= $post->Street ?></td>
    <td><?= $post->City?></td>
    <td><?= $post->State ?></td>
    <td><?= $post->Country?></td>
    <td><?= $post->Zip ?></td>
   
    <td><img src="http://localhost/mvc/public/img/<?=$post->Photo ?>" alt="" height="70px" width="100px"></td>
   </tr>
    <?php endforeach ?> 
 </table>
<?php require APPROOT . '/views/inc/footer.php'; ?>

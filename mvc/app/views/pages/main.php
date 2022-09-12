
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style1.css">
</head>
<body>
  <div class="top">
  <form method="post" action="<?php echo URLROOT . 'pages/export' ?>" >
  <input type="submit" name="btn1" id="bttt" value="export">
  </form>

<form method="post" action="<?php echo URLROOT . 'pages/new' ?>" > 
  <input type="submit" name="sub" value="Add Emp">
</form>
<div id="srch1">
<form method="post" action="<?php echo URLROOT . 'pages/srch' ?>" >
  <input type="text" name="srch" id="user" placeholder="Enter employee first name " required minlength="1">
  <input type="submit" name="btn1" id="btt" value="search">
  </form>
    </div>
  <div id="log">
<form method="post" action="<?php echo URLROOT . 'pages/logout' ?>" >
  <input type="submit" name="sub" value="logout">
</form>
  </div>
  </div>
<table border= 1px>
   <tr>
     <th>S_No</th>
      <th>Emp_id</th>
      <th>First Nmae</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Mobile Number</th>
      <th>Street</th>
      <th>City</th>
      <th>State</th>
      <th>Country</th>
      <th>Zip</th>
      <th>photo</th>
      <th>Edit</th>
      <th>Delete</th>
     
    
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
   
    <td><img src="http://localhost/mvc/public/img/<?=$post->Photo ?>" alt="" height="70px" width="80px"></td>
    <td><a href=" http://localhost/mvc/pages/edits?id=<?php echo $post->S_No;?>"><input type="button" name="edit" value="edit" ><br></a></td>
    <td><button class="btn"><a href="http://localhost/mvc/pages/delete?S_No=<?php echo $post->S_No;?>" >Delete</a></button></td>
    <br>
   </tr>
    <?php endforeach ?> 
 </table>
 </body>
</html>
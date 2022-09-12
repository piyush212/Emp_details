<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style1.css">
<div id="srch">
<form method="post" action="<?php echo URLROOT . 'pages/srch1' ?>" >
  <input type="text" name="srch1" id="user" placeholder="Enter employee first name " required minlength="1">
  <input type="submit" name="btn1" id="btt" value="search">
  </form>
</div>
<div id="alert" style="color: red;
    font-size: 29px;">
<?php
  if(isset($data['title']));
  {
    print_r($data['title']);
  }
  ?>
</div>
  <br>
  <div id="single">
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
 <?php foreach ($data as $post): ?>
  
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
    <td><img src="http://localhost/mvc/public/img/<?=$post->Photo ?>" alt="" height="50px" width="50px"></td>
    <td><button class="btn"><a href="http://localhost/mvc/pages/export1?S_No=<?php echo $post->S_No;?>" >Export</a></button></td>
   </tr>
    <?php endforeach ?> 
 </table>
  </div>
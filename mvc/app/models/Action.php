<?php
class Action extends Database{
    public function insert($img){
        $id = $_POST['id'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $number = $_POST['num'];
        $street = $_POST['street'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $country = $_POST['country'];
        $zip = $_POST['zip'];
        $photo = $img;
        echo $id,'<br>'.$number,'<br>'.$email,'<br>'.$number,'<br>'.$fname,'<br>'.$lname,'<br>'.$photo;
   
        $this->query("INSERT INTO `emp`(`Emp_id`, `Fname`, `Lname`, `Email`, `Number`, `Street`, `City`, `State`, `Country`, `Zip`, `Photo`) VALUES ('$id','$fname','$lname','$email','$number','$street','$city','$state','$country','$zip','$photo')");
         $this->execute();
    }
    public function AllData(){
        $this->query("select * from emp");
        return $this->resultSet();
   }
   public function remove(){
    echo "hello";
    $S_No = $_GET['S_No'];
    $this->query("DELETE FROM `emp` WHERE S_No = $S_No");
    return $this->execute();
   }
   public function verify(){
    $id = $_POST['name'];
    $this->query("select User_id,Password from admin where User_id = '$id'");
    return $this->single();
   }
   public function edit($val){
    $emp_id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $number = $_POST['num'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $zip = $_POST['zip'];
    $photo = $_POST['file'];
    $this->query("UPDATE `emp` SET `Emp_id` = '$emp_id',`Fname`='$fname',`Lname`='$lname',`Email`='$email',`Number`='$number',`Street`='$street',`City`='$city',`State`='$state',`Country`='$country',`Zip`='$zip',`Photo`='$photo' WHERE `S_No`='$val'");
    return $this->execute();
   }
   public function search($id){
    $this->query("SELECT * FROM `emp` WHERE `S_No` = '$id'");
    return $this->single();
  
   }
   public function export(){
    $this->query("select * from emp");
    return $this->resultSet();
   }
  
   public function export1(){
    
    $S_No = $_GET['S_No'];
    $this->query("select * FROM `emp` WHERE S_No = $S_No");
    return $this->resultset();
   }
   public function exportAdmin(){
    
    $S_No = $_GET['S_No'];
    $this->query("select * FROM `emp` WHERE S_No = $S_No");
    return $this->resultset();
   }
   public function srch(){
    $id = $_POST['srch'];
    $this->query("SELECT * FROM `emp` WHERE `Fname` = '$id'");
    return $this->single();
  
   }
   public function srch1(){
    $id = $_POST['srch1'];
    $this->query("SELECT * FROM `emp` WHERE `Fname` = '$id'");
    return $this->single();
  
   }
   
}
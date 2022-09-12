<?php
  // Load Config
  require_once 'config/config.php';

  // Autoload Core Libraries
  spl_autoload_register(function($className){
    require_once 'libraries/' . $className . '.php';
  });
  

  // public function edit(){
    
  //   $this->query("SELECT * FROM `emp` WHERE `S_No` =". $_GET['S_No']);
  //   return $this->single();
  //  }
  // public function edit(){
    
  //   $this->query("SELECT * FROM `emp` WHERE `S_No` =". $_GET['S_No']);
  //   return $this->single();
  //  } <td><button class="btn"><a href="http://localhost/mvc/pages/edits?S_No=<?php echo $post->S_No;
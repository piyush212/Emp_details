<?php
class Pages extends Controller
{
  

  // public function index(){
  //   $data = [
  //     'title' => 'TraversyMVC',
  //   ];

  //   $this->view('pages/index', $data);
  // }


  public function about()
  {
    $data = [
      'title' => 'About Us'
    ];

    $this->view('pages/about', $data);
  }

  public function index()
  {

    // print_r("dsfsdf");
    // exit;
    if (isset($_SESSION['admin'])) {
      header('location: http://localhost/mvc/pages/loginpage');
      exit;
    } else {
      $models = $this->model('Action');
      $values = $models->Alldata();
      $data = [
        'post' => $values
      ];
      //  print_r($data);
      //  exit;
      $this->view('pages/index', $data);
    }
  }
  public function loginpage()
  {
    error_reporting(E_ERROR | E_PARSE);
    if (isset($_SESSION['admin'])) {

      $models = $this->model('Action');
      $values = $models->Alldata();

      $data = [
        'post' => $values
      ];
      $this->view('pages/main', $data);
    } else {
      $this->view('pages/login');
    }
  }


  public function admin()
  {

    if (isset($_POST)) {
      if (isset($_SESSION['admin'])) {

        $models = $this->model('Action');
        $values = $models->Alldata();

        $data = [
          'post' => $values
        ];
        $this->view('pages/main', $data);
      } else {
        header('location: http://localhost/mvc/pages/loginpage');
        exit;
      }
    } else {
    }
  }


  public function login()
  {
    error_reporting(E_ERROR | E_PARSE);
    if (isset($_SESSION['admin'])) {
      
      header('location: http://localhost/mvc/pages/loginpage');
      exit;
    } else {
      $this->view('pages/login');
    }
  }
 
  public function new()
  {
    error_reporting(E_ERROR | E_PARSE);
    $this->view('pages/newemp');
  }
  public function edits()
  {
    error_reporting(E_ERROR | E_PARSE);
    $val = $_GET['id'];
    $models = $this->model('Action');
    $values = $models->search($val);

    $this->view('pages/update', $values);
  }
  public function insert()
  {

    $target_dir = "../public/img/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
    $target_file = $_FILES["file"]["name"];
    $models = $this->model('Action');
    $models->insert($target_file);
    header('location:http://localhost/mvc/pages/admin');
  }
  public function allpost()
  {


    if ($_SESSION['admin']) {
      $models = $this->model('Action');
      $values = $models->Alldata();

      $data = [
        'post' => $values
      ];
      $this->view('pages/posts', $data);
    } else {
      header('location: http://localhost/mvc/pages/index');
      exit;
    }
  }

  public function delete()
  {
    error_reporting(E_ERROR | E_PARSE);
    $models = $this->model('Action');
    $models->remove();
    // $this->view('pages/main');
    header('location:http://localhost/mvc/pages/admin');
  }

  public function verify()
  {
    if($_POST['name']== '' || $_POST['pass']== '' )
    {
      $data =[
          'title' => 'Field should not empty!'
      ];
      $this->view('pages/login',$data);
    }
    if(($_POST['name']!= NAME) || ($_POST['pass'] != PASS))
    {
      $data =[
          'title' => 'invalid username and password!'
      ];
      $this->view('pages/login',$data);
    }
    if (isset($_POST)) {
      $admin = $_POST['name'];
      $pass = $_POST['pass'];
      if (NAME == $admin && PASS == $pass) {
        session_start();
        $_SESSION['admin'] = 'name';
        // $posts = $this->model('action');
        // $values = $posts->verify();
        header('location:http://localhost/mvc/pages/admin');
        exit;
      }
      //  else {
      //   echo "incorrect password";
      //   $this->view('pages/guest');
      // }
    }
  }
  public function logout()
  {
    //  session_start();
    // echo "thank you for visiting ";
    session_unset();
    session_destroy();
    // $this->view('pages/index');
    header('location:http://localhost/mvc/');
  }
  public function edit($val)

  {

    $val = $_GET['id'];
    echo "edit working";
    $models = $this->model('Action');
    $models->edit($val);
    // $this->view('pages/main');
    header('location:http://localhost/mvc/pages/admin');
  }

  public function srch()
  {
    error_reporting(E_ERROR | E_PARSE);
    $models = $this->model('Action');
    $values = $models->srch();
    if($values)
    {
      $data = [
        'post' => $values
      ];
      $this->view('pages/single', $data);

    }
    else{
      $data =[
          'title' => 'User Not found!!!!!'
      ];
      $this->view('pages/single',$data);
      // header('location:http://localhost/mvc/pages/admin');

    }
   
  }
  public function srch1()
  {
    error_reporting(E_ERROR | E_PARSE);
    $models = $this->model('Action');
    $values = $models->srch1();
    if($values)
    {
      $data = [
        'post' => $values
      ];
      $this->view('pages/guestsrch', $data);

    }
    else{
      $data =[
          'title' => 'User Not found!!!!!'
      ];
      $this->view('pages/guestsrch',$data);
      // header('location:http://localhost/mvc/pages/admin');

    }
  }
  public function export()
  {
    error_reporting(E_ERROR | E_PARSE);
    $exp = $this->model('Action');
    $result = $exp->export();
    $filename =  "emp.csv";
    $file = fopen('php://output', 'w');
    $head = array("Id", "Fname", "Lname", "Email", "Mobile", "street", "city", "state", "country", "pincode", "photo");
    fputcsv($file, $head);
    foreach ($result as $row) {
      $image = $row->Photo;
      $pic = "http://localhost/mvc/" .ltrim($image,'..');
      $lineData = array($row->Emp_id, $row->Fname, $row->Lname, $row->Email, $row->Number, $row->Street, $row->City, $row->State, $row->Country, $row->Zip, $pic);
      fputcsv($file, $lineData);
      header("Content-Description:File Transfer");
      header("content-Disposition: attachment;filename=\"$filename\"");
      header('Content-type:application/csv');
    }
    fclose(($file));
    exit;
  }
  
  public function export1()
  {
    error_reporting(E_ERROR | E_PARSE);
    $exp = $this->model('Action');
    $result = $exp->export1();
    $filename =  "emp.csv";
    $file = fopen('php://output', 'w');
    $head = array("Id", "Fname", "Lname", "Email", "Mobile", "street", "city", "state", "country", "pincode", "photo");
    fputcsv($file, $head);
    foreach ($result as $row) {
      $image = $row->Photo;
      $pic = "http://localhost/mvc/" .ltrim($image,'..');
      $lineData = array($row->Emp_id, $row->Fname, $row->Lname, $row->Email, $row->Number, $row->Street, $row->City, $row->State, $row->Country, $row->Zip, $pic);
      fputcsv($file, $lineData);
      header("Content-Description:File Transfer");
      header("content-Disposition: attachment;filename=\"$filename\"");
      header('Content-type:application/csv');
    }
    fclose(($file));
    exit;
  }
  public function exportAdmin()
  {
    error_reporting(E_ERROR | E_PARSE);
    $exp = $this->model('Action');
    $result = $exp->exportAdmin();
    $filename =  "emp.csv";
    $file = fopen('php://output', 'w');
    $head = array("Id", "Fname", "Lname", "Email", "Mobile", "street", "city", "state", "country", "pincode", "photo");
    fputcsv($file, $head);
    foreach ($result as $row) {
      $image = $row->Photo;
      $pic = "http://localhost/mvc/" .ltrim($image,'..');
      $lineData = array($row->Emp_id, $row->Fname, $row->Lname, $row->Email, $row->Number, $row->Street, $row->City, $row->State, $row->Country, $row->Zip, $pic);
      fputcsv($file, $lineData);
      header("Content-Description:File Transfer");
      header("content-Disposition: attachment;filename=\"$filename\"");
      header('Content-type:application/csv');
    }
    fclose(($file));
    exit;
  }
}

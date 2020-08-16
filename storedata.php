<?php
//index.php
$id = '';
$error = '';
$name = '';
$email = '';
$qualification = '';
$city = '';
$state = '';
$gender = '';
$dob = '';
$stream = '';

function clean_text($string)
{
 $string = trim($string);
 $string = stripslashes($string);
 $string = htmlspecialchars($string);
 return $string;
}

if(isset($_POST["submit"]))
  {
    if(empty($_POST["id"]))
 {
  $error .= '<p><label class="text-danger">Id is required</label></p>';
 }
 else
 {
  $id = $_POST["id"];
 }
}
{
 if(empty($_POST["name"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Name</label></p>';
 }
 else
 {
  $name = clean_text($_POST["name"]);
  if(!preg_match("/^[a-zA-Z]/",$name))
  {
   $error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
  }}
 
 if(empty($_POST["email"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Email</label></p>';
 }
 else
 {
  $email = clean_text($_POST["email"]);
  if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  {
   $error .= '<p><label class="text-danger">Invalid email format</label></p>';
  }
 }
 if(empty($_POST["qualification"]))
 {
  $error .= '<p><label class="text-danger">Qualification is required</label></p>';
 }
 else
 {
  $qualification = clean_text($_POST["qualification"]);
 }
 if(empty($_POST["city"]))
 {
  $error .= '<p><label class="text-danger">City is required</label></p>';
 }
 else
 {
  $city = clean_text($_POST["city"]);
 }
 if(empty($_POST["state"]))
 {
  $error .= '<p><label class="text-danger">State is required</label></p>';
 }
 else
 {
  $state = clean_text($_POST["state"]);
 }
if(empty($_POST["gender"]))
 {
  $error .= '<p><label class="text-danger">Gender is required</label></p>';
 }
 else
 {
  $gender = clean_text($_POST["gender"]);
 }
 if(empty($_POST["dob"]))
 {
  $error .= '<p><label class="text-danger">Date Of Birth is required</label></p>';
 }
 else
 {
  $dob = clean_text($_POST["dob"]);
 }

 if(empty($_POST["stream"]))
 {
  $error .= '<p><label class="text-danger">Stream is required</label></p>';
 }
 else
 {
  $stream = clean_text($_POST["stream"]);
 }

 if($error == '')
 {
  $file_open = fopen("students.csv", "a");
  /**$no_rows = count(file("students.csv"));
  if($no_rows > 1)
  {
   $no_rows = ($no_rows - 1) + 1;
  }**/
  $form_data = array(
   //'sr_no'  => $no_rows,
   'id' => $id,
   'name'  => $name,
   'email'  => $email,
   'qualification' => $qualification,
   'city' => $city,
   'state' => $state,
   'gender'=>$gender,
   'dob' => $dob,
   'stream' => $stream
  );
  fputcsv($file_open, $form_data);
  $error = '<label class="text-success">Your information is entered successfully!</label>';
  $id = '';
  $name = '';
  $email = '';
  $qualification = '';
  $city= '';
  $state = '';
  $gender = '';
  $dob = '';
  $stream = '';
 }
}

?>
<!DOCTYPE html>
<html>
 <head>
  <title>Submitting the Form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />   
  <style>
    h2{
      color: white;
      border-style: dotted;
      background-color: purple;
      
    }
    h3{
      color:white;
      border-style: solid;
      background-color: purple;
    }
    input[type="text"]{
      border-color: purple;
     
    }
     input[type="radio"]{
      border-color: purple;
     
    }
    input[type="date"]{
      border-color: purple;
     
    }

    label{
      color:purple;
      font-size: 16px;
    }
    body{
      background-color: #ffccff;
    }
    }
  </style>
 </head>
 <body>
  <br />
   <h2 align="center">Enter the student details</h2>
   <br />
   <div class="col-md-6" style="margin:0 auto; float:none;">
    <form method="post">
     <h3 align="center">Contact Form</h3>
     <br />
    <?php echo $error; ?>
     <div class="form-group">
      <label>Student Id</label>
      <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span> 
      <input type="text" name="id" placeholder="Enter Id" class="form-control" value="<?php echo $id; ?>" />
      </div>
      </div>
     <div class="form-group">
      <label>Student Name</label>
      <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input type="text" name="name" placeholder="Enter Name" class="form-control" value="<?php echo $name; ?>"/>
     </div>
      </div>
     <div class="form-group">
      <label>Email Id</label>
      <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
      <input type="text" name="email" class="form-control" placeholder="Enter Email" value="<?php echo $email; ?>" />
      </div>
      </div>
     <div class="form-group">
      <label>Qualification</label>
      <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
      <input type="text" name="qualification" class="form-control" placeholder="Enter qualification" value="<?php echo $qualification; ?>" />
     </div>
      </div>
     <div class="form-group">
      <label>City</label>
      <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
      <input type="text" name="city" class="form-control" placeholder="Enter City" value="<?php echo $city; ?>" />
     </div>
   </div>
     <div class="form-group">
      <label>State</label>
      <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
      <input type="text" name="state" class="form-control" placeholder="Enter State" value="<?php echo $state; ?>" />
     </div>
   </div>
     <div class="form-group">
      <label>Gender</label>
      <input type="radio"  name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio"  name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio"  name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="Other">Other  
  </div>
<div class="form-group">
  <label>Date of birth</label>
        <input type="date" name="dob" value="<?php echo $dob; ?>">
</div>
<div class="form-group">
  <label>Enter Stream</label>
  <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
    <input type="text" name="stream" class="form-control" placeholder="Enter Message"><?php echo $stream; ?>
</div>
</div>
<div class="form-group" align="center">
  <input type="button" value="landing-page" class="btn btn-info btn-lg"
onClick="window.location = 'http://localhost/landing-page.php'" />
  <input type="submit" name="submit" class="btn btn-success btn-lg" value="Submit" />
  <input type="button" value="Display" class="btn btn-primary btn-lg"  
onClick="window.location = 'http://localhost/display.php'" />
  <input type="button" value="Search" class="btn btn-warning btn-lg"
onClick="window.location = 'http://localhost/search.php'" />
</div>
</form>
   </div>
  </div>
 </body>
</html>
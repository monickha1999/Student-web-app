<!DOCTYPE html>
<html>
<head>
<title>Search data by ID</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <style>
  	h1{
  		background-color: #000099;
  		color: white;
  		border-radius: 10px;
  		border-style: dotted;
  	}
  	body{
  		background-color: #e6e6ff;
  	}
  	label{
  		font-size: 23px;
  		text-shadow: 1px 1px white;
  		font-style: bold;
  	}
  	input[type="text"]{
  		border-color: purple;
  		border-radius: 5px;
  	}
  	td{
  		background-color: white;
  		font-size: 13px;
  		border-color: black;
  		border-radius: 5px;
  		border-width: 1.5px;
  		padding: 6px;
  		text-align: center;

  	}
  	th{
  		background-color: blue;
  		color: white;
  		font-size: 18px;
  		border-color: black;
  		border-radius: 3px;
  		border-width: 2.5px;
  		padding: 6px;
  		text-align: center;
  	}

  </style>
</head>
<body>
	<center>
		<h1>Search by id</h1>
		<div class="form-group">
			<form action="" method="POST">
				<label>Enter student Id:</label><br>
				<input type="text" name="id" class="form-input" size="55" style="height: 39px" placeholder="Enter Student ID"/>
			</div>
		
		<input type="submit" name="search" value="Search By Id" class="btn btn-success btn-md">
		
<?php
$value = $_POST['id']; 
$csv = array();
$file = fopen('students.csv', 'r');
while (($result = fgetcsv($file)) !== false)
{
    $csv[] = $result;
}
fclose($file);
$found = false;
foreach ($csv as $row) {
    if (in_array($value, $row)) {
        $found = true;
        break;
    }
}
if ($found) {
$a =  implode(",",$row);
$keywords = preg_split("/[,]+/", "$a");
$array = array();
$array[] = $keywords;
}
else {
    echo "<u><b><font color=red size='4pt'>NOT FOUND</b></u>";
}

if ($found == true): ?>
<br>
<br>
<table border=2>
  <tr>
      <th><?php echo implode('</th><th>', $csv[0]); ?>
  </tr>
      
<?php foreach ($array as $rows) ?>
    <tr>
      <td><?php echo implode('</td><td>', $rows); ?></td></tr>
    </td>
<?php endif; ?>
  
      </form>

  </center><br>
  <br>
  
  <div class="form-group">
  <center>
  	 <input type="button" value="landing-page" class="btn btn-info btn-sm"  id="btnHome" 
onClick="window.location = 'http://localhost/landing-page.php'" />
  <input type="button" value="Display" id="btnHome" class="btn btn-primary btn-sm"
onClick="window.location = 'http://localhost/display.php'" />
<input type="button" value="Store" id="btnHome" class="btn btn-warning btn-sm"
onClick="window.location = 'http://localhost/storedata.php'" />
</center>
</div>

  </body>

  </html>





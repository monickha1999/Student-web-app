<!DOCTYPE html>
<html>
<head>
	<title>Landing page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<style>
		h1{
			background-color: red;
			color: white;
			text-align: center;
			border: 3px solid orange;
		}
		.card{
			background-color: blue;
		}
		.card-text,.card-title{
			color: white;
		}
		body{
			background-color: yellow;
		}
	</style>
</head>
<body>
	<h1>Student Web application</h1><br>
	<br>
	<center>
	<a href="http://localhost/storedata.php" class="custom-card">
  <div class="card" style="width: 16rem;height: 10rem;display: inline-block">
    <div class="card-body">
      <h5 class="card-title">Contact form</h5>
      <p class="card-text">Submits and stores data in csv file.</p>
  </div>
</div>
</a>
<a href="http://localhost/display.php" class="custom-card">
  <div class="card" style="width: 15rem; height: 10rem;display: inline-block">
    <div class="card-body">
      <h5 class="card-title">Display form</h5>
      <p class="card-text">Shows all the data in csv file.</p>
  </div>
</div>
</a>
<a href="http://localhost/search.php" class="custom-card">
  <div class="card" style="width: 16rem;height: 10rem; display: inline-block">
    <div class="card-body">
      <h5 class="card-title">Search form</h5>
      <p class="card-text">Search the data in csv file by id.</p>
  </div>
</div>
</a>
</center>
</body>
</html>

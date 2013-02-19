<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>UMW Course Ratings</title>
<link rel="stylesheet" href="styles.css" type="text/css" />


</head>
<body>
<?php
   include('header.html');
?>


<div id="wrap">
  <div class="pagewrapper">
		<div class="innerpagewrapper">
			<div class="page">
				<div class="content">
				
					<!-- CONTENT -->
					<h3>Rate a Course</h3>
					<p>Welcome to the Course Ratings Website for UMW</p>
					<form method = "post" action = "report2.php">
					<table>
					<tr><td>Name</td><td><input type="text" id="name" name="name" /></td></tr>
					<tr><td>Course</td><td>
					
					<select name="course">
					<option value="CPSC110">CPSC110</option>
					<option value="CPSC125">CPSC125</option>
					<option value="CPSC220">CPSC220</option>
					<option value="CPSC230">CPSC230</option>
					<option value="CPSC305">CPSC305</option>
					<option value="CPSC326">CPSC326</option>
					<option value="CPSC330">CPSC330</option>
					<option value="CPSC350">CPSC350</option>
					<option value="CPSC401">CPSC401</option>
					<option value="CPSC405">CPSC405</option>
					<option value="CPSC414">CPSC414</option>
					<option value="CPSC448">CPSC448</option>
					<option value="CPSC430">CPSC430</option>
					</select></td></tr>
					<tr><td>Professor</td><td>
				
					<select name="professor">
					<option value="Davies">Davies</option>
					<option value="Anewalt">Anewalt</option>
					<option value="Zacharski">Zacharski</option>
					<option value="Toth">Toth</option>
					<option value="Dean">Dean</option>
					<option value="Finlayson">Finlayson</option>
					<option value="Polack">Polack</option>
					</select></td></tr>
										
					<tr><td>Rate the course</td><td>Life Threatening <input type="range" name="rating" min="1" max="10" step="1" value="5"/>Unicorns and Rainbows</td></tr>
					<tr><td>Comments: </td><td><textarea rows="5" cols="25" name="comments" id="comments"></textarea></td></tr>
					<tr><td>&nbsp;</td><td><input type="submit" value="Post Rating" /></td></tr>
					</table>
					
					</form>
					<!-- END CONTENT -->
					
				</div>
				
				<?php
				    include('SIDEnFOOTER.html');
				?>
				   


			</div>
		</div>
	</div>
</div>
</body>
</html>

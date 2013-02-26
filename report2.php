
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Course Ratings</title>
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
					<p>We are going to rate these courses so hard! </p>
					
					<?php
					include('dbconnect.php');
					$name = $_POST['name'];
					$course = $_POST['course'];
					$professor = $_POST['professor'];
					$comments = $_POST['comments'];
					echo "<p> $name $course $professor $comments;";
					
					$query = "INSERT INTO ratings (name, course, professor, comments) 
					VALUES ('$name','$course','$professor','$comments');";
					echo "<p>$query</p>";
					$result = mysqli_query($db, $query)
                         or die("Error Querying Database");
					
					
					?>
					
					
					
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

<?php
if(isset($_POST['submit'])){
	if(empty($_POST['name']) && empty($_POST['email'])&& empty($_POST['contact'])&&empty($_POST['city'])&&empty($_POST['course'])&&empty($_POST['intrest'])){
		echo "Value not submitted";
		$name="none";
		$email="none";
		$contact="none";
		$city="none";
		$course="none";
		$intrest="none";
	}
	else{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$contact=$_POST['contact'];
		$city=$_POST['city'];
		$course=$_POST['course'];
		$intrest=$_POST['intrest'];
	}
}
else{
	$name="none";
	$email="none";
	$contact="none";
	$city="none";
	$course="none";
	$intrest="none";
}
?>

<!DOCTYPE html>
<head>
	<style type="text/css">
		table,td,th,tr{
	width: 50%;
	text-align: center;
	border: 2px solid black;
	border-collapse: collapse;
	border-spacing: 5px;
	padding: 10px;
	font-family: sans-serif;
}
tr:nth-child(even){
	background-color: #dddddd;
}
	</style>
</head>
<html>
  <body>
    <form method="post" action="f1.php">
        Name <input type="text" name="name" required ><br>
        Email <input type="Email" name="email" required><br>
        Contact <input type="text" name="contact" maxlength="10"><br>
        City <input type="text" name="city" ><br>
        Course <input type="text" name="course" ><br>
        Intrest:
        Volleyball <input type="radio" value="Volleyball" name="intrest"> 
        Music <input type="radio" value="music" name="intrest"> 
        reading books <input type="radio" value="reading books" name="intrest"> 
        indoor games <input type="radio" value="indoor games" name="intrest"><br>
        <input type="submit" value="submit" name="submit"><br>
    </form>
        <table>
              <tr width="100px">
                  <th>Name</th>
                  <th>Eamil</th>
                  <th>Contact</th>
                  <th>city</th>
                  <th>course</th>
                  <th>intrest</th>
              </tr>
              <tr>
                  <th><?php echo "$name" ?></th>
                  <th><?php echo "$email" ?></th>
                  <th><?php echo "$contact" ?></th>
                  <th><?php echo "$city" ?></th>
                  <th><?php echo "$course" ?></th>
                  <th><?php echo "$intrest" ?></th>
              </tr>
          </table>
  </body>
</html>

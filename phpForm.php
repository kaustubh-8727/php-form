<?php
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$city=$_POST['city'];
$course=$_POST['course'];
$intrest=$_POST['intrest'];
  //echo "name = $name<br>";
  //echo "email = $email<br>";
  //echo "contact = $contact<br>";
  //echo "city = $city<br>";
  //echo "course = $course<br>";
  //echo "intrest = $intrest<br>";
?>

<!DOCTYPE html>
<html>
  <body>
    <form method="post" action="index.php">
        Name <input type="text" name="name" ><br>
        Email <input type="Email" name="email"><br>
        Contact <input type="text" name="contact" maxlength="10"><br>
        City <input type="text" name="city"><br>
        Course <input type="text" name="course"><br>
        Intrest:
        Volleyball <input type="radio" value="Volleyball" name="intrest"> 
        Music <input type="radio" value="music" name="intrest"> 
        reading books <input type="radio" value="reading books" name="intrest"> 
        indoor games <input type="radio" value="indoor games" name="intrest"><br>
        <input type="submit" ><br>
        <table border=1px; style=" border-collapse: collapse">
              <tr>
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
    </form>
  </body>
</html>

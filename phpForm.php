<?php
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$city=$_POST['city'];
$course=$_POST['course'];
$intrest=$_POST['intrest'];
  echo "name = $name<br>";
  echo "email = $email<br>";
  echo "contact = $contact<br>";
  echo "city = $city<br>";
  echo "course = $course<br>";
  echo "intrest = $intrest<br>";
?>

<!DOCTYPE html>
<html>
  <body>
    <form method="post" action="">
        Name <input type="text" name="name" required=""><br>
        Email <input type="text" name="email" required=""><br>
        Contact <input type="text" name="contact" required=""><br>
        City <input type="text" name="city" required=""><br>
        Course <input type="text" name="course" required=""><br>
        Intrest:
        Volleyball <input type="radio" value="Volleyball" name="intrest"> 
        Music <input type="radio" value="music" name="intrest"> 
        reading books <input type="radio" value="reading books" name="intrest"> 
        indoor games <input type="radio" value="indoor games" name="intrest"><br>
        <input type="submit" >
    </form>
  </body>
</html>

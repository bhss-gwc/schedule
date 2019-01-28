<!DOCTYPE html>
<html>
<body bgcolor="#6a5acd">
<p style="margin-right: 40px">

<marquee><h1>Ice Cream Form</h1></marquee>

<div style="text-align: center;"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPy3B6B90FLw26DjNKTSGCQIkX0rJg4ttyG3ZWRB0Qv1NlUsPg"></div>

<form action="handler.php" method="POST">
  First name:<br>
  <input type="text" name="firstname" /><br>
  Last name:<br>
  <input type="text" name="lastname" /><br><br>


  Pick an ice cream flavor:<br>
  <input type="radio" name="flavor" value="chocolate"><font color="brown"> chocolate</font><br>
  <input type="radio" name="flavor" value="vanilla"><font color="white"> vanilla</font><br>
  <input type="radio" name="flavor" value="strawberry"><font color="pink"> strawberry</font><br>
<br>

Pick a topping:<br>
<select name="topping">
  <option value="sprinkles">sprinkles</option>
  <option value="chocolate syrup">chocolate syrup</option>
  <option value="whipped cream">whipped cream</option>
</select><br><br>


  Choose one:<br>
  <input type="checkbox" name="dessert[]" value="ice cream"> I like ice cream<br>
  <input type="checkbox" name="dessert[]" value="cake"> I like cake<br>

<input type="submit" value="submit">

</form>

</p>
</body>
</html>

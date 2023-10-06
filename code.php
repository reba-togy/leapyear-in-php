<html>
<body>
<form action="leapyear.php" method="post">
Enter the number:
<input type="number" name="n1"/><br><br>
<input type="submit" name="submit" value="Reverse Number">
</form>
<?php
if(isset($_POST['submit']))
{
$n= $_POST['n1'];
if($n%4==0)
{
if($n%100==0)
{
if($n%400==0)
  {
     echo"n is a leap year";
  }
else
  {
echo"n is not a leap year";
  }
}
else
  {
echo"n is a leap year";
  }
}
else
  {
echo"n is not a leap year";
  }
}
?>
</body>
</html>

<!DOCTYPE html> 
<html>
<head><title>Register Form</title></head> 
<body>
<h2>Welcome to the ABC Web Site</h2> 
<h3> - programmed by Prafulla Kalusinh Garasia - </h3>
<form  action="reply.php"  method="post">
<p>
 Enter your name: <input type="text" name="username"><br />
 You live in: <input type="text" name="region"><br /><br />
 <input type="submit" name="SUBMIT" value="Submit">&nbsp;&nbsp;&nbsp;
 <input type="reset" name="RESET" value="Clear"></p>
 </form>
 <p><br /><em>
 <?php
 echo "Date: "  .  date('F dS, Y');
 ?>
 </em></p> 
 </body>
 </html>
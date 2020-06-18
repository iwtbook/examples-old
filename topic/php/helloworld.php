<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Hello World PHP Style</title>
</head>
<body>

</pre>
<?php
  $dollars = 100000;
  $name = "Thomas has $$dollars";
  print $name;
  print "Thomas says\n<br>";
  print "this is an intersection!\n";
  print '&lt;br&gt;';  
  print "<script>alert('hi')</script>";
?>


<form>
	
	Name: <input type="text" name="magic" value="<?= $name; ?>" />

</form>


</body>
</html>

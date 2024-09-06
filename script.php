<?php
 $a=$_REQUEST['role'];
 $b='teacher';
 //echo"$a";
if($a==$b)
{
	echo "<script>location.href='dash.php'</script>";
}
else
{
	echo "<script>location.href='homepage.html'</script>";
}
?>


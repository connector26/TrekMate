<?php


session_start();
if(isset($_SESSION['tmaUser']))
{


}
else
{
	header("location:index.php");
}

?>

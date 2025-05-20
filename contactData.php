<?php
	include"connect.php";
		$nm=$_POST['txtName'];
		$em=$_POST['txtEmail'];
		$ms=$_POST['txtMsg'];


	$x=pg_query($con,"insert into contactus values('$nm','$em','$ms')");

	if($x)
	{
?>
	<script>
		if(confirm("message sent successfully"))
			location="contact.php";
		else
			location="contact.php";
	</script>

	<?php
	}
	else
	{
	?>
	<script>
		if(confirm("error in transmission"))
			location="contact.php";
		else
			location="contact.php";
	</script>
	<?php
	}
?>


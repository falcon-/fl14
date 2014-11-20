<?php require 'include/config.php';?>
<?php include 'include/header.php';?>
<h1>Contact Us</h1>
<p>
Why? Because we care!
</p>
<?php
if(isset($_POST['first_name']))
{//if there's data, show it 
	//echo $_POST['FirstName'];
	
	$message = process_post();
	
	safeEmail('rmalav01@seattlecentral.edu','test subject',$message);
	echo 'Thank you for your email!';
	
}else{//show the form

    echo '
    <form action="contact.php" method="post">
    First Name: <input type="text" name="first_name" required="required" placeholder="FirstName"/>
    <br />
    Email: <input type="email" name="email" required="required" placeholder="Enter a valid email"/>
    <br />
    Comments:<textarea name="comments" placeholder="comments..."></textarea>
    <input type="submit" value="Click me!" />
    </form>
    ';
	
}


?>

<?php include 'include/footer.php';?>
<?php require 'include/config.php';?>
<?php include 'include/header.php';?>
<h1>Registration Form</h1>
<p>
Why? To keep track of you!
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
    <form action="register.php" method="post">
    First Name: <input type="text" name="first_name" required="required" placeholder="FirstName"/>
    <br /><br>
    Gender:<br><br>
    <input type="radio" name="gender" value="male"> Male<br>
    <input type="radio" name="gender" value="female"> Female<br><br>
    Email: <input type="email" name="email" required="required" placeholder="Enter a valid email"/>
    <br /><br>
    How did you hear from us?:<br><br>
    Newspaper <input type="checkbox" name="newspaper" value="Newspaper"><br>
    Friend    <input type="checkbox" name="friend" value="Friend"><br>
    Websearch <input type="checkbox" name="websearch" value="Websearch"><br><br>
    Comments: <br>
    	<textarea name="comments" placeholder="comments..."></textarea>
    <input type="submit" value="Click me!" />
    </form>
    ';
	
}


?>

<?php include 'include/footer.php';?>
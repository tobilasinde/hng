<html>
<head>
<title>Login</title>
</head>
<body>
 <?php
/*** check that both the username, password have been submitted ***/
if(!isset( $_POST['username'], $_POST['password']))
{
    $message = 'Please enter a valid username and password';
}
/*** check the username has only alpha numeric characters ***/
elseif (ctype_alnum($_POST['username']) != true)
{
    /*** if there is no match ***/
    $message = "Username must be alpha numeric";
}
/*** check the password has only alpha numeric characters ***/
elseif (ctype_alnum($_POST['password']) != true)
{
        /*** if there is no match ***/
        $message = "Password must be alpha numeric";
}
elseif (strlen($_POST['password']) < 8)
{
        /*** if there is no match ***/
        $message = "Password 8 characters or longer";
}
else
{
        /*** tell the user we are logged in ***/
        $message = 'You are now logged in';
}
?>
<p><?php echo $message; ?>
<h2>Login Here</h2>
 <form action="form.php" method="post">
 <fieldset>
 <p>
 <label for="username">Username</label>
 <input type="text" id="username" name="username" value="" maxlength="20" />
 </p>
 <p>
 <label for="password">Password</label>
 <input type="text" id="password" name="password" value="" maxlength="20" />
 </p>
 <p>
 <input type="submit" value="Login" />
 </p>
 </fieldset>
 </form>

</body>
</html>

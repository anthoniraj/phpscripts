<?php
   $user = $_POST['uname'];
   $passwd  = $_POST['pwd'];
   if(isset($user) && isset($passwd))
   {
       echo $user. " " . $passwd;
       echo "<br />". $_SERVER['PHP_SELF'];
   }
   else
   {   
?>
<html>
    <head>
        <title>Login Page</title>
    </head>
    <body>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >
            User Name <input type="text" name="uname" /> <br/><br/>
            Password <input type="password" name="pwd" /> <br/><br />            
            <input type="submit" value="Login"/>
        </form>
</body>
</html>
<?php
   }
?>   
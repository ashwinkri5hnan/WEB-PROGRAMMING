<html>
    <head><title></title></head>
    <body>
        <form name="forms" method="post" action="<?php echo$_SERVER['PHP_SELF']; ?>">
        Name:<input type="text"  name="name"><br><br>
        Email Id:<input type="Email" name="mail"><br><br>
        Address:<textarea name="Address"></textarea><br><br>
        Gender:
        <input type="radio" id="male" name="gender" value="male">male
        <input type="radio" id="female" name="gender" value="female">female<br><br>
        Date of birth:<input type="date" name="dob"><br><br>
        <input type="submit" name="submit" value="submit">
        </form>
    
    </body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=$_REQUEST['name'];
    $email=$_REQUEST['mail'];
    $Address=$_REQUEST['Address'];
    $gender=$_REQUEST['gender'];
    $dob=$_REQUEST['dob'];
    echo "Name:".$name."<br>";
    echo "Email ID:".$email."<br>";
    echo "Address:".$Address."<br>";
    echo "Gender:".$gender."<br>";
    echo "Date of birth" . $dob . "<br>";
}?>
<?php
$servername="localhost";
$username="root";
$password="";
$database_name="mydemodb";

$conn=mysqli_connect($servername,$username,$password,$database_name);

if(!$conn)
{
    die("Connection Failed:".mysqli_connect_error());
}

if(isset($_POST['submit']))
{
    $firstName=$_POST['firstName'];
    $number=$_POST['number'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];

    function checkemail($email) {
        return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) ? FALSE : TRUE;
    }
    if(!checkemail("$email")){
        echo "Invalid email address.";
    }
    else
    {
        $sql_query = "INSERT INTO form(firstName,number,email,gender)
        VALUES ('$firstName',$number,'$email','$gender')";

        if (mysqli_query($conn,$sql_query))
        {
            echo "new details entry inserted successfully";
        }
        else{
            echo "error: " .$sql ."" .mysqli_error($conn);
        }
        header("location: form2.html");
    }
}
mysqli_close($conn);

?>
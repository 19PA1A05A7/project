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
if(isset($_POST['back'])){
    header("location: form1.html");

}

if(isset($_POST['next']))
{
    $fav_language1=$_POST['fav_language1'];
    $fav_language2=$_POST['fav_language2'];
    $fav_language3=$_POST['fav_language3'];
    $fav_language4=$_POST['fav_language4'];
    $fav_language5=$_POST['fav_language5'];
    $fav_language6=$_POST['fav_language6'];
    $fav_language7=$_POST['fav_language7'];
    $fav_language8=$_POST['fav_language8'];
    $fav_language9=$_POST['fav_language9'];
    $fav_language10=$_POST['fav_language10'];
    $fav_language11=$_POST['fav_language11'];
    $fav_language12=$_POST['fav_language12'];
    $fav_language13=$_POST['fav_language13'];
    $fav_language14=$_POST['fav_language14'];
    $fav_language15=$_POST['fav_language15'];
    $fav_language16=$_POST['fav_language16'];
    $fav_language17=$_POST['fav_language17'];
    $fav_language18=$_POST['fav_language18'];
    $fav_language19=$_POST['fav_language19'];
    $fav_language20=$_POST['fav_language20'];
    $fav_language21=$_POST['fav_language21'];
    $fav_language22=$_POST['fav_language22'];
    $fav_language23=$_POST['fav_language23'];
    $fav_language24=$_POST['fav_language24'];
    $fav_language25=$_POST['fav_language25'];
    $fav_language26=$_POST['fav_language26'];

    $temp = "SELECT max(id) from form";
    $sql_query = "UPDATE form SET fav_language1='$fav_language1',fav_language2='$fav_language2',fav_language3='$fav_language3',fav_language4='$fav_language4',fav_language5='$fav_language5',fav_language6='$fav_language6',fav_language7='$fav_language7',fav_language8='$fav_language8',fav_language9='$fav_language9',fav_language10='$fav_language10',fav_language11='$fav_language11',fav_language12='$fav_language12',fav_language13='$fav_language13',fav_language14='$fav_language14',fav_language15='$fav_language15',fav_language16='$fav_language16',fav_language17='$fav_language17',fav_language18='$fav_language18',fav_language19='$fav_language19',fav_language20='$fav_language20',fav_language21='$fav_language21',fav_language22='$fav_language22',fav_language23='$fav_language23',fav_language24='$fav_language24',fav_language25='$fav_language25',fav_language26='$fav_language26'
    where id in($temp)";
    $sql_query1 = "INSERT INTO student_choice(choice) values ('$fav_language1')";
    $sql_query2 = "INSERT INTO student_choice(choice) values ('$fav_language2')";
    $sql_query3 = "INSERT INTO student_choice(choice) values ('$fav_language3')";
    $sql_query4 = "INSERT INTO student_choice(choice) values ('$fav_language4')";
    $sql_query5 = "INSERT INTO student_choice(choice) values ('$fav_language5')";
    $sql_query6 = "INSERT INTO student_choice(choice) values ('$fav_language6')";
    $sql_query7 = "INSERT INTO student_choice(choice) values ('$fav_language7')";
    $sql_query8 = "INSERT INTO student_choice(choice) values ('$fav_language8')";
    $sql_query9 = "INSERT INTO student_choice(choice) values ('$fav_language9')";
    $sql_query10 = "INSERT INTO student_choice(choice) values ('$fav_language10')";
    $sql_query11 = "INSERT INTO student_choice(choice) values ('$fav_language11')";
    $sql_query12 = "INSERT INTO student_choice(choice) values ('$fav_language12')";
    $sql_query13 = "INSERT INTO student_choice(choice) values ('$fav_language13')";
    $sql_query14= "INSERT INTO student_choice(choice) values ('$fav_language14')";
    $sql_query15= "INSERT INTO student_choice(choice) values ('$fav_language15')";
    $sql_query16= "INSERT INTO student_choice(choice) values ('$fav_language16')";
    $sql_query17= "INSERT INTO student_choice(choice) values ('$fav_language17')";
    $sql_query18= "INSERT INTO student_choice(choice) values ('$fav_language18')";
    $sql_query19= "INSERT INTO student_choice(choice) values ('$fav_language19')";
    $sql_query20= "INSERT INTO student_choice(choice) values ('$fav_language20')";
    $sql_query21= "INSERT INTO student_choice(choice) values ('$fav_language21')";
    $sql_query22= "INSERT INTO student_choice(choice) values ('$fav_language22')";
    $sql_query23= "INSERT INTO student_choice(choice) values ('$fav_language23')";
    $sql_query24= "INSERT INTO student_choice(choice) values ('$fav_language24')";
    $sql_query25= "INSERT INTO student_choice(choice) values ('$fav_language25')";
    $sql_query26= "INSERT INTO student_choice(choice) values ('$fav_language26')";
    

    if (mysqli_query($conn,$sql_query) && mysqli_query($conn,$sql_query1) && mysqli_query($conn,$sql_query2) && mysqli_query($conn,$sql_query3) && mysqli_query($conn,$sql_query4)  && mysqli_query($conn,$sql_query5) && mysqli_query($conn,$sql_query6) && mysqli_query($conn,$sql_query7) && mysqli_query($conn,$sql_query8) && mysqli_query($conn,$sql_query9) && mysqli_query($conn,$sql_query10) && mysqli_query($conn,$sql_query11) && mysqli_query($conn,$sql_query12) && mysqli_query($conn,$sql_query13) && mysqli_query($conn,$sql_query14) && mysqli_query($conn,$sql_query15) && mysqli_query($conn,$sql_query16) && mysqli_query($conn,$sql_query17) && mysqli_query($conn,$sql_query18) && mysqli_query($conn,$sql_query19) && mysqli_query($conn,$sql_query20) && mysqli_query($conn,$sql_query21) && mysqli_query($conn,$sql_query22) && mysqli_query($conn,$sql_query23) && mysqli_query($conn,$sql_query24) && mysqli_query($conn,$sql_query25) && mysqli_query($conn,$sql_query26) )
    {
        echo "new details entry inserted successfully";
        
    }
    else{
        echo "error: " .$sql ."" .mysqli_error($conn);
    }
    mysqli_close($conn);
    header("location: form3.html");

}

?>
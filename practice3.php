<?php
session_start();
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
    header("location: form2.html");

}

if(isset($_POST['submit']))
{
    $fav_language27=$_POST['fav_language27'];
    $fav_language28=$_POST['fav_language28'];
    $fav_language29=$_POST['fav_language29'];
    $fav_language30=$_POST['fav_language30'];
    $fav_language31=$_POST['fav_language31'];
    $fav_language32=$_POST['fav_language32'];
    $fav_language33=$_POST['fav_language33'];
    $fav_language34=$_POST['fav_language34'];
    $fav_language35=$_POST['fav_language35'];
    $fav_language36=$_POST['fav_language36'];
    $fav_language37=$_POST['fav_language37'];
    $fav_language38=$_POST['fav_language38'];
    $fav_language39=$_POST['fav_language39'];
    $fav_language40=$_POST['fav_language40'];
    $fav_language41=$_POST['fav_language41'];
    $fav_language42=$_POST['fav_language42'];
    $fav_language43=$_POST['fav_language43'];
    $fav_language44=$_POST['fav_language44'];
    $fav_language45=$_POST['fav_language45'];
    $fav_language46=$_POST['fav_language46'];
    $fav_language47=$_POST['fav_language47'];
    $fav_language48=$_POST['fav_language48'];
    $fav_language49=$_POST['fav_language49'];
    $fav_language50=$_POST['fav_language50'];



    $temp="SELECT max(id) from form";
    $sql_query = "UPDATE form SET fav_language27='$fav_language27',fav_language28='$fav_language28',fav_language29='$fav_language29',fav_language30='$fav_language30',fav_language31='$fav_language31',fav_language32='$fav_language32',fav_language33='$fav_language33',fav_language34='$fav_language34',fav_language35='$fav_language35',fav_language36='$fav_language36',fav_language37='$fav_language37',fav_language38='$fav_language38',fav_language39='$fav_language39',fav_language40='$fav_language40',fav_language41='$fav_language41',fav_language42='$fav_language42',fav_language43='$fav_language43',fav_language44='$fav_language44',fav_language45='$fav_language45',fav_language46='$fav_language46',fav_language47='$fav_language47',fav_language48='$fav_language48',fav_language49='$fav_language49',fav_language50='$fav_language50'
    where id in($temp)";
    $sql_query27= "INSERT INTO student_choice(choice) values ('$fav_language27')";
    $sql_query28= "INSERT INTO student_choice(choice) values ('$fav_language28')";
    $sql_query29= "INSERT INTO student_choice(choice) values ('$fav_language29')";
    $sql_query30= "INSERT INTO student_choice(choice) values ('$fav_language30')";
    $sql_query31= "INSERT INTO student_choice(choice) values ('$fav_language31')";
    $sql_query32= "INSERT INTO student_choice(choice) values ('$fav_language32')";
    $sql_query33= "INSERT INTO student_choice(choice) values ('$fav_language33')";
    $sql_query34= "INSERT INTO student_choice(choice) values ('$fav_language34')";
    $sql_query35= "INSERT INTO student_choice(choice) values ('$fav_language35')";
    $sql_query36= "INSERT INTO student_choice(choice) values ('$fav_language36')";
    $sql_query37= "INSERT INTO student_choice(choice) values ('$fav_language37')";
    $sql_query38= "INSERT INTO student_choice(choice) values ('$fav_language38')";
    $sql_query39= "INSERT INTO student_choice(choice) values ('$fav_language39')";
    $sql_query40= "INSERT INTO student_choice(choice) values ('$fav_language40')";
    $sql_query41= "INSERT INTO student_choice(choice) values ('$fav_language41')";
    $sql_query42= "INSERT INTO student_choice(choice) values ('$fav_language42')";
    $sql_query43= "INSERT INTO student_choice(choice) values ('$fav_language43')";
    $sql_query44= "INSERT INTO student_choice(choice) values ('$fav_language44')";
    $sql_query45= "INSERT INTO student_choice(choice) values ('$fav_language45')";
    $sql_query46= "INSERT INTO student_choice(choice) values ('$fav_language46')";
    $sql_query47= "INSERT INTO student_choice(choice) values ('$fav_language47')";
    $sql_query48= "INSERT INTO student_choice(choice) values ('$fav_language48')";
    $sql_query49= "INSERT INTO student_choice(choice) values ('$fav_language49')";
    $sql_query50= "INSERT INTO student_choice(choice) values ('$fav_language50')";

    if (mysqli_query($conn,$sql_query) && mysqli_query($conn,$sql_query27) && mysqli_query($conn,$sql_query28) && mysqli_query($conn,$sql_query29) && mysqli_query($conn,$sql_query30) && mysqli_query($conn,$sql_query31) && mysqli_query($conn,$sql_query32) && mysqli_query($conn,$sql_query33) && mysqli_query($conn,$sql_query34) && mysqli_query($conn,$sql_query35) && mysqli_query($conn,$sql_query36) && mysqli_query($conn,$sql_query37) && mysqli_query($conn,$sql_query38) && mysqli_query($conn,$sql_query39) && mysqli_query($conn,$sql_query40) && mysqli_query($conn,$sql_query41) && mysqli_query($conn,$sql_query42) && mysqli_query($conn,$sql_query43) && mysqli_query($conn,$sql_query44) && mysqli_query($conn,$sql_query45) && mysqli_query($conn,$sql_query46) && mysqli_query($conn,$sql_query47) && mysqli_query($conn,$sql_query48) && mysqli_query($conn,$sql_query49) && mysqli_query($conn,$sql_query50) )
    {
        echo "Your Personality Type is : ";
        $E_Score="SELECT SUM(POINTS) FROM STUDENT_CHOICE CH INNER JOIN SCORE S ON CH.CHOICE=S.QUES GROUP BY TYPE HAVING TYPE='E'";
        $I_Score="SELECT SUM(POINTS) FROM STUDENT_CHOICE CH INNER JOIN SCORE S ON CH.CHOICE=S.QUES GROUP BY TYPE HAVING TYPE='I'";
        $S_Score="SELECT SUM(POINTS) FROM STUDENT_CHOICE CH INNER JOIN SCORE S ON CH.CHOICE=S.QUES GROUP BY TYPE HAVING TYPE='S'";
        $N_Score="SELECT SUM(POINTS) FROM STUDENT_CHOICE CH INNER JOIN SCORE S ON CH.CHOICE=S.QUES GROUP BY TYPE HAVING TYPE='N'";
        $T_Score="SELECT SUM(POINTS) FROM STUDENT_CHOICE CH INNER JOIN SCORE S ON CH.CHOICE=S.QUES GROUP BY TYPE HAVING TYPE='T'";
        $F_Score="SELECT SUM(POINTS) FROM STUDENT_CHOICE CH INNER JOIN SCORE S ON CH.CHOICE=S.QUES GROUP BY TYPE HAVING TYPE='F'";
        $J_Score="SELECT SUM(POINTS) FROM STUDENT_CHOICE CH INNER JOIN SCORE S ON CH.CHOICE=S.QUES GROUP BY TYPE HAVING TYPE='J'";
        $P_Score="SELECT SUM(POINTS) FROM STUDENT_CHOICE CH INNER JOIN SCORE S ON CH.CHOICE=S.QUES GROUP BY TYPE HAVING TYPE='P'";
        $E_result=mysqli_query($conn,$E_Score);
        $E_array=mysqli_fetch_array($E_result);
        $I_result=mysqli_query($conn,$I_Score);
        $I_array=mysqli_fetch_array($I_result);
        $S_result=mysqli_query($conn,$S_Score);
        $S_array=mysqli_fetch_array($S_result); 
        $N_result=mysqli_query($conn,$N_Score);
        $N_array=mysqli_fetch_array($N_result);
        $T_result=mysqli_query($conn,$T_Score);
        $T_array=mysqli_fetch_array($T_result);
        $F_result=mysqli_query($conn,$F_Score);
        $F_array=mysqli_fetch_array($F_result);
        $J_result=mysqli_query($conn,$J_Score);
        $J_array=mysqli_fetch_array($J_result);
        $P_result=mysqli_query($conn,$P_Score);
        $P_array=mysqli_fetch_array($P_result);

        if ($E_array[0] <= $I_array[0]){
            echo "INTROVERT , ";
        }
        else{
            echo "EXTROVERT , ";
        }
        if ($S_array[0] <= $N_array[0]){
            echo "INTUITIVE , ";
        }
        else{
            echo "SENSING , ";
        }
        if ($T_array[0] <= $F_array[0]){
            echo "FEELING , ";
        }
        else{
            echo "THINKING , ";
        }
        if ($J_array[0] <= $P_array[0]){
            echo "PERCEIVING . ";
        }
        else{
            echo "JUDGING . ";
        }
        
        $last_query="TRUNCATE TABLE student_choice";
        mysqli_query($conn,$last_query);
        
    }
    else
    {
        echo "error: " .$sql ."" .mysqli_error($conn);

    }
    mysqli_close($conn);

}
?>


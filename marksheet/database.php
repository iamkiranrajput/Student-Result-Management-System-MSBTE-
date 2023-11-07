<?php
include_once("connection.php");
if(isset($_POST['submit']))
{
$lastname=$_POST['lastname'];
$middlename=$_POST['middlename'];
$firstname=$_POST['firstname'];

$examination=$_POST['examination'];
$seatno=$_POST['seatno'];
$semester=$_POST['semester'];
$course=$_POST['course'];

$sub1=$_POST['sub1'];
$sub1these=$_POST['sub1these'];
$sub1thpa=$_POST['sub1thpa'];
$sub1prese=$_POST['sub1prese'];
$sub1prpa=$_POST['sub1prpa'];

$sub2=$_POST['sub2'];
$sub2these=$_POST['sub2these'];
$sub2thpa=$_POST['sub2thpa'];
$sub2prese=$_POST['sub2prese'];
$sub2prpa=$_POST['sub2prpa'];

$sub3=$_POST['sub3'];
$sub3these=$_POST['sub3these'];
$sub3thpa=$_POST['sub3thpa'];
$sub3prese=$_POST['sub3prese'];
$sub3prpa=$_POST['sub3prpa'];

$sub4=$_POST['sub4'];
$sub4these=$_POST['sub4these'];
$sub4thpa=$_POST['sub4thpa'];
$sub4prese=$_POST['sub4prese'];
$sub4prpa=$_POST['sub4prpa'];

$sub5=$_POST['sub5'];
$sub5prese=$_POST['sub5prese'];
$sub5prpa=$_POST['sub5prpa'];
$enrollmentno=$_POST['enrollmentno'];

//    $sql="INSERT INTO form1(lastname,firstname,middlename,examination,seatno,semester,course,sub1,sub1these,sub1thpa,sub1prese,sub1prpa,sub2,sub2these,sub2thpa,sub2prese,sub2prpa,sub3,sub3these,sub3thpa,sub3prese,sub3prpa,sub4,sub4these,sub4thpa,sub4prese,sub4prpa,sub5,sub5these,sub5thpa,sub5prese,sub5prpa)VALUE('$lastname','$firstname','$middlename','$examination','$seatno','$semester','$course','$sub1','$sub1these','$sub1thpa','$sub1prese','$sub1prpa','$sub2','$sub2these','$sub2thpa','$sub2prese','$sub2prpa','$sub3','$sub3these','$sub3thpa','$sub3prese','$sub3prpa','$sub4','$sub4these','$sub4thpa','$sub4prese','$sub4prpa','$sub5','$sub5these','$sub5thpa',$sub5prese','$sub5prpa')";
$sql="INSERT INTO student(lastname,firstname,middlename,examination,seatno,semester,course,sub1,sub1these,sub1thpa,sub1prese,sub1prpa,sub2,sub2these,sub2thpa,sub2prese,sub2prpa,sub3,sub3these,sub3thpa,sub3prese,sub3prpa,sub4,sub4these,sub4thpa,sub4prese,sub4prpa,sub5,sub5prese,sub5prpa,enrollmentno)value('$lastname','$firstname','$middlename','$examination','$seatno','$semester','$course','$sub1','$sub1these','$sub1thpa','$sub1prese','$sub1prpa','$sub2','$sub2these','$sub2thpa','$sub2prese','$sub2prpa','$sub3','$sub3these','$sub3thpa','$sub3prese','$sub3prpa','$sub4','$sub4these','$sub4thpa','$sub4prese','$sub4prpa','$sub5','$sub5prese','$sub5prpa','$enrollmentno')";


if($conn->query($sql) ===TRUE)
{
    echo'<script>window.alert("Data Insert");</script>';
}

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" type="text/css" href="css/main1.css">

</head>

<body>


    <?php
include_once("connection.php");

$sql="SELECT * FROM student Where seatno={$_GET['id']}";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

if(isset($_POST['update']))
{
$lastname=$_POST['lastname'];
$middlename=$_POST['middlename'];
$firstname=$_POST['firstname'];

$examination=$_POST['examination'];
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

$sql="UPDATE student SET lastname='$lastname', firstname='$firstname', middlename='$middlename', examination='$examination', semester='$semester', course='$course', sub1='$sub1', sub1these='$sub1these', sub1thpa='$sub1thpa', sub1prese='$sub1prese', sub1prpa='$sub1prpa', sub2='$sub2', sub2these='$sub2these', sub2thpa='$sub2thpa', sub2prese='$sub2prese', sub2prpa='$sub2prpa', sub3='$sub3', sub3these='$sub3these', sub3thpa='$sub3thpa', sub3prese='$sub3prese', sub3prpa='$sub3prpa', sub4='$sub4', sub4these='$sub4these', sub4thpa='$sub4thpa', sub4prese='$sub4prese', sub4prpa='$sub4prpa', sub5='$sub5', sub5prese='$sub5prese', sub5prpa='$sub5prpa', enrollmentno='$enrollmentno' WHERE seatno={$_GET['id']}";

if($conn->query($sql) ===TRUE)
{
    echo'<script>window.alert("Data Updated");</script>';
    echo'<script>window.location="fetch.php";</script>';
} 
}
?>

    <div class="container-contact100">
    <a href="fetch.php" class="btn btn-light" style="align-self:flex-start; ">Back</a>

        <div class="wrap-contact100">
            <!-- <div class="container">  -->
    

            <form class="contact100-form validate-form" action="" method="POST" autocomplete="off">
                <span class="contact100-form-title">
				Update Student Record 
				</span>

                <label class="label-input100" for="name">Your Name *</label>
                <div class="wrap-input100 rs1 validate-input">
                    <input class="input100" type="text" name="lastname" placeholder="Last Name"  value="<?php echo $row['lastname']?>" id="last-name">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs1 validate-input">
                    <input class="input100" type="text" name="firstname" placeholder="First name" value="<?php echo $row['firstname']?>" id="first-name">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs1 validate-input">
                    <input class="input100" type="text" name="middlename" placeholder="Middle name" value="<?php echo $row['middlename']?>" id="middle-name">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 rs1 validate-input">
                    <select name="examination" class="input100" id="examination">
                    <option value="<?php echo $row['examination']?>"><?php echo $row['examination']?></option>
                    
                    <option value="WINTER 2023">SUMMER 2023</option>
                    <option value="SUMMER 2022">SUMMER 2022</option>
                    <option value="WINTER 2022">WINTER 2022</option>
                    <option value="SUMMER 2021">SUMMER 2021</option>
                    <option value="WINTER 2021">WINTER 2021</option>
                    <option value="SUMMER 2020">SUMMER 2020</option>
                    <option value="WINTER 2020">WINTER 2020</option>
                    </select>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 rs1 validate-input">
                    <input class="input100" type="number" name="seatno" value="<?php echo $row['seatno']?>" placeholder="Seat No." id="seat-no" style="background-color: rgb(231, 231, 237);" disabled>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 rs1 validate-input">
                    <select name="semester" class="input100" id="semester">
                        <option value="<?php echo $row['semester']?>"><?php echo $row['semester']?></option>
                        
                        <option value="FIRST SEMESTER">1st Semester</option>
                        <option value="SECOUND SEMESTER">2nd Semester</option>
                        <option value="THIRD SEMESTER">3rd Semester</option>
                        <option value="FOURTH SEMESTER">4th Semester</option>
                        <option value="FIFTH SEMESTER">5th Semester</option>
                        <option value="SIXTH SEMESTER">6th Semester</option>
                    </select>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100  validate-input">
                <select name="course" class="input100" id="course">
                        <option value="<?php echo $row['course']?>"><?php echo $row['course']?></option>
                        <option value="Diploma in Computer Engineering">Diploma in Computer Engineering</option>
                        <option value="Diploma in Electronics Engineering">Diploma in Electronics Engineering</option>
                        <option value="Diploma in Chemical Engineering">Diploma in Chemical Engineering</option>
                        <option value="Diploma in Civil Engineering">Diploma in Civil Engineering</option>
                        <option value="Diploma in Mechanical Engineering">Diploma in Mechanical Engineering</option>
                    </select>
                    <span class="focus-input100"></span>
                </div>


                <label class="label-input100" for="subject-name">Subject Name and subject mark *</label>

                <div class="wrap-input100 rs0 validate-input">
                    <input id="subname" class="input100" type="text" name="sub1" placeholder="Enter subject-1" value="<?php echo $row['sub1']?>">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs1 validate-input">
                    <input id="subese70" class="input100" type="number" name="sub1these" value="<?php echo $row['sub1these']?>" placeholder="70/__ESE">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs1 validate-input">
                    <input id="subtest30" class="input100" type="number" value="<?php echo $row['sub1thpa']?>" name="sub1thpa" placeholder="30/__CTEST">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs1 validate-input">
                    <input id="subtest50" class="input100" type="number" name="sub1prese" placeholder="50/__ESE" value="<?php echo $row['sub1prese']?>">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs1 validate-input">
                    <input id="subtest50" class="input100" type="number" name="sub1prpa" placeholder="50/__CTEST" value="<?php echo $row['sub1prpa']?>">
                    <span class="focus-input100"></span>
                </div>



                <div class="wrap-input100 rs0 validate-input">
                    <input id="subname" class="input100" type="text" name="sub2" placeholder="Enter subject-2" value="<?php echo $row['sub2']?>">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs1 validate-input">
                    <input id="subese70" class="input100" type="number" name="sub2these" placeholder="70/__ESE" value="<?php echo $row['sub2these']?>">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs1 validate-input">
                    <input id="subtest30" class="input100" type="number" name="sub2thpa" placeholder="30/__CTEST" value="<?php echo $row['sub2thpa']?>">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs1 validate-input">
                    <input id="subtest25" class="input100" type="number" name="sub2prese" placeholder="25/__ESE" value="<?php echo $row['sub2prese']?>">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs1 validate-input">
                    <input id="subtest25" class="input100" type="number" name="sub2prpa" placeholder="25/__CTEST" value="<?php echo $row['sub2prpa']?>">
                    <span class="focus-input100"></span>
                </div>




                <div class="wrap-input100 rs0 validate-input">
                    <input id="subname" class="input100" type="text" name="sub3" placeholder="Enter subject-3" value="<?php echo $row['sub3']?>">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 rs1 validate-input">
                    <input id="subese70" class="input100" type="number" name="sub3these" placeholder="70/__ESE" value="<?php echo $row['sub3these']?>">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs1 validate-input">
                    <input id="subtest30" class="input100" type="number" name="sub3thpa" placeholder="30/__CTEST" value="<?php echo $row['sub3thpa']?>">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs1 validate-input">
                    <input id="subtest25" class="input100" type="number" name="sub3prese" placeholder="25/__ESE" value="<?php echo $row['sub3prese']?>">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs1 validate-input">
                    <input id="subtest25" class="input100" type="number" name="sub3prpa" placeholder="25/__CTEST" value="<?php echo $row['sub3prpa']?>">
                    <span class="focus-input100"></span>
                </div>




                <div class="wrap-input100 rs0 validate-input">
                    <input id="subname" class="input100" type="text" name="sub4" placeholder="Enter subject-4" value="<?php echo $row['sub4']?>">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 rs1 validate-input">
                    <input id="subese70" class="input100" type="number" name="sub4these" placeholder="70/__ESE" value="<?php echo $row['sub4these']?>">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs1 validate-input">
                    <input id="subtest30" class="input100" type="number" name="sub4thpa" placeholder="30/__CTEST" value="<?php echo $row['sub4thpa']?>">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs1 validate-input">
                    <input id="subtest25" class="input100" type="number" name="sub4prese" placeholder="25/__ESE" value="<?php echo $row['sub4prese']?>">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs1 validate-input">
                    <input id="subtest25" class="input100" type="number" name="sub4prpa" placeholder="25/__CTEST" value="<?php echo $row['sub4prpa']?>">
                    <span class="focus-input100"></span>
                </div>


                <div class="wrap-input100 rs0 validate-input">
                    <input id="subname" class="input100" type="text" name="sub5" placeholder="Enter subject-5" value="<?php echo $row['sub5']?>">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 rs1 validate-input">
                    <input id="subtest50" class="input100" type="number" name="sub5prese" placeholder="50/__ESE" value="<?php echo $row['sub5prese']?>">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs1 validate-input">
                    <input id="subtest50" class="input100" type="number" name="sub5prpa" placeholder="50/__CTEST" value="<?php echo $row['sub5prpa']?>">
                    <span class="focus-input100"></span>
                </div>
                 <!-- <div class="wrap-input100 rs1 validate-input">
                    <input id="subese50" class="input100" type="number" name="sub5prese" placeholder="50/__ESE">
                    <span class="focus-input100"></span>
                </div> -->
                
                <div class="wrap-input100 rs0 validate-input">
                    <input id="enrollmentno" class="input100" type="number" name="enrollmentno" placeholder="enrollment no." style="background-color: rgb(231, 231, 237);" value="<?php echo $row['enrollmentno']?>" >
                    <span class="focus-input100"></span>
                </div>
                <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn" type="submit" name="update">
                <span>
							Submit
							<i class="zmdi zmdi-arrow-right m-l-8"></i>
						</span>
                        </button>

                </div>
            </form>
        </div>
    </div>
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/jquery/jscript.js"></script>
</body>
</html>
<?php
include_once("database.php");
?>


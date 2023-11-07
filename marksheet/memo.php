<?php
include_once("connection.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/memo.css">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.css">
    
    <title>Marksheet</title>
</head>
<body>
    <a href="fetch.php" class="btn btn-info">Back</a>
<?php


    $id=$_GET['id'];


include_once("connection.php");
$sql="SELECT * FROM student where seatno=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$result="FIRST CLASS DIST.";
$lastname=$row['lastname'];
$middlename=$row['middlename'];
$firstname=$row['firstname'];

$examination=$row['examination'];
$seatno=$row['seatno'];
$semester=$row['semester'];
$course=$row['course'];

$sub1=$row['sub1'];
$sub1these=$row['sub1these'];
$sub1thpa=$row['sub1thpa'];
$sub1prese=$row['sub1prese'];
$sub1prpa=$row['sub1prpa'];

$sub2=$row['sub2'];
$sub2these=$row['sub2these'];
$sub2thpa=$row['sub2thpa'];
$sub2prese=$row['sub2prese'];
$sub2prpa=$row['sub2prpa'];

$sub3=$row['sub3'];
$sub3these=$row['sub3these'];
$sub3thpa=$row['sub3thpa'];
$sub3prese=$row['sub3prese'];
$sub3prpa=$row['sub3prpa'];

$sub4=$row['sub4'];
$sub4these=$row['sub4these'];
$sub4thpa=$row['sub4thpa'];
$sub4prese=$row['sub4prese'];
$sub4prpa=$row['sub4prpa'];

$sub5=$row['sub5'];
$sub5prese=$row['sub5prese'];
$sub5prpa=$row['sub5prpa'];



$enrollmentno=$row['enrollmentno'];


$adth1=$sub1thpa+$sub1these;
$adpr1=$sub1prese+$sub1prpa;

$adth2=$sub2thpa+$sub2these;
$adpr2=$sub2prese+$sub2prpa;

$adth3=$sub3thpa+$sub3these;
$adpr3=$sub3prese+$sub3prpa;

$adth4=$sub4thpa+$sub4these;
$adpr4=$sub4prese+$sub4prpa;

$adpr5=$sub5prpa+$sub5prese;

$total=$adpr1+$adpr2+$adpr3+$adpr4+$adpr5+$adth1+$adth2+$adth3+$adth4;
$per=$total/7.5;

            // if($sub1these>=28){
                
            //     $cr1=7;
            // }
            // else{
            //     $cr1=0;
            // }
            // if($sub2these>=28){
            //     $cr2=5;
            // }
            // else{
            //     $cr2=0;
            // }
            // if($sub3these>=28){
            //     $cr3=6;
            // }
            // else{
            //     $cr3=0;
            // }
            // if($sub4these>=28){
            //     $cr4=6;
            // }
            // else{
            //     $cr4=0;
            // }       
            // if($sub5prese>=20){
            //     $cr5=6;
            // }
            //else{
            //$cr5=0;
            //}
            if(($sub1these>=18)&&($sub2these>=28)&&($sub3these>=28)&&($sub4these>=28)&&($sub5prese>=20)||($sub1these>=28))
            {
                $cr1=7;
                
            }
            else{
                $cr1=0;
            }
            if(($sub1these>=28)&&($sub2these>=18)&&($sub3these>=28)&&($sub4these>=28)&&($sub5prese>=20)||($sub2these>=28))
            {
                
                $cr2=5;
               
            }
            else{
                $cr2=0;
            }
            if(($sub1these>=28)&&($sub2these>=28)&&($sub3these>=18)&&($sub4these>=28)&&($sub5prese>=20)||($sub3these>=28))
            {
                $cr3=6;
                
            }
            else{
                $cr3=0;
            }
            if(($sub1these>=28)&&($sub2these>=28)&&($sub3these>=28)&&($sub4these>=18)&&($sub5prese>=20)||($sub4these>=28))
            {
                $cr4=6;
               
            }
            else{
                $cr4=0;
            }
            if(($sub1these>=28)&&($sub2these>=28)&&($sub3these>=28)&&($sub4these>=28)&&($sub5prese>=10)||($sub5prese>=20))
            {
                $cr5=6;
                
            }
            else{
                $cr5=0;
            }
            if(($cr1==0)||($cr2==0)||($cr3==0)||($cr4==0)||($cr5==0))
            {
                $result="FAIL";
                $per=" ";
                
            }

            $totalcr=$cr1+$cr2+$cr3+$cr4+$cr5;
            
?>


    <div class="container">
  

        <h1>Maharashtra State Board of Technical Education</h1>
        <h5 class="h5">STATEMENT OF MARKS</h5>

        <div class="header">
            <table>
                <tr>
                    <th>MR./MS.</th>
                    <th style="text-transform:uppercase;"> <?php echo $lastname.' '.$firstname.' '.$middlename?></th>

                </tr>
            </table>
            <div class="hr"></div>
            <table>
                <tr>
                    <th>ENROLLMENT NO.</th>
                    <td><?php echo$enrollmentno?></td>
                    <th>EXAMINATION</th>
                    <td style="text-transform:uppercase;"><?php echo$examination?></td>
                    <th>SEAT NO.</th>
                    <td><?php echo$seatno?></td>
                    <th><?php echo$semester?></th>
                </tr>
            </table>
            <div class="hr"></div>
            <table>
                <tr>
                    <th>COURSE</th>
                    <td style="text-transform:uppercase;"><?php echo$course?></td>
                </tr>
            </table>
        </div>

            <!-- marks table started -->

        <div class="tbody">
            <table class="table">
                <tr>
                    <th colspan="4" id="title" style="padding-bottom: 0;">TITLE OF COURSE</th>
                    <th id="thpr" style="padding-bottom: 0;">TH/PR</th>
                    <th id="chead" style="padding-bottom: 0;">COURSE</th>
                    <th colspan="3" id="marks" style="padding-bottom: 0;">MARKS</th>
                    <th colspan="2" id="tmarks" style="padding-bottom: 0;">TOTAL MARKS</th>
                    <th id="credits" style="padding-bottom: 0;">CREDITS</th>
                </tr>
                <tr>

                    <td colspan="4" id="td"></td>
                    <td id="td"></td>
                    <th id="td" style="padding-top: 0;">HEAD</th>
                    <th id="mark1">MAX.</th>
                    <th id="mark1">MIN.</th>
                    <th id="mark1">OBT.</th>
                    <th id="mark1">MAX</th>
                    <th id="mark1">OBT</th>
                    <th id="credits1"></th>
                </tr>

                <!-- marks of subject 1 -->
                <tr>
                    <th id="jp" colspan="4" style="text-transform:uppercase;"><?php echo$sub1?></th>
                    <th id="jp">TH</th>
                    <th id="jp">ESE</th>
                    <th id="jp">070</th>
                    <th id="jp">028</th>
                    <th id="jp">0<?php echo$sub1these?></th>

                    <th id="jp">100</th>
                    <th id="jp"><?php echo$adth1?></th>
                    <th id="jp"><?php echo$cr1?></th>


                </tr>
                <tr>
                    <th id="jp" colspan="4"></th>
                    <th id="jp"></th>
                    <th id="jp">PA</th>
                    <th id="jp">030</th>
                    <th id="jp">000</th>
                    <th id="jp">0<?php echo$sub1thpa?></th>
                    <td id="jp"></td>
                    <td id="jp"></td>
                    <td id="jp"></td>

                </tr>

                <tr>
                    <td id="jp" colspan="4"></td>
                    <th id="jp">PR</th>
                    <th id="jp">ESE</th>
                    <th id="jp">050</th>
                    <th id="jp">020</th>
                    <th id="jp">0<?php echo$sub1prese?></th>
                    <th id="jp">100</th>
                    <th id="jp"><?php echo$adpr1?></th>
                    <td id="jp"></td>

                </tr>

                <tr>
                    <td id="jp" colspan="4"></td>
                    <td id="jp"></td>
                    <th id="jp">PA</th>
                    <th id="jp">050</th>
                    <th id="jp">020</th>
                    <th id="jp">0<?php echo$sub1prpa?></th>
                    <td id="jp"></td>
                    <td id="jp"></td>
                    <td id="jp"></td>

                </tr>
                <!-- marks of subject 2 -->
                <tr>
                    <th id="jp" colspan="4" style="text-transform:uppercase;"><?php echo$sub2?></th>
                    <th id="jp">TH</th>
                    <th id="jp">ESE</th>
                    <th id="jp">070</th>
                    <th id="jp">028</th>
                    <th id="jp">0<?php echo$sub2these?></th>

                    <th id="jp">100</th>
                    <th id="jp"><?php echo$adth2?></th>
                    <th id="jp"><?php echo$cr2?></th>

                </tr>
                <tr>
                    <td id="jp" colspan="4"></td>
                    <td id="jp"></td>
                    <th id="jp">PA</th>
                    <th id="jp">030</th>
                    <th id="jp">000</th>
                    <th id="jp">0<?php echo$sub2thpa?></th>
                    <td id="jp"></td>
                    <td id="jp"></td>
                    <td id="jp"></td>

                </tr>
                <tr>
                    <td id="jp" colspan="4"></td>
                    <th id="jp">PR</th>
                    <th id="jp">ESE</th>
                    <th id="jp">025</th>
                    <th id="jp">010</th>
                    <th id="jp">0<?php echo$sub2prese?></th>
                    <th id="jp">050</th>
                    <th id="jp"><?php echo$adpr2?></th>
                    <td id="jp"></td>

                </tr>
                <tr>
                    <th id="jp" colspan="4"></th>
                    <th id="jp"></th>
                    <th id="jp">PA</th>
                    <th id="jp">025</th>
                    <th id="jp">010</th>
                    <th id="jp">0<?php echo$sub2prpa?></th>
                    <td id="jp"></td>
                    <td id="jp"></td>
                    <td id="jp"></td>

                </tr>
                <!-- marks of subject 3 -->
                <tr>
                    <th id="jp" colspan="4" style="text-transform:uppercase;"><?php echo$sub3?></th>
                    <th id="jp">TH</th>
                    <th id="jp">ESE</th>
                    <th id="jp">070</th>
                    <th id="jp">028</th>
                    <th id="jp">0<?php echo$sub3these?></th>

                    <th id="jp">100</th>
                    <th id="jp"><?php echo$adth3?></th>
                    <th id="jp"><?php echo$cr3?></th>

                </tr>
                <tr>
                    <th id="jp" colspan="4"></th>
                    <th id="jp"></th>
                    <th id="jp">PA</th>
                    <th id="jp">030</th>
                    <th id="jp">000</th>
                    <th id="jp">0<?php echo$sub3thpa?></th>
                    <th id="jp"></th>
                    <th id="jp"></th>
                    <th id="jp"></th>

                </tr>
                <tr>
                    <th id="jp" colspan="4"></th>
                    <th id="jp">PR</th>
                    <th id="jp">ESE</th>
                    <th id="jp">025</th>
                    <th id="jp">010</th>
                    <th id="jp">0<?php echo$sub3prese?></th>
                    <th id="jp">050</th>
                    <th id="jp"><?php echo$adpr3?></th>
                    <th id="jp"></th>

                </tr>
                <tr>
                    <th id="jp" colspan="4"></th>
                    <td id="jp"></td>
                    <th id="jp">PA</th>
                    <th id="jp">025</th>
                    <th id="jp">010</th>
                    <th id="jp">0<?php echo$sub3prpa?></th>
                    <td id="jp"></td>
                    <td id="jp"></td>
                    <td id="jp"></td>

                </tr>
                <!-- marks of subject 4 -->
                <tr>
                    <th id="jp" colspan="4" style="text-transform:uppercase;"><?php echo$sub4?></th>
                    <th id="jp">TH</th>
                    <th id="jp">ESE</th>
                    <th id="jp">070</th>
                    <th id="jp">028</th>
                    <th id="jp">0<?php echo$sub4these?></th>

                    <th id="jp">100</th>
                    <th id="jp"><?php echo$adth4?></th>
                    <th id="jp"><?php echo$cr4?></th>

                </tr>
                <tr>
                    <th id="jp" colspan="4"></th>
                    <th id="jp"></th>
                    <th id="jp">PA</th>
                    <th id="jp">030</th>
                    <th id="jp">000</th>
                    <th id="jp">0<?php echo$sub4thpa?></th>
                    <th id="jp"></th>
                    <th id="jp"></th>
                    <th id="jp"></th>

                </tr>

                <tr>
                    <td id="jp" colspan="4"></td>
                    <th id="jp">PR</th>
                    <th id="jp">ESE</th>
                    <th id="jp">025</th>
                    <th id="jp">010</th>
                    <th id="jp">0<?php echo$sub4prese?></th>
                    <th id="jp">050</th>
                    <th id="jp"><?php echo$adpr4?></th>
                    <td id="jp"></td>

                </tr>

                <tr>
                    <td id="jp" colspan="4"></td>
                    <td id="jp"></td>
                    <th id="jp">PA</th>
                    <th id="jp">025</th>
                    <th id="jp">010</th>
                    <th id="jp">0<?php echo$sub4prpa?></th>
                    <td id="jp"></td>
                    <td id="jp"></td>
                    <td id="jp"></td>

                </tr>
                <!-- marks of subject 5 -->
                <tr>
                    <th id="jp" colspan="4" style="text-transform:uppercase;"><?php echo$sub5?></th>
                    <th id="jp">PR</th>
                    <th id="jp">ESE</th>
                    <th id="jp">050</th>
                    <th id="jp">020</th>
                    <th id="jp">0<?php echo$sub5prese?></th>

                    <th id="jp">100</th>
                    <th id="jp"><?php echo$adpr5?></th>
                    <th id="jp"><?php echo$cr5?></th>

                </tr>
                <tr>
                    <th id="jp" colspan="4"></th>
                    <th id="jp"></th>
                    <th id="jp">PA</th>
                    <th id="jp">050</th>
                    <th id="jp">020</th>
                    <th id="jp">0<?php echo$sub5prpa?></th>
                    <th id="jp"></th>
                    <td id="jp"></td>
                    <td id="jp"></td>

                </tr>
<!-- 
                <tr>
                    <td id="jp" colspan="4"></td>
                    <td id="jp">PR</td>
                    <td id="jp">ESE</td>
                    <td id="jp">025</td>
                    <td id="jp">010</td>
                    <td id="jp">0<?php echo$sub5prese?></td>
                    <td id="jp">050</td>
                    <td id="jp"><?php echo$adpr5?></td>
                    <td id="jp"></td>

                </tr>

                <tr>
                    <td id="jp" colspan="4"></td>
                    <td id="jp"></td>
                    <td id="jp">PA</td>
                    <td id="jp">025</td>
                    <td id="jp">010</td>
                    <td id="jp">0<?php echo$sub5prpa?></td>
                    <td id="jp"></td>
                    <td id="jp"></td>
                    <td id="jp"></td>
                </tr> -->
            </table>
        </div>
        <!-- marks table end -->

        <!-- footer area  -->
        <div class="footer">
            <table class="table">
                <tr>
                    <th id="date">DATE:</th>
                    <td id="msheet" style="padding-bottom:2px;">This Marksheet is Download feom Internet</td>
                    <th id="tmax">TOTAL MAX.</th>
                    <th id="rw">RESULT WITH</th>
                    <th id="tmark">TOTAL MARKS</th>
                    <th id="tc">TOTAL CREDIT</th>
                </tr>
                <tr>
                    <td id="td">04/11/2023</td>
                    <th id="sec">SECRETARY</th>
                    <th id="mark">MARKS</th>
                    <th id="per">%</th>
                    <th id="ob">OBTAINED</th>
                    <td id="td"></td>
                </tr>
                <tr>
                    <td id="lr"></td>
                    <td colspan="" id="sec1">
                        MAHARASHTRA STATE BOARD OF TECHNICAL
                    </td>
                    <TH id="tblr">750</TH>
                    <th id="tblr"><?php echo$per?></th>
                    <th id="tblr"><?php echo$total?></th>
                    <th id="tblr"><?php echo$totalcr?></th>
                </tr>
                <tr>
                    <td id="tblr">4/0777/CO6I</td>
                    <td id="lrb" style="border-top:0 ;">EDUCATION</td>
                    <th colspan="4" id="lrb"><?php echo$result?></th>
                </tr>
            </table>
            <table class="table">
                <tr>
                    <th colspan="12" id="lrb">INSTRUCTIONS</th>
                </tr>
                <tr>
                    <td id="pd" style="text-align: left;">1. Report Discrepncy is this certificate to Head of the institution.</td>
                    <td colspan="6" id="pd" style="text-align: left;">2. This certificate of marks is issued as per prevaling rules and regulations of MSBTE at the time of this exam.</td>
                </tr>
                <tr>
                    <td id="pd" style="text-align: left;">3. Eligiblity fo0r III semester is based on total number of failure subject in I&II semester taken togather.</td>
                    <td colspan="6" id="pd" style="text-align: left;">4. Candidte is eligible for admission to V/VII Semester only if he/she is full passed in I & II/III & IV semesters & availed benefit of A.T.K.T/PASS at III & IV/V & VI semesters taken togather respectively.</td>
                </tr>
                <tr>
                    <td id="lrb" colspan="12" style="text-align: left;">5. Class awarded for Diploma is based on aggrgate mark obtained in pre-final & final semester.</td>
                </tr>
                <tr>
                    <th id="lrb" colspan="12">ABBRAEVATION DETAILS</th>
                </tr>
            </table>
            <table class="table table1">
                <tr>
                    <td id="pad">TH</td>
                    <TD>Theory</TD>
                    <td id="pad">TW</td>
                    <td>Team Work</td>
                    <td>AB</td>
                    <td>Absent</td>
                    <td>%</td>
                    <td>Percentage of Mark</td>
                </tr>
                <tr>
                    <td id="t2">TM</td>
                    <TD id="t2">Theory Test Marks</TD>
                    <TD id="t2">PJ</TD>
                    <td id="t2">Project Work</td>
                    <td id="t2">EX</td>
                    <td id="t2">Exemption</td>
                    <td id="b1">WFLY</td>
                    <td id="b1">Result Withheld Due to Pending Lower Year</td>
                </tr>
                <tr>
                    <td>PR</td>
                    <td>Practical</td>
                    <td>SW</td>
                    <td>Sessional</td>
                    <td>OTP</td>
                    <td>Optional</td>
                    <td id="t"></td>
                    <td id="t"></td>
                </tr>
                <tr>
                    <td>PM</td>
                    <td>Practical Test mark</td>
                    <td>IT</td>
                    <td>Industrial Training</td>
                    <td>LSP</td>
                    <td>Lower Semester Pending</td>
                    <td>CON</td>
                    <td>Condoned</td>
                </tr>
                <tr>
                    <td>AG</td>
                    <td>Aggregate</td>
                    <td>@</td>
                    <td>Condoned Marks</td>
                    <td>PLY</td>
                    <td>Pending Lower Year</td>
                    <td>FT</td>
                    <td>Failure But Allowed To Keep Term</td>

                </tr>
                <tr>
                    <td>AP</td>
                    <td>Additional Practical</td>
                    <td>*</td>
                    <td>Failure Marks</td>
                    <td id="b"></td>
                    <td id="b"></td>
                    <td>A.T.K.T</td>
                    <td>Allowed to Keep Term</td>

                </tr>
                <tr>
                    <td>OR</td>
                    <td>Oral</td>
                    <td>C#</td>
                    <td>Carry Forward Marks</td>
                    <td id="wfls">WFLS</td>
                    <td id="null1">Result Withheld Due to Pending Lower Semester</td>
                    <td id="b"></td>
                    <td id="b"></td>

                </tr>
                <tr>
                    <td id="t2">ESE</td>
                    <td id="t2">End Semester Exam</td>
                    <td id="t2">PA</td>
                    <td id="t2">Progressive Assessment</td>
                    <td id="null"></td>
                    <td id="t"></td>
                    <td id="t1">DIST</td>
                    <td id="t1">Distinction</td>
                </tr>
                <tr>
                    <th colspan="12" id="tblr" style="text-align: left;">Ref: Formerly known as The board of Thecnical Examinations Maharashtra State of Technical Education Act.1997(Mah XXXVIII of 1997)and Maharashtra Government Gazette Notification Section IV-B issued on march 31,1999(-172/16/200/20-04:07:2007
                        12:00:28)
                    </th>
                </tr>
            </table>

        </div>
    </div>
</div>
    <script src="vendor/jquery/jscript.js"></script>
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>

</body>

</html>

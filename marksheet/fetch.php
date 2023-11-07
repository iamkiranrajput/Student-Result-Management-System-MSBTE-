<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>Document</title>
</head>

<body>
<a href="index.php" class="btn btn-info" style="margin:20px">Back</a>

    <div class="container">
        
        <table class="table" style="text-align:center;">
            <tr>
                <th style="text-align:center;">SEAT NO</th>
                <th style="text-align:center;">STUDENT NAME</th>
                <th style="text-align:center;">ACTION</th>
            </tr>

            <?php
                include_once("connection.php");
                $sql = "SELECT * FROM student";
                $result = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($result)) {
                    $seatno = $row['seatno'];
                    $lname = $row['lastname'];
                    $fname = $row['firstname'];
                    $mname = $row['middlename'];

                    echo "<tr><td>" . $seatno . "</td><td>" . $lname . " " . $fname . " " . $mname . "</td><td>
                        <form action='' method='POST'>
                            <a href='memo.php?id=$seatno' class='btn btn-info'>Scorecard</a>
                            <button class='btn btn-danger' onclick='deleteData(" . $seatno . ")'>Delete</button>
                            <a href='update.php?id=$seatno' class='btn btn-success'>Update</a>
                        </form>
                    </td></tr>";
                }
            ?>
        </table>
    </div>


<script>
    function deleteData(deleteid) {
        var conf = confirm("Are you sure?");
        if (conf == true) {
            $.ajax({
                url: "delete.php",
                type: "POST",
                data: { deleteid: deleteid },
                success: function (data, status) {
                    if (data == 'success') {
                        // Remove the deleted row from the table
                        $('#row_' + deleteid).remove();
                    }
                }
            });

            return false; 
        }
    }
</script>



</body>
</html>

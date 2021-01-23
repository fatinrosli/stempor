
<?php
include_once("dbconnect.php");
include('navbar.php');
$schoolname = $_GET['schoolname'];
$schoolemail = $_GET['schoolemail'];
$programname = $_GET['programname'];
$date = $_GET['date'];
$programdescription = $_GET['programdescription'];
$schoolinvolve = $_GET['schoolinvolve'];
$studentinvolve = $_GET['studentinvolve'];
$company = $_GET['company'];
$companyname = $_GET['companyname'];
$id = $_GET['id'];

if (isset($_GET['operation'])) {
    try {
        $sqlupdate = "UPDATE steminfo SET programname = '$programname',date= '$date', schoolinvolve = '$schoolinvolve', studentinvolve = '$studentinvolve', company = '$company', companyname = '$companyname'  WHERE schoolname = '$schoolname' AND id = '$id'";
        $conn->exec($sqlupdate);
        echo "<script> alert('Update Success')</script>";
        echo "<script> window.location.replace('mainpage.php?schoolname=".$schoolname."&schoolemail=".$schoolemail."') </script>;";
      } 
      catch(PDOException $e) {
        echo "<script> alert('Update Error')</script>";
      }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
</head>
<body>
<div class="container">
   <h3 align="center">Update <?php echo $schoolname?> </h3>

    <form action="updateinfo.php" method="get" align="center" onsubmit="return confirm('Update?');">
        <input type="hidden" id="schoolname" name="schoolname" value="<?php echo $schoolname;?>"><br>
        <input type="hidden" id="schoolemail" name="schoolemail" value="<?php echo $schoolemail;?>"><br>
        <input type="hidden" id="id" name="id" value="<?php echo $id;?>"><br>
        <input type="hidden" id="operation" name="operation" value="update"><br>
        <label for="programname">Program Name:</label><br>
        <input type="text" id="programname" name="programname" value="<?php echo $programname;?>" required><br>
        <br>
        <label for="date">Date:</label><br>
        <input type="date" id="date" name="date" value="<?php echo $date;?>" required><br>
        <br>
        <label for="programdescription">Program Description:</label><br>
        <input type="text" id="programdescription" name="programdescription" value="<?php echo $programdescription;?>" required><br>
        <br>
        <label for="schoolinvolve">School Involve</label><br>
        <input type="text" id="schoolinvolve" name="schoolinvolve" value="<?php echo $schoolinvolve;?>" required><br>
        <br>
        <label for="studentinvolve">Student Involve</label><br>
        <input type="text" id="studentinvolve" name="studentinvolve" value="<?php echo $studentinvolve;?>" required><br>
        <br>
        <label for="company">company</label><br>
        <select id="text" name="company" value="<?php echo $company;?>" required><br><br>
        <br>
        <option value="industry">Industry</option>
        <option value="agency">Agency</option>
        <br>
        <label for="companyname">company Name</label><br>
        <input type="text" id="companyname" name="companyname" value="<?php echo $companyname;?>" required><br>
        <br>
        <input type="submit" value="Update">
    </form>
    <p align="center"><a href="mainpage.php?schoolname=<?php echo $schoolname.'&schoolemail='.$schoolemail?>">Cancel</a></p>
    </div>
</body>

</html>
<?php
// session_start();
include('navbar.php'); 
include_once("dbconnect.php");
$schoolname = $_GET['schoolname'];
$schoolemail = $_GET['schoolemail']; 

    if (isset($_GET['options'])) {
      $id = $_GET['id'];
      try {
        $sql = "DELETE FROM steminfo WHERE id = '$id'";
        $conn->exec($sql);
        echo "<script> alert('Delete Success')</script>";
      } catch(PDOException $e) {
        echo "<script> alert('Delete Error')</script>";
      }
    }

    try {
       
        $sql = "SELECT * FROM steminfo WHERE schoolname = '$schoolname'";    
        $stmt = $conn->prepare($sql );
        $stmt->execute();
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $steminfo = $stmt->fetchAll(); 

        echo "<div class='tableplan'>";
        echo "<p><h1 align='center'>Your Current Planning Trips</h1></p>";
        echo "<table border='1'>
        <tr>
          <th>Program Name</th>
          <th>Date</th>
          <th>Program Description</th>
          <th>School Involve</th>
          <th>Student Involve</th>
          <th>Company</th>
          <th>Company Name</th>
          <th>Option</th>
        </tr>";
        echo "</div>";
        
        foreach($steminfo as $steminfo) {
            echo "<tr>";
            echo "<td>".$steminfo['programname']."</td>";
            echo "<td>".$steminfo['date']."</td>";
            echo "<td>".$steminfo['programdescription']."</td>";
            echo "<td>".$steminfo['schoolinvolve']."</td>";
            echo "<td>".$steminfo['studentinvolve']."</td>";
            echo "<td>".$steminfo['company']."</td>";
            echo "<td>".$steminfo['companyname']."</td>";
            echo "<td><a href='mainpage.php?schoolemail=".$schoolemail."&schoolname=".$schoolname."&id=".$steminfo['id']."
            &options=del' onclick= 'return confirm(\"Delete. Are your sure?\");'><b>Delete<b></a><br>
            <a href='updateinfo.php?schoolemail=".$schoolemail."&schoolname=".$schoolname."&programname=".$steminfo['programname']."&id=".$steminfo['id']."
            &programdescription=".$steminfo['programdescription']."&schoolinvolve=".$steminfo['schoolinvolve']."&studentinvolve=".$steminfo['studentinvolve']."
            &date=".$steminfo['date']."&company=".$steminfo['company']."&companyname=".$steminfo['companyname']."'><b>Update<b></a></td>";
            echo "</tr>";
        } 
        echo "</table>";

    } catch(PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    }
  
  $conn = null;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
</body>
</html>